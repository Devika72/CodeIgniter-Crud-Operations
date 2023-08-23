<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    function index()
    {
        $data['users'] = $this->user_model->getUsers();
        $this->load->view('user/index', $data);
    }
    function add()
    {
        
            $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('user/add_user');
                }
                else
                {
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $this->input->post('username');
                    $email = $this->input->post('email');
                    $mobile = $this->input->post('mobile');
                    $address = $this->input->post('address');
                    $data = array(
                        'username' => $username,
                        'email' => $email,
                        'mobile' => $mobile,    
                        'address' => $address,
                    );

                    $status =  $this->user_model->insertUser($data);
                    
                    if ($status > 0) {
                        $this->session->set_flashdata('success', 'successfully Added');
                        
                        return redirect('user/index');
                        
                    } else {
                        $this->session->set_flashdata('error', 'Error');
                       
                    }
                }
                   
             }
    }

   

    function edit($id)
    {
        $data['user'] = $this->user_model->getUser($id);
        $data['id']=$id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $data = array(
                'username' => $username,
                'email' => $email,
                'mobile' => $mobile,
                'address' => $address,
            );

            $status =  $this->user_model->updateUser($data, $id);
            if ($status > 0) {
                $this->session->set_flashdata('success', 'successfully updated');
                
               return redirect('user/index');
                
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('user/edit_user');
            }
        }

        $this->load->view('user/edit_user',$data);
    }

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status =$this->user_model->deleteUser($id);
            if ($status > 0) {
                $this->session->set_flashdata('success', 'successfully Deleted');
               return redirect(base_url('user/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
               return redirect(base_url('user/index/'));
            }
        }
    }
}
