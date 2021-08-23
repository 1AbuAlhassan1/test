<?php

    function show ($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }

    

    $obj = json_decode(file_get_contents("../public/assets/json/lang.json"), true);

    function tran( $string ){

        if( isset( $_POST["lang-ar"] ) ){

            // set COOKIE for "lang" as "ar" for [arabic] 
            // setcookie("lang", "ar", time() + 86400, "/");
            $_SESSION["lang"] = "ar";
            header("Refresh:0 ");

        }elseif( isset( $_POST["lang-en"] ) ){

            // set COOKIE for "lang" as "en" for [english]
            // setcookie("lang", "en", time() + 86400, "/");
            $_SESSION["lang"] = "en";
            header("Refresh:0 ");

        }

        global $obj;

        if( isset( $_SESSION["lang"] ) ){

            if( $_SESSION["lang"] == "ar" ){

                return $obj[strtolower($string)];

            }elseif( $_SESSION["lang"] == "en" ){

                return $string;

            }
        }else{
            return $string;
        }

    }