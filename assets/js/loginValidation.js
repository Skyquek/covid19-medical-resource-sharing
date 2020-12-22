var errorBox = document.getElementById("error-box");
var email = document.getElementById("loginID");
var loginPass = document.getElementById("loginPass");
errorBox.style.display = "none";

$(function() {
    
    $("form#loginForm").submit(function() {

        // Validate Email
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value))
        {
            $.ajax({
                url: "../../Controller/Auth/LoginController.php",
                type: "POST",
                data: {
                    loginid: email.value,
                    pass: loginPass.value
                },
                dataType: "json",
                success: function(data) {
                    if(data.status == 'success')
                    {
                        alert(data.message);
                    }
                    else
                    {
                        errorBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-times'></i>" + " Please Check your login ID and Password!";
                        errorBox.style.display = "block";
                    }
                },
                error: function(error) {
                    alert(error);
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

  
