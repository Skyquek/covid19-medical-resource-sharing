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

.on-float {
    align-items: center;
    margin-left: 35%;
    margin-right: auto;
    z-index: -1;
    margin-top: 30px;
    position: fixed;
    transition: opacity 0.6s linear;
}

.position_btn {
    bottom: 10px;
    right: 10px;
    opacity: 1;
    z-index: 10;
}

.position_msg_box {
    bottom: 60px;
    right: 10px;
    opacity: 0;
}

.show {
    opacity: 1;
    z-index: 10;
}

.show-btn {
    width: 500px;
    height: 60px;
}
</style>

<link rel="stylesheet" href="./css/chatbot.css">

<div id='chatbot' class = 'on-float position_msg_box'>
  <iframe
      allow="microphone;"
      width="500"
      height="630"
      src="https://console.dialogflow.com/api-client/demo/embedded/0cfffa21-37a2-483a-af99-b28e5bceef30">
  </iframe>
</div>

<div class='on-float position_btn'>
    <button class='btn btn-primary show-btn'type='button' id='btn'>Ask Me Questions</button>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

<script>
var btn = document.getElementById('btn');
var chatbot = document.getElementById('chatbot');

btn.addEventListener('click', evt => {
  chatbot.classList.toggle('show')
})

</script>