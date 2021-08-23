<?php
    class home extends controllerMain {
        public function index ($one = "", $two = "", $three = "") {
            $info["title"] = "home";
            $this -> view("home", $info);
        }
    }