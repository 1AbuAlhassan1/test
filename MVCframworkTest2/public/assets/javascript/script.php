<script>
$("document").ready(function () {

    var inputs = Array.from($(".inputs"));
    var signup_btn = document.getElementById("signup_btn");
    var log_btn = $(".log");
    var logout_btn = $("#logout_btn");
    var loginStatus = <?php echo $_SESSION["loginStatus"]; ?>;
    
    // resposive language selector
    var lang = "en";
    var lang_select = $("#lang_select");
    lang = "<?php echo $_SESSION["lang"]; ?>";
    if ( lang === "en" ) {
        lang_select[0].setAttribute("name", "lang-ar");
        lang_select[0].setAttribute("value", "<?php echo tran("arabic") ?>");
    } else if ( lang === "ar" ) {
        lang_select[0].setAttribute("name", "lang-en");
        lang_select[0].setAttribute("value", "<?php echo tran("english") ?>");
    }
    //end of language selector


    if (loginStatus) {
        log_btn.css("display", "none");
        logout_btn.css("display", "inline-block");
        console.log("lllllllllllllllllll");
    }else{
        log_btn.css("display", "inline-block");
        logout_btn.css("display", "none");
        console.log("oooooooooooooo");
    }

    const RegExPatterns = {
        "firstname_signup"  : /^[a-z]{3,25}$/i ,
        "lastname_signup"   : /^[a-z]{3,25}$/i ,
        "username_signup"   : /^[a-z_-\d]{3,20}$/i ,
        "email_signup"      : /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/i ,
        "password_signup"   : /^[/w!@#$%^&*-_]{8,25}$/i,
        "repassword_signup" :/ /
    };

    // RegEx check function
    function RegEx_validator ( field, RegEx ) {
        if ( RegEx.test(field.value) ) {
            field.classList.remove("invalid");
            field.classList.add("valid");
        }else {
            field.classList.remove("valid");
            field.classList.add("invalid");
        }
    };

    inputs.forEach((input) => {
        input.addEventListener ('keyup', function () {
            RegEx_validator ( input, RegExPatterns[input.getAttribute("name")] );
            if ( inputs[5].value === inputs[4].value ) {
                inputs[5].classList.remove("invalid");
                inputs[5].classList.add("valid");
            }else {
                inputs[5].classList.remove("valid");
                inputs[5].classList.add("invalid");
            }
            if ( inputs[0].classList.contains("valid") && inputs[1].classList.contains("valid") && inputs[2].classList.contains("valid") && inputs[3].classList.contains("valid") && inputs[4].classList.contains("valid") && inputs[5].value === inputs[4].value ) {
                signup_btn.removeAttribute("disabled")
                signup_btn.classList.remove("signup_btn_invalid");
                signup_btn.classList.add("signup_btn_valid");
            }else{
                $(signup_btn).attr("disabled", "disabled");
                signup_btn.classList.remove("signup_btn_valid");
                signup_btn.classList.add("signup_btn_invalid");
            }
        });

    });
});
</script>