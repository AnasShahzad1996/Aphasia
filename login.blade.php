<!DOCTYPE html>
<html>
<head>
  <title>Aphasia.pk</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>            
<style>
.vl {
  border-left: 1px solid purple;
  height: 260px;
  position: absolute;
  left: 310px;
  top: 70px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script type="text/javascript">
   var config = {
    apiKey: "AIzaSyBSAmvhAToeakM0LFEY9mY573RfdUF7XRU",
    authDomain: "chatapp-27483.firebaseapp.com",
    databaseURL: "https://chatapp-27483.firebaseio.com",
    projectId: "chatapp-27483",
    storageBucket: "chatapp-27483.appspot.com",
    messagingSenderId: "203025557079"
  };
  firebase.initializeApp(config);

var database = firebase.database();

 
   var provider = new firebase.auth.GoogleAuthProvider();
</script>
</head>
<body style="background-image: url(/images/brain_back1.png);background-size: 300px;">
  
  <nav style="height: 75px;color:purple;">
    <div class="nav-wrapper purple">
        <a class="navbar-brand" href="#"><img style="height : 60px;margin:7px;" src="images/aphasialogo.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>



<div style="margin-left: 400px;margin-top: 170px;width: 1500px;">
  <div class="row">
    <div class="col s12 m6">
      <div class="card white">
        <div class="card-content purple-text">
        </div>
        <div style="display: flex;">
          <div style="flex: 0 0 50%;margin:20px;">
            <h1 style="color:#be50e0;font-size: 25px;"><span class="card-title" style="position: absolute;top: 45px;">Login</span></h1>
            <img id="googlesign" src="/images/google_sign_icon.png" style="height: 60px;width: 240px;">
            <div class="vl"></div>
          </div>
          
          
          <div style="flex: 0 0 50%;">
            <h1 style="color:#be50e0;font-size: 25px;"><span class="card-title" style="position: absolute;top: 45px;">Login with Email.</span></h1>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="Email@email.com" id="email1" type="text" class="validate">
                    <label class="active" for="email" style="color:purple;">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="password" id="password1" type="password" class="validate">
                    <label class="active" for="first_name2" style="color:purple;">Password</label>
                  </div>
                </div>
                <a id="emailfirebase" class="waves-effect purple btn" style="margin-bottom: 50px;">SignIn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 



<script type="text/javascript">
       $(function () {

            $('#googlesign').click(function () {
                        firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION).then(function() {
                  var provider = new firebase.auth.GoogleAuthProvider();
                   return firebase.auth().signInWithPopup(provider).then(function(result) {
                        // This gives you a Google Access Token. You can use it to access the Google API.
                        var token = result.credential.accessToken;
                        // The signed-in user info.
                        var user = result.user;
                        document.location.href = "/user_portal";
                        // ...
                      }).catch(function(error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        // The email of the user's account used.
                        var email = error.email;
                        // The firebase.auth.AuthCredential type that was used.
                        var credential = error.credential;
                        // ...
                      });
                document.location.href = "/user_portal";
                }).catch(function(error) {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                  });

                //it ends her click function of google sign in 
            });
        });
          $(function () {
              $('#emailfirebase').click(function () {
                  var email = $('#password1').val();
                  var password = $('#email1').val();
                  firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
                    // Handle Errors here.

                      console.log("Not successful");
                      document.location.href = "/user_portal"
                  });


              });
          });

</script>





</body>
</html>