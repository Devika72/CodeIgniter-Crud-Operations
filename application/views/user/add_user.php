<?php $this->load->view('includes/header'); ?>

<style>
    .container {
        background-color: rgb(54, 58, 58);
        max-width: 450px; 
        margin: 10 auto; 
        padding: 20px; 
    }
    .card {
        background-color: white;
        border-radius: 20px; 
        
    }
    .card-body{
        

    }
    .form-label{
        color: rgb(54, 58, 58);

    }
    .form-control {
        
    }       
       
</style>

<div class="container" style="background-color: rgb(54, 58, 58);">
    <div class="row">
                    
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Add User</h5>
                <?php  echo validation_errors(); ?>

                
                <form role="form" method="post" action="<?php echo base_url('User/add') ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" id="username">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" maxlength="10" class="form-control" name="mobile" placeholder="Mobile" id="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control" id="address">
                    </div>

                   <center> <button type="submit" class="btn btn-primary" value="submit">Submit</button></center>
                </form>
              
                
                
            </div>
        </div>
    </div>
    
      
</div>
