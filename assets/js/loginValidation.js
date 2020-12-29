var errorBox = document.getElementById("error-box");
var email = document.getElementById("loginID");
var loginPass = document.getElementById("loginPass");
errorBox.style.display = "none";



$(function() {

    $("form#loginForm").submit(function() {

        if(email.value == "")
        {
            alert("Please insert email!");
        }

        if(loginPassword.value == "")
        {
            alert("Please insert password!");
        }

        // Validate Email
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value))
        {
            $.ajax({
                url: "../../Controller/Auth/AuthController.php",
                type: "POST",
                data: {
                    action: 'login',
                    loginid: email.value,
                    pass: loginPass.value
                },
                dataType: "json",
                success: function(data) {
                    if(data.status == 'success')
                    {
                        alert(data.message);
                        window.location.replace('../agent');
                    }
                    else
                    {
                        alert(data.message);
                        errorBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-times'></i>" + " Please Check your login ID and Password!";
                        errorBox.style.display = "block";
                    }
                },
                error: function (data) {
                    console.log('An error occurred.');
                    console.log(data);
                }
            });
            return false;
        }
        else 
        {
            errorBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-times'></i>" + " Please Check your email format!";
            errorBox.style.display = "block";
        }
    });
  });

  
