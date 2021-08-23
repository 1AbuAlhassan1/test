<?php
    class login extends controllerMain {
        public function index ($one = "", $two = "", $three = "") {
            $info["title"] = "login";
            if ( isset($_POST["login"]) ) {
                $this -> loadmodel("user");
                $user = new user();
                $user -> login($_POST);
                echo $_SESSION["error"];
            }
            // check if user is logged in
            if ( $_SESSION["loginStatus"] === 1 ) {
                header("Location: http://localhost:8080/MVCframworkTest2/public/home");
            }

            $this -> view("login", $info);
        }
    }