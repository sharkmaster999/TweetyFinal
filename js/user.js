$(document).ready(function(){

   $('#loginBtn').click(function(){
       var email = $('#email').val();
       var pass = $('#pass').val();

       //some changes here :)
       if(email == "" || email == null){
           alert("All fields are required!");
           return false;
       }else if(pass == "" || pass == null){
           alert("Password is empty!");
           $('#pass').focus();
           return false;
       }else{
           return true;
       }
   });

});

    function checkEmail() {
        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email.value)) {
            alert('Please provide a valid email address!');
            $('#email').focus();
            return false;
        }
    }
