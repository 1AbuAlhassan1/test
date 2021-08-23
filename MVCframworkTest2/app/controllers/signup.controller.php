<?php
    class signup extends controllerMain {
        public function index ($one = "", $two = "", $three = "") {
            $info["title"] = "signup";

            if ( isset($_POST["signup"]) ) {
                $this -> loadmodel("user");
                $user = new user();
                $user -> signup($_POST);
            }
            // check if user is logged in
            if ( !$_SESSION["loginStatus"] === 1 ) {
                header("Location: http://localhost:8080/MVCframworkTest2/public/home");
            }
            // $database = new dataBase();
            // console_log($database -> read( "SELECT user_username FROM users WHERE user_username=?;", ["AbuAlhassan11"] ));
            $this -> view("signup", $info);
        }
    }