<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: orange;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 0px;
  right: 0px;
  width: 290px;
}

.card{
	height:auto;
	width:auto;
	
}
/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 0px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  heigth:500px;
  width: 300px;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  max-height:600px;
  background-color: white;
  height:500px;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  height: 40px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: orange;
  color: white;
  font-size:12px;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  margin-bottom:10px;
  opacity: 0.8;
  height:38px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


<button class="open-button" onclick="openForm()">Ask Me Question <i class='fas fa-comment'></i></button>

<div class="chat-popup " id="myForm">
  <form action="/action_page.php" class="form-container border">
    <div class="card ">
			  <div class="card-header" style="height:40px;margin-top:0px">
				<h6 class="card-title" style="float:left">AI Chatbot</h6>
                 <i class='far fa-window-minimize'onclick="closeForm()" style="float:right"></i>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">

                </div>
           
           
              </div>
              <div class="card-footer" style="display: block;margin-bottom:-510px">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-warning">Send</button>
                    </span>
                  </div>
                </form>
              </div>

     </div>

   
   
  </form>
</div>