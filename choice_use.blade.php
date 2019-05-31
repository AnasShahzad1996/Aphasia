<!DOCTYPE html>
<html>
<head>
	<title>Aphasia.pk</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style type="text/css">
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg {
  /* The image used */
  background-image: url("/images/choice_doctor.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #c842f4;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
.flex-container {
  display: flex;
  align-items: stretch;
}
</style>
      
</head>
<body >
	<div class="bg"></div>
	<div style="align-content: center;">
		<div class="bg-text">
  <h2 style="font-size:20px">Doctor/Patient</h2>
  <h1 style="font-size:20px">Choose one of the options</h1>
  <div class="flex-container">
  	<div style="flex 0 0 50%;">
  		  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="images/doctor_card.jpg">
        </div>
        <div class="card-action">
          <a href="/">Doctor</a>
        </div>
      </div>
    </div>
  </div>
  	</div>
  	<div style="flex 0 0 50%;float: right;">
  		  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="images/patient_card.jpg">
        </div>
        <div class="card-action">
          <a href="/addLogin">Patient</a>
        </div>
      </div>
    </div>
  </div>
  	</div>
  	<div></div>
  </div>
</div>
	</div>

</body>
</html>