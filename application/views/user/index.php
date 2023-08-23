<?php $this->load->view('includes/header'); ?>
<style>
    
</style>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">User List</h4>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($users as $row) { ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['mobile']?></td>
                            <td><?=$row['address']?></td>
                            <td>
                                
                                <a href="<?=base_url()?>user/edit/<?=$row['id']?>" onclick="return confirm('Are you sure want to update this user ?')"class="btn btn-sm btn-primary">Edit</a>
                                <a href="<?=base_url()?>user/delete/<?=$row['id']?>" onclick="return confirm('Are you sure want to delete this user ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <center><div><a href="<?=base_url()?>user/add/<?=$row['id']?>" class="btn btn-sm btn-primary">Add User into User List</a></div></center> 
            </div>
        </div>
    </div>
   
    
<?php $this->load->view('includes/footer'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(function() {
        alert('<?php echo $this->session->flashdata('success'); ?>')
            <?php
             $this->load->helper('form');
            $error = $this->session->flashdata('error');
            $success = $this->session->flashdata('success');
            if ($success) {

            ?>
            Swal.fire({
            icon: 'success',
            title: 'success',
            text: '<?php echo $success ?>'
            })
            <?php } ?>
 })
</script>