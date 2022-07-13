<?=$this->extend("master")?>

<?=$this->section("pageTitle")?>
Contact Us
<?=$this->endSection()?>
  
<?=$this->section("content")?>


</div>
<div class="container shadow-lg rounded contactUs-form">
            <div class="contactUs-logo m-2">
                <img src="https://jordizle.com/static/img/about/mccann.jpg" alt="mccann-contactLogo"/>
            </div>
            <form action="<?= base_url(); ?>/contactus/submit" class="justify-content-center p-5" method="post">
            

            <!-- Shows Error Messages and Success Message on Form Validation -->
            <?php if(isset($validation)) :?>
                <div class="border border-danger rounded">
                    <h4 class="text-danger"><?= $validation->listErrors() ?></h4>
                </div>
            <?php elseif(isset($success)) :?>
                <div class="border border-success rounded">
                    <h4 class="text-success"><?= $success?></h4>
                </div>
            <?php endif;?>
                            
            <div class="row m-2">
            <h3>Contact US</h3>
                <div class="col-sm-8 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your Full Name">
                        <label for="fullName">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailID" name="emailID" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="comments" name="comments" style="width: 100%; height: 130px;" placeholder="Leave a comment here"></textarea>
                        <label for="floatingTextarea">Enter Comments</label>
                    </div>
                  
                </div>
                <center><button type="submit" class="btn btn-success btn-lg m-2 text-white">Submit</button></center>
            </div>
            </form>
</div>

<?=$this->endSection()?>