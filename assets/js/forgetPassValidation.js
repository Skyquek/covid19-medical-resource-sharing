var successBox = document.getElementById("success-box");
var errorBox = document.getElementById("error-box");

var email = document.getElementById("user-email");
successBox.style.display = "none";
errorBox.style.display = "none";

$(function() {
    $("form#forgetPassForm").submit(function() {

        // Validate Email
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value))
        {
            $.ajax({
                url: "../../Controller/Auth/ForgetPasswordController.php",
                type: "POST",
                data: {
                    email: email.value
                },
                dataType: "json",
                success: function(data) {
                    if(data.status == 'success')
                    {
                        errorBox.style.display = "none";
                        successBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-check'></i>" + " Please check your email inbox.";
                        successBox.style.display = "block";
                    }
                    else
                    {
                        successBox.style.display = "none";
                        errorBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-times'></i>" + " We can't seem to find any user associate with this email.";
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
            successBox.style.display = "none";
            errorBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-times'></i>" + " Please Check your Email Format!";
            errorBox.style.display = "block";
            return false;
        } 
    });
  });
