<!doctype>
<!DOCTYPE html>
<html>
<head>
  <title>Aphasia.pk</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/login_aph_css.css')}}">
 
  <script src="/js/app.js"></script>
    <!-- Compiled and minified CSS -->
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
<body  class="container-login100"><div>

<div class="wrap-login100">
  <div class="login100-pic js-tilt" data-tilt>
          <div><h1 style="color:#be50e0;font-size: 25px;">SignUp  :</h1>
            <img id="googlesign" src="/images/google_sign_icon.png" style="height: 60px;width: 240px;"></div>
        </div>

        <div>
          <span>
            <h1 style="color:#be50e0;font-size: 25px;">Email Signup</h1>
          </span>

          <div data-validate = "Valid email is required: ex@abc.xyz">
            <input id="emailfire" type="text" name="email" placeholder="Email">
            </span>
          </div>

          <div  data-validate = "Password is required">
            <input id="passfire" type="password" name="pass" placeholder="Password">
            </span>
          </div>
          <div  data-validate = "Password is required">
            <input id="passfire_confirm" type="password" name="pass" placeholder="Confirm Password">
            </span>
          </div>
          
          <div>
            <button id="emailfirebase" class="waves-effect waves-light btn" >
              Login
            </button>
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
                        document.location.href = "/addLogin";
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
                document.location.href = "/choice_use";
                }).catch(function(error) {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                  });

                //it ends her click function of google sign in 
            });
        });
          $(function () {
              $('#emailfirebase').click(function () {
                  var email = $('#emailfire').val();
                  var password = $('#passfire').val();
                  var confimer = $('#passfire_confirm').val();

                  if (confimer == password){
                  firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION)
                    .then(function() {
                      // Existing and future Auth states are now persisted in the current
                      // session only. Closing the window would clear any existing state even
                      // if a user forgets to sign out.
                      // ...
                      // New sign-in will be persisted with session persistence.
                      return firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
                          // Handle Errors here.
                          var errorCode = error.code;
                          var errorMessage = error.message;
                          alert(errorMessage);
                        });
                      document.location.href = "/addLogin";
                    })
                    .catch(function(error) {
                      // Handle Errors here.
                      var errorCode = error.code;
                      var errorMessage = error.message;
                      console.log(errorMessage);
                    });
                  }else{
                    alert("The passwords do not match /پاس ورڈ آپس میں نہیں ملتے");
                  }
              });
          });

</script>

</div></body>
</html>