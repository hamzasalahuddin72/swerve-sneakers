var submitBtn = document.querySelector(".form-button");
var username = document.querySelector("#username");
var password = document.querySelector("#password");
var allErrorMsgs = document.querySelectorAll(".form-input-error");
var usernameEmpty = document.querySelector("#username-empty");
var usernameInvalid = document.querySelector("#username-invalid");
var passwordEmpty = document.querySelector("#password-empty");
var usernameConditions = document.querySelector("#username-conditions");
var passwordConditions = document.querySelector("#password-conditions");
var usernameMsg1 = document.querySelector("#u-msg1");
var usernameMsg2 = document.querySelector("#u-msg2");
var usernameMsg3 = document.querySelector("#u-msg3");
var usernameMsg4 = document.querySelector("#u-msg4");
var passwordMsg1 = document.querySelector("#p-msg1");
var passwordMsg2 = document.querySelector("#p-msg2");
var passwordMsg3 = document.querySelector("#p-msg3");
var passwordMsg4 = document.querySelector("#p-msg4");
var inputFields = document.querySelectorAll("input");

inputFields.forEach(function(e){
    e.addEventListener('keyup', function(){
        allErrorMsgs.forEach(function(e){
            e.style.display = 'none';
        })
    })
})

/*
username.addEventListener('keyup', function(){
    usernameEmpty.style.display = 'none'
    usernameInvalid.style.display = 'none';
    usernameConditions.style.display = 'none';
    if(username.value == '') {
        usernameEmpty.style.display = 'block';
        usernameConditions.style.display = 'none';
    } else {
        usernameEmpty.style.display = 'none';
        if(username.value.length >= 8) {
            usernameMsg1.style.color = 'green';
            usernameConditions.style.display = 'block';
        } else {
            usernameMsg1.style.color = 'white';
            usernameConditions.style.display = 'none';
        }
        if(/[!#\$%\^&\\*]/.test(username.value)) {
            usernameMsg4.style.color = 'red';
        } else {
            usernameMsg4.style.color = 'white';
        }
        if(!/[@\.\com]/.test(username.value)) {
            usernameConditions.style.display = 'none';
            usernameInvalid.style.display = 'block'
        } else {
            usernameInvalid.style.display = 'none';
            usernameConditions.style.display = 'block';
        }
        if(username.value.length >= 8 && !/[@\.\com]/.test(username.value)) {
            usernameInvalid.style.display = 'block';
            usernameConditions.style.display = 'none';
        }
    }
})

password.addEventListener('keyup', function(){
    passwordEmpty.style.display = 'none'
    if(password.value == '') {
        passwordEmpty.style.display = 'block';
        passwordConditions.style.display = 'none';
    } else {
        passwordEmpty.style.display = 'none';
        passwordConditions.style.display = 'block';
        if(password.value.length >= 8) {
            passwordMsg1.style.color = 'green';
        } else {
            passwordMsg1.style.color = 'white';
        }
        if(/[A-Z]/.test(password.value)) {
            passwordMsg2.style.color = 'green';
        } else {
            passwordMsg2.style.color = 'white';
        }
        if(/\d/.test(password.value)) {
            passwordMsg3.style.color = 'green';
        } else {
            passwordMsg3.style.color = 'white';
        }
        if(/[!@#\$%\^&\.\*]/.test(password.value)) {
            passwordMsg4.style.color = 'green';
        } else {
            passwordMsg4.style.color = 'white';
        }
    }
})
*/