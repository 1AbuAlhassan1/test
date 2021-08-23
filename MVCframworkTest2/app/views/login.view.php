    <?php $this -> view("header"); ?>
    <div class = "form_container centEL col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class = "inputs_container col-10 col-sm-10 col-md-6 col-lg-4 col-xl-3 col-xxl-3 flipInY">
            <form action="" method="POST" class = "login_form">
                <input type="text" name="email_login"      placeholder= "<?php echo tran("Email") ?>" >
                <input type="text" name="password_login"   placeholder= "<?php echo tran("PassWord") ?>" >
                <button type="submit" name="login" id="login_btn"> <?php echo tran("Login") ?> </button>
            </form>
        </div>
    </div>
    <?php $this -> view("footer") ?>