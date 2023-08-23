<?php $this->load->view('includes/header'); ?>
<style>
.container {
        background-color: rgb(54, 58, 58);
        max-width: 450px; /* Set your desired max width */
        margin: 10 auto; /* Center the container horizontally */
        padding: 20px; /* Add some padding for spacing */
    }
    .card {
        background-color: white;
        border-radius: 20px; 
        
    }
</style>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Update User</h5>
                <form role="form" method="post" action="<?= base_url() ?>user/edit/<?=$id?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" value="<?=$user->username?>" class="form-control" id="username">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?=$user->email?>" placeholder="Email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" maxlength="10" class="form-control" value="<?=$user->mobile?>" name="mobile" placeholder="Mobile" id="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" placeholder="Address" value="<?=$user->address?>" class="form-control" id="address">
                    </div>

                    <center><button type="submit" class="btn btn-primary">Update</button></center>
                </form>    
                      
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer'); ?>
