<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.column {
  float: left;
  width: 22%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  margin: 8px;
  width:300px;
  height: 700px;
}

.card-content {
  height: 180px;
}


.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: Black;
  font-size: 25px;
  font-weight: bold;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 90%;
}

.button:hover {
  background-color: #555;
  text-decoration: none;
  color: white;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<h2 style="text-align:center;color:white">Our Team</h2><br>
<div class="row" style="width:100%">
<div class="col-sm-1"></div>
  <div class="column">
    <div class="card">
      <img src="../../../assets/img/quek.png" alt="Quek" style="width: 300px; height: 300px;">
      <div class="container">
        <br>
        <center>
          <h2>Quek Yao Jing</h2>
          <p class="title">Lead Programmer</p>
          <p>B031810136@student.utem.edu.my</p>
        </center>

        <div class="card-content">
          <p>Quek is in charge of managing the project and its direction. Timeframe, resources, coordination and other important aspects is within his responsibilities. In a technical side, he also in charge of programming. </p>
        </div>

        <center>
          <p><a href="biography/quek/index.html" class="button">Contact Profile</a></p>
        </center>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../../../assets/img/henry.jpg" alt="Henry" style="width: 300px; height: 300px;">
      <div class="container">
        <br>
        <center>
          <h2>Yap Zhong Heng</h2>
          <p class="title">Front-End Designer</p>
          <p>B03181017@student.utem.edu.my</p>
        </center>
        
        <div class="card-content">
          <p>Yap is the main front-end designer of this project. He is responsible for design innovative UI and making sure the user-friendly experience is in top condition.  </p>
        </div>

        <center>
          <p><a href="biography/yap/mysite.html" class="button">Contact Profile</a></p>
        </center>

      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../../../assets/img/ashyqin.jpg" alt="Mike" style="width: 300px; height: 300px;">
      <div class="container">
        <br>
        <center>
          <h2>Ashyqin</h2>
          <p class="title">Data Analyst</p>
          <p>B031810457@student.utem.edu.my</p>
        </center>

        <div class="card-content">
          <p>Ashyqin is in charge of collecting, processing and performing statistical analyses on large dataset and serves as a gatekeeper for an organization’s data so stakeholders can understand data</p>
          
        </div>

        <center>
          <p><a href="biography/ashyqin/home.html" class="button">Contact Profile</a></p>
        </center>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../../../assets/img/khalid.jfif" alt="John" style="width: 300px; height: 300px;">
      <div class="container">
        <br>
        <center>
          <h2>Taufik</h2>
          <p class="title">QA Engineer</p>
          <p>B031810452@student.utem.edu.my</p>
        </center>

        <div class="card-content">
          <p>Khalid is responsible for the creation of tests to identify issues with software before the product launch and designing and implementing tests, debugging and defining corrective actions</p>
        </div>
        
        <center>
          <p><a href="biography/khalid/first.page.html" class="button">Contact Profile</a></p>
        </center>
      </div>
    </div>
  </div>
</div>