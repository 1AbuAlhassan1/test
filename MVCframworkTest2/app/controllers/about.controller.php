<?php
    class about extends controllerMain {
        public function index ($one = "", $two = "", $three = "") {
            $info["title"] = "about";
            $this -> view("about", $info);
        }
    }