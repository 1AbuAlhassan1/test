<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $info["title"] ?> </title>
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css.map">
    <!-- google font ( Open Sans Condensed [css : font-family: 'Open Sans Condensed', sans-serif;] ) !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <!-- google font ( Architects Daughter [css : font-family: 'Architects Daughter', cursive;] ) !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <!-- google font ( Amatic SC [css : font-family: 'Amatic SC', cursive;] ) !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <!-- google font ( Cairo [css : font-family: 'Cairo', sans-serif;] ) !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- my style page !-->
    <link rel="stylesheet" href="../public/assets/css/vivify/vivify.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body dir=<?php echo tran("ltr"); ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 test1">
                    <div class="test2">
                        <ul>
                            <li>
                                <a href="home"> <?php echo tran("Home") ?> </a>
                            </li>

                            <li class = "log">
                                <a href="login"> <?php echo tran("Login") ?> </a>
                            </li>

                            <li class = "log">
                                <a href="signup"> <?php echo tran("Signup") ?> </a>
                            </li>

                            <li>
                                <a href="about"> <?php echo tran("About") ?> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="lang-select">
                        <form action="" method="POST">
                            <input type="submit" name="lang-en" value="<?php echo tran("English") ?>" id="lang_select">
                            <input type="submit" name="logout"  value="<?php echo tran("logout") ?>"  id="logout_btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $this -> loadmodel("user");
        $log = new user();

        if ( isset($_POST["logout"]) ) {
            $log -> logout();
        }
    ?>