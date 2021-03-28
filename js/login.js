var username = document.querySelector(".email.input");
var password = document.querySelector(".password.input");
var submit_button = document.querySelector("#submit-button");
var email_message = document.getElementById('user-is-invalid');
var password_message = document.getElementById('password-is-invalid');

submit_button.addEventListener('click', verify);
var email_regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;



function verify(event) {
    //event of the form
   
    if(verify_username()==true && verify_password()==true){
        document.getElementById('login-form').submit();
    }
    else {
        event.preventDefault();
    }
    
}

function verify_username() {
    
    if (username.value.length == 0) {
        email_message.style.visibility = "visible";
        email_message.style.opacity = 1;
        email_message.style.transform = "scale(1)";
        email_message.innerHTML = "Please Write your Email";
        return false;
    }
    else {
        if (email_regex.test(username.value)) {
            email_message.style.visibility = "hidden";
            email_message.style.opacity = 0;
            email_message.style.transform = "scale(0)";
            email_message.innerHTML = "k";
            return true;
        }
        else {
            email_message.style.visibility = "visible";
            email_message.style.opacity = 1;
            email_message.style.transform = "scale(1)";
            email_message.innerHTML = "Please Write a valid Email";
            return false;
        }
    }
}
function verify_password() {
    if (password.value.length == 0) {
        password_message.style.visibility = "visible";
        password_message.style.opacity = 1;
        password_message.style.transform = "scale(1)";
        password_message.innerHTML = "Please Write your Password";
        return false;
    }
    else {
        password_message.style.visibility = "hidden";
        password_message.style.opacity = 0;
        password_message.style.transform = "scale(0)";
        password_message.innerHTML = "k";
        return true;
    }

}