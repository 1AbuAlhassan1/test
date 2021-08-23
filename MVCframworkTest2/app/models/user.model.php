<?php
    class user {
        public function login ($POST) {

            $database = new dataBase();
            if ( $POST["email_login"] != "" && $POST["password_login"] != "" ) {
                
                $array = [ $POST["email_login"], $POST["password_login"] ];

                $query = "SELECT user_email, user_password FROM users WHERE user_email=? AND user_password=?;";
                $userdata = $database -> read( $query, $array );
                if ( $userdata[0]["user_email"] == $POST["email_login"] && $userdata[0]["user_password"] == $POST["password_login"] ) {
                    // $_SESSION["error"] = "none";
                    $_SESSION["loginStatus"] = 1;
                    header("Location: http://localhost:8080/MVCframworkTest2/public/home");
                    die;
                }else {
                    $_SESSION["error"] = "wrong email or password";
                    $_SESSION["loginStatus"] = 0;
                    header("Location: http://localhost:8080/MVCframworkTest2/public/login");
                }
            }else {
                $_SESSION["error"] = "please enter a valid email and password";
                $_SESSION["loginStatus"] = 0;
                header("Location: http://localhost:8080/MVCframworkTest2/public/login");
            }

        }
        public function signup ( $POST ) {

            $database = new dataBase();

            if ( isset ( $POST["firstname_signup"] ) && isset ( $POST["lastname_signup"] ) && isset ( $POST["username_signup"] ) && isset ( $POST["email_signup"] ) && isset ( $POST["password_signup"] ) ) {

                $array = [ $POST["firstname_signup"], $POST["lastname_signup"], $POST["username_signup"], $POST["email_signup"], $POST["password_signup"] ];

                $query = "INSERT INTO users (user_firstname,user_lastname,user_username,user_email,user_password) VALUES (?, ?, ?, ?, ?);";
                if ( $this -> check_database_username ( $POST["username_signup"] ) ) {

                    $_SESSION["error"] = "username already exists";
                    echo $_SESSION["error"];

                }else if ( $this -> check_database_email ( $POST["email_signup"] ) ) {
                    $_SESSION["error"] = "email already exists";
                }else {

                    $database -> write( $query, $array );
                    if ( $database ) {
                        header("Location: http://localhost:8080/MVCframworkTest2/public/login");
                    }

                }
                
            }
        }

        public function check_database_username ($input) {
            $database = new dataBase();
            $query = "SELECT user_username FROM users WHERE user_username=?;";
            $username = $database -> read( $query, [$input] );
            if ( $username[0]["user_username"] == $input ) {
                return true;
            }else{
                return false;
            }
        }
        public function check_database_email ($input) {
            $database = new dataBase();
            $query = "SELECT user_email FROM users WHERE user_username=?;";
            $email = $database -> read( $query, [$input] );
            if ( $email[0]["user_email"] == $input ) {
                return true;
            }else{
                return false;
            }
        }
    }