// Document is ready
$(document).ready(function () {
	
    // Validate Username
        $('#usercheck').hide();
        let usernameError = true;
        $('#clgnames').keyup(function () {
            validateUsername();
        });
        
        function validateUsername() {
        let usernameValue = $('#clgnames').val();
        if (usernameValue.length == '') {
        $('#usercheck').show();
            usernameError = false;
            return false;
        }
        
        else {
            $('#usercheck').hide();
        }
        }
    
        $('#coursecheck').hide();
        let courseError = true;
        $('#courses').keyup(function () {
            validatecourse();
        });
        
        function validatecourse() {
        let courseValue = $('#courses').val();
        if (courseValue.length == '') {
        $('#coursecheck').show();
        courseError = false;
            return false;
        }
        
        else {
            $('#coursecheck').hide();
        }
        }



        $('#checbranch').hide();
        let branchError = true;
        $('#noBranch').keyup(function () {
            validatebranch();
        });
        
        function validatebranch() {
        let branchValue = $('#noBranch').val();
        if (branchValue.length == '') {
        $('#checbranch').show();
        branchError = false;
            return false;
        }
        
        else {
            $('#checbranch').hide();
        }
        }

        $('#admincheck').hide();
        let adminError = true;
        $('#admin').keyup(function () {
            validateadmin();
        });
        
        function validateadmin() {
        let adminValue = $('#admin').val();
        if (adminValue.length == '') {
        $('#admincheck').show();
        adminError = false;
            return false;
        }
        
        else {
            $('#admincheck').hide();
        }
        }


        $('#passcheck').hide();
        let passError = true;
        $('#pass').keyup(function () {
            validatepass();
        });
        
        function validatepass() {
        let passValue = $('#pass').val();
        if (adminValue.length == '') {
        $('#passcheck').show();
        passError = false;
            return false;
        }
        
        else {
            $('#passcheck').hide();
        }
        }


        $('#repasscheck').hide();
        let repassError = true;
        $('#repass').keyup(function () {
            validaterepass();
        });
        
        function validaterepass() {
        let repassValue = $('#repass').val();
        if (adminValue.length == '') {
        $('#repasscheck').show();
        repassError = false;
            return false;
        }
        
        else {
            $('#repasscheck').hide();
        }
        }
    // // Validate Email
    //     const email =
    //         document.getElementById('email');
    //     email.addEventListener('blur', ()=>{
    //     let regex =
    // /^([\-\.0-9a-zA-Z]+)@([\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    //     let s = email.value;
    //     if(regex.test(s)){
    //         email.classList.remove(
    //                 'is-invalid');
    //         emailError = true;
    //         }
    //         else{
    //             email.classList.add(
    //                 'is-invalid');
    //             emailError = false;
    //         }
    //     })
        
    // // Validate Password
    //     $('#passcheck').hide();
    //     let passwordError = true;
    //     $('#password').keyup(function () {
    //         validatePassword();
    //     });
    //     function validatePassword() {
    //         let passwordValue =
    //             $('#password').val();
    //         if (passwordValue.length == '') {
    //             $('#passcheck').show();
    //             passwordError = false;
    //             return false;
    //         }
    //         if ((passwordValue.length < 3)||
    //             (passwordValue.length > 10)) {
    //             $('#passcheck').show();
    //             $('#passcheck').html
    // ("**length of your password must be between 3 and 10");
    //             $('#passcheck').css("color", "red");
    //             passwordError = false;
    //             return false;
    //         } else {
    //             $('#passcheck').hide();
    //         }
    //     }
            
    // // Validate Confirm Password
    //     $('#conpasscheck').hide();
    //     let confirmPasswordError = true;
    //     $('#conpassword').keyup(function () {
    //         validateConfirmPassword();
    //     });
    //     function validateConfirmPassword() {
    //         let confirmPasswordValue =
    //             $('#conpassword').val();
    //         let passwordValue =
    //             $('#password').val();
    //         if (passwordValue != confirmPasswordValue) {
    //             $('#conpasscheck').show();
    //             $('#conpasscheck').html(
    //                 "**Password didn't Match");
    //             $('#conpasscheck').css(
    //                 "color", "red");
    //             confirmPasswordError = false;
    //             return false;
    //         } else {
    //             $('#conpasscheck').hide();
    //         }
    //     }
        
    // // Submit button
    //     $('#submitbtn').click(function () {
    //         validateUsername();
    //         validatePassword();
    //         validateConfirmPassword();
    //         validateEmail();
    //         if ((usernameError == true) &&
    //             (passwordError == true) &&
    //             (confirmPasswordError == true) &&
    //             (emailError == true)) {
    //             return true;
    //         } else {
    //             return false;
    //         }
    //     });
    });