    <?php $this->view("header") ?>

    <div class="form_container centEL col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="inputs_container col-10 col-sm-10 col-md-6 col-lg-4 col-xl-3 col-xxl-3 flipInY">
            <h5> <?php echo tran("Enter The Following Informations"); ?> </h5>
            <form action="" method="POST">
                <input type="text" name="firstname_signup" class="inputs" placeholder="<?php echo tran("FirstName"); ?>" />
                <input type="text" name="lastname_signup" class="inputs" placeholder="<?php echo tran("LastName"); ?>" />
                <input type="text" name="username_signup" class="inputs" placeholder="<?php echo tran("UserName"); ?>" />
                <input type="text" name="email_signup" class="inputs" placeholder="<?php echo tran("Email"); ?>" />
                <input type="text" name="password_signup" class="inputs" placeholder="<?php echo tran("Password"); ?>" />
                <input type="text" name="repassword_signup" class="inputs" placeholder="<?php echo tran("Re Enter The Password"); ?>" />

                <button type="submit" name="signup" id="signup_btn" class = "" disabled> <?php echo tran("Sign"); ?> </button>
            </form>
           
        </div>
    </div>

    <?php $this->view("footer") ?>