var errorBox = document.getElementById("error-box");
var loginID = document.getElementById("loginID");
var loginPass = document.getElementById("loginPass");
errorBox.style.display = "none";

$(function() {
    $("form#loginForm").submit(function() {
        $.ajax({
            url: "../../Controller/Auth/LoginController.php",
            type: "POST",
            data: {
                loginid: loginID.value,
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
                    errorBox.innerHTML = "<i class='fa fa-times'></i>" + " Please Check your login ID and Password!";
                    errorBox.style.display = "block";
                }
            },
            error: function(error) {
                alert(error);
            }
        });
        return false;
    });
  });
