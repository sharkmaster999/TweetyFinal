$(document).ready(function(){

   $('#loginBtn').click(function(){
       var email = $('#email').val();
       var pass = $('#pass').val();

       //some changes here :)
       if(email == "" || email == null){
           alert("All fields are required!");
           $('#email').focus().css({"box-shadow": "0px 0px 4px red"});
           return false;
       }else if(pass == "" || pass == null){
           alert("Password is empty!");
           $('#pass').focus().css({"box-shadow": "0px 0px 4px red"});
           $('#email').css({"box-shadow": "inset 0 0 5px rgba(0,0,0,0.1), inset 0 3px 2px rgba(0,0,0,0.1)"});
           return false;
       }else{
           return true;
       }
   });

});
    function checkSpace(){
        var email = $('#email').val();

        validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
        strEmail = document.forms[0].email.value;

        if(email == ""){
            $('#email').focus().css({"box-shadow": "inset 0 0 5px rgba(0,0,0,0.1), inset 0 3px 2px rgba(0,0,0,0.1)"});
            return false;
        }else if(strEmail.search(validRegExp) == -1){
            $('#email').focus().css({"box-shadow": "0px 0px 4px red"});
            return false;
        }else{
            $('#email').focus().css({"box-shadow": "inset 0 0 5px rgba(0,0,0,0.1), inset 0 3px 2px rgba(0,0,0,0.1"});
            return false;
        }

    }

    function checkEmail() {
        var email = document.getElementById('email');

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            alert("Please provide a valid email address!");
            $('#email').focus().css({"box-shadow": "0px 0px 4px red"});
            $('#pass').css({"box-shadow": "inset 0 0 5px rgba(0,0,0,0.1), inset 0 3px 2px rgba(0,0,0,0.1)"});
            return false;
        }
    }

    /*function isValidEmail(strEmail){
        validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
        strEmail = document.forms[0].email.value;

        // search email text for regular exp matches
        if (strEmail.search(validRegExp) == -1)
        {
            alert('A valid e-mail address is required.\nPlease amend and retry');
            return false;
        }

    }*/