<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Aphasia.pk</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

            
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
   <!-- Compiled and minified CSS -->

<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBSAmvhAToeakM0LFEY9mY573RfdUF7XRU",
    authDomain: "chatapp-27483.firebaseapp.com",
    databaseURL: "https://chatapp-27483.firebaseio.com",
    projectId: "chatapp-27483",
    storageBucket: "chatapp-27483.appspot.com",
    messagingSenderId: "203025557079"
  };
  firebase.initializeApp(config);
</script>
   
      <link rel="stylesheet" href="/css/addLogin_css.css">
      <link rel="stylesheet" href="/css/swiper.min.css">
 <script src="/js/app.js"></script>
  <style type="text/css">
        .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 200px;
      height: 200px;
    }
  </style>
</head>

<body>

  <div class="info">
  <h1>Additional information for patient</h1>
  <span>
      <a>Please fill out the following form.</a> 
    </div>
  </span>
</div>



<!-- Modal -info -->
<div class="container">
<div id="modal-3" class="modal" data-modal-effect="slide-top">
  <div class="modal-content">
    <h2 class="fs-title">What's this?</h2>
    <h3 class="fs-subtitle">Getting the most out of your data</h3>
    <p>In order to personalize the website experience for you and the patient, we need some background information regarding you and the patient. As per our privacy policy, we donot intend on sharing your data with anyone else.</p>
    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
  </div>
</div>
</div>

<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
  <ul id="progressbar">
    <li class="active">Guardian Information</li>
    <li>Patient Information</li>
    <li>Life Before Stroke</li>
    <li>Patient Interests/Languages</li>
    <li>Suggestion</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Guardian Information</h2>
    <h3 class="fs-subtitle">We need some basic information about you.</h3>
    <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What's your First Name? *</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="firstname"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your first name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What's your Last Name? *</label>

          <input id="lastname_guard" name="lastname"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your Last name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- Begin What's Your relation -->
<div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What's your the relation between you and the patient? *</label>

          <input id="relation_guard" name="relation_guard"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your your relation with the guardian" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
<div><label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What platforms of technology have you used? *</label></div>
<div>

  <label class="container">Mobile(Iphone/Android)
  <input type="checkbox" id="guard_tech_mob">
  <span class="checkmark"></span>
</label>

<label class="container">Desktop/Laptop
  <input type="checkbox" id="guard_tech_lap">
  <span class="checkmark"></span>
</label>

<label class="container">Virtual Reality glasses / 360 degree video
  <input type="checkbox" id="guard_tech_vr">
  <span class="checkmark"></span>
</label>

<label class="container">Augmented Reality
  <input type="checkbox" id="guard_tech_ar">
  <span class="checkmark"></span>
</label>
</div>
 
    <!-- End What's Your Email Field -->

    <!-- Begin Total Number of Constituents in Your Database Field -->
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">What is your level of education? *</label>

          <input id="guard_education" name="guard_education"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your level of education" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

          <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Do you suffer from some ailment yourself? *</label>

          <input id="guard_disease" name="guard_disease"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your level of education" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

          <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_1 field hs-form-field" id="webform-component-acquisition--amount-1">
        
          <label for="edit-submitted-acquisition-amount-1 total_number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">How many hours a day due to spend in the patients therapy? *</label>

          <input id="guard_hours" class="form-text hs-input" name="guard_hours" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
          <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_1 field hs-form-field" id="webform-component-acquisition--amount-1">
        
          <label for="edit-submitted-acquisition-amount-1 total_number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">How many times do you visit the doctor each week? *</label>

          <input id="guard_visits" class="form-text hs-input" name="guard_visits" required="required" size="60" maxlength="128" type="number" value="0" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End Total Number of Constituents in Your Database Field -->
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3"><i class="question-log fa fa-question-circle"></i> What Is This?</div>
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Patient Information</h2>
    <h3 class="fs-subtitle">Please enter the patient information</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Patient's first name *</label>

          <input id="pat_fname" name="pat_fname"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter Patient's first name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Patient's last name *</label>

          <input id="pat_lname" name="pat_lname"  type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter Patient's last name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
      <!-- End Total Number of Donors in Year 1 Field -->

      <!-- Begin Total Number of Donors in Year 2 Field -->

        <!-- End Total Number of Donors in Year 2 Field -->

      <!-- Begin Calc of Total Number of Donors Fields -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
      <div>
        
<label for="dateofbirth">Date of birth*</label>
<input type="date" name="dateofbirth" id="dateofbirth">
      </div>

      <div>
        
<label for="dateofbirth">Date of stroke*</label>
<input type="date" name="dateofstroke" id="dateofstoke">
      </div>
<label for="dateofbirth">Level of mobility*</label>

      <div>  <select name="mobility" id="pat_mobility">
    <option value="None">None</option>
    <option value="Minimal">Minimal</option>
    <option value="Barely there(Sensation of Movement)">Barely there(Sensation of Movement)</option>
    <option value="Moderate(Stronger sensation of movement)">Moderate(Stronger sensation of movement)</option>
     <option value="Tranfer bed to chair without standing">Tranfer bed to chair without standing</option>
     <option value="Sitting in bed/exercises in bed">Sitting in bed/exercises in bed</option>
    <option value="Sitting at the edge of bed">Sitting at the edge of bed</option>
    <option value="Standing">Standing</option>
    <option value="Transfer from bed to chair with standing">Transfer from bed to chair with standing</option>
    <option value="Marching in place">Marching in place</option>
    <option value="Walking">Walking</option>
    <option value="Strenous exercise">Strenous exercise</option>
    <option value="Unknown">Unknown</option>
  </select></div>
<div>  
<label for="dateofbirth">Level of Speech*</label>
  <select name="speech_intelligibity" id="pat_intelli">
    <option value="Unintelligble speech">Unintelligble speech</option>
    <option value="Poor Intelligibility">Poor Intelligibility</option>
    <option value="Fair Intelligibility">Fair Intelligibility</option>
    <option value="Good Intelligibility">Good Intelligibility</option>
     <option value="Excellent Intelligibility">Excellent Intelligibility</option>
    
  </select></div>

<div>  
<label for="speech_diff">Most problematic speech difficulty*</label>
  <select name="speech_intelligibity" id="pat_speech">
    <option value="Incorrect words">Incorrect words</option>
    <option value="Stammering">Stammering</option>
    <option value="Contorted speech">Contorted speech</option>
    <option value="Frustration due to inability to communicate">Frustration due to inability to communicate</option>
     <option value="Loss of context">Loss of context</option>
    
  </select></div>

        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Life before stroke</h2>
    <h3 class="fs-subtitle">Quality of life before stoke?</h3>
      <!-- Begin Average Gift Size in Year 1 Field -->

        <!-- End Average Gift Size in Year 1 Field -->

      <!-- Begin Average Gift Size in Year 2 Field -->
         <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Patient's profession before stoke *</label>

          <input id="pat_prof" name="pat_prof"  type="text" value="" placeholder="" data-rule-required="false" data-msg-required="Please enter patient's profession" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

        <div>  
<label for="activiy_patient">Level of activity of patient before stroke*</label>
  <select name="speech_intelligibity" id="pat_lifestyle">
    <option value="Sedentary">Sedentary</option>
    <option value="Moderate">Moderate</option>
    <option value="Active">Active</option>
    <option value="Extremely Active">Extremely active</option>
    
  </select></div>
        <!-- End Average Gift Size in Year 2 Field -->

      <!-- Begin Average Gift Size Perchent Change Field -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
       
       <div><label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Do the following symtoms/risk factors apply to the patient? *</label></div>
<div>

  <label class="container">Obesity
  <input type="checkbox" id="pat_ob">
  <span class="checkmark"></span>
</label>

<label class="container">Stress
  <input type="checkbox" id="pat_stress">
  <span class="checkmark"></span>
</label>

<label class="container">Cigarette smoking
  <input type="checkbox" id="pat_cig">
  <span class="checkmark"></span>
</label>

<label class="container">High Cholestrol
  <input type="checkbox" id="pat_cholestrol">
  <span class="checkmark"></span>
</label>

<label class="container">Sleep disorders
  <input type="checkbox" id="pat_sleep">
  <span class="checkmark"></span>
</label>


<label class="container">Diabetes
  <input type="checkbox" id="pat_diab">
  <span class="checkmark"></span>
</label>


<label class="container">Family history of stoke/heart diseases
  <input type="checkbox" id="pat_heart">
  <span class="checkmark"></span>
</label>
</div>
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
  </fieldset>



  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Patient Interest/Languages</h2>
    <h3 class="fs-subtitle">Please select your doctor</h3>
              <!-- Begin Total Giving In Year 1 Field -->

<link rel="stylesheet" href="/css/jquery.treeSelector.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"        crossorigin="anonymous"></script>
<script src="/js/jquery.treeSelector.js"></script>

<link rel="stylesheet"      href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"      integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"      crossorigin="anonymous">
<div><label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Upload patient photo *</label></div>
 <input id="upload_photo" type="file" onchange="showImage.call(this)">
 <script type="text/javascript">
  var filebutton = document.getElementById("upload_photo");
 function showImage(){
  if (this.files && this.files[0]){
  var file = this.files[0];
  firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
  var storageRefer = firebase.storage().ref("users/"+user.uid + "/pat_img/"+"user.jpg");
  storageRefer.put(file);
}
});
 }
 }
 </script>
<div><label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Which of these languages does the patient speak? *</label></div>
<div class="treeSelector" id="langer"></div>
<script type="text/javascript">
  
  var rootNode = [{
    "id": "English_lang",
    "title": "English",
    value: "English_lang",
    
},{
     "id": "Urdu_lang",
    "title": "Urdu",
    value: "Urdu_lang",
},{
     "id": "Sindhi_lang",
    "title": "Sindhi",
    value: "Sindhi_lang",
},{
     "id": "Pashto_lang",
    "title": "Pashto",
    value: "Pashto_lang",
},{
     "id": "Punjabi_lang",
    "title": "Punjabi",
    value: "Punjabi_lang",
},{
     "id": "Balochi_lang",
    "title": "Balochi",
    value: "Balochi_lang",
},{
     "id": "Saraiki_lang",
    "title": "Saraiki",
    value: "Saraiki_lang",
},{
     "id": "Baruhi_lang",
    "title": "Baruhi",
    value: "Baruhi_lang",
},{
     "id": "Shina_lang",
    "title": "Shina",
    value: "Shina_lang",
},{
     "id": "Kashmiri_lang",
    "title": "Kashmiri",
    value: "Kashmiri_lang",
},{
     "id": "Arabic_lang",
    "title": "Arabic",
    value: "Arabic_lang",
},{
     "id": "Persian_lang",
    "title": "Persian",
    value: "Persian_lang",
}]
var pat_langi = [];
 $('#langer').treeSelector(rootNode, [],function(e,values){
pat_langi = values;
 });
</script>
<div><label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Which technology is the patient comfortable with *</label></div>
<div>

  <label class="container">Mobile(Iphone/Android)
  <input type="checkbox" id="pat_mob">
  <span class="checkmark"></span>
</label>

<label class="container">Desktop/Laptop
  <input type="checkbox" id="pat_lap">
  <span class="checkmark"></span>
</label>

<label class="container">Virtual Reality glasses / 360 degree video
  <input type="checkbox" id="pat_vr">
  <span class="checkmark"></span>
</label>

<label class="container">Augmented Reality
  <input type="checkbox" id="pat_ar">
  <span class="checkmark"></span>
</label>
</div>
<div><label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Which are the patient's interests? *</label></div>
<div>

  <label class="container">Politics
  <input type="checkbox" id="pat_politics">
  <span class="checkmark"></span>
</label>

<label class="container">Music/Film
  <input type="checkbox" id="pat_film">
  <span class="checkmark"></span>
</label>

<label class="container">Religion
  <input type="checkbox" id="pat_religion">
  <span class="checkmark"></span>
</label>

<label class="container">Sports
  <input type="checkbox" id="pat_sports">
  <span class="checkmark"></span>
</label>
</div>



        <!-- End Average Gift Size Percent Change Field 2 -->
    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
  </fieldset>



  <!-- RETENTION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Suggestions</h2>
    <h3 class="fs-subtitle">We value your feedback</h3>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Suggestions *</label>

          <textarea name="paragraph_text" cols="50" rows="10" id="pat_suggs"></textarea>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->


        <!-- End Final Calc -->
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" value="Submit">

    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
</fieldset>

  <fieldset>
    <h2 class="fs-title">Done!</h2>
    <h3 class="fs-subtitle">Thank you for filling the form</h3>
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
  </fieldset>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
<script type="text/javascript">
  $('#submit').click(function(){
var fname_g = $("#firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983").val();
var lname_g = $("#lastname_guard").val();
var rel_g = $("#relation_guard").val();
var guard_tech_mob = $('#guard_tech_mob').prop("checked");
var guard_tech_vr  = $('#guard_tech_vr').prop("checked");
var guard_tech_lap = $('#guard_tech_lap').prop("checked");
var guard_tech_ar = $('#guard_tech_ar').prop("checked");
var guard_education = $("#guard_education").val();
var guard_disease = $("#guard_disease").val();
var guard_hours = $("#guard_hours").val();
var guard_visits = $("#guard_visits").val();
var pat_fname = $("#pat_fname").val();
var pat_lname = $("#pat_lname").val();
var dateofstroke =  new Date($("#dateofstroke").val());
var dateofbirth = new Date($("#dateofbirth").val());
var pat_intelli = $("#pat_intelli").val();
var pat_mobility = $("#pat_mobility").val();
var pat_speech = $("#pat_speech").val();
var pat_lifestyle = $("#pat_lifestyle").val();
var pat_prof = $("#pat_prof").val();
var pat_ob = $("#pat_ob").prop("checked");
var pat_stress = $("#pat_stress").prop("checked");
var pat_cig = $("#pat_cig").prop("checked");
var pat_cholestrol = $("#pat_cholestrol").prop("checked");
var pat_sleep = $("#pat_sleep").prop("checked");
var pat_diab = $("#pat_diab").prop("checked");
var pat_heart = $("#pat_heart").prop("checked");
var pat_suggs = $("#pat_suggs").val();
  var pat_politics = $("#pat_politics").prop("checked");
  var pat_film = $("#pat_film").prop("checked");
  var pat_religion = $("#pat_religion").prop("checked");
  var pat_sports= $("#pat_sports").prop("checked");
  var pat_mob = $("#pat_mob").prop("checked");
  var pat_lap = $("#pat_mob").prop("checked");
var pat_vr = $("#pat_mob").prop("checked");
 var pat_ar = $("#pat_mob").prop("checked");
var pat_langes = pat_langi;
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    console.log(user.displayName);
      var rootRef = firebase.database().ref();
  var storesRef = rootRef.child('users/'+ user.uid);
  var newStoreRef = storesRef.push();
  newStoreRef.set({
  "fname_g" : fname_g,
 "lname_g"  : lname_g,
 "rel_g" :rel_g,
 "guard_tech_mob" : guard_tech_mob,
 "guard_tech_vr"  :guard_tech_vr,
 "guard_tech_lap" :guard_tech_lap,
 "guard_tech_ar" :guard_tech_ar,
 "guard_education" :guard_education,
 "guard_disease" :guard_disease,
 "guard_hours" :guard_hours,
 "guard_visits" :guard_visits,
 "pat_fname" : pat_fname,
 "pat_lname" : pat_lname,
"dateofstroke" : dateofstroke,
 "dateofbirth" : dateofbirth,
 "pat_intelli" : pat_intelli,
"pat_mobility" : pat_mobility,
"pat_speech" : pat_speech,
"pat_lifestyle" : pat_lifestyle,
"pat_prof" : pat_prof,
"pat_ob" : pat_ob,
"pat_stress" : pat_stress,
"pat_cig" : pat_cig,
"pat_cholestrol" : pat_cholestrol,
"pat_sleep" : pat_sleep,
"pat_diab" : pat_diab,
"pat_heart" : pat_heart,
"pat_suggs" : pat_suggs,
"pat_politics" : pat_politics,
"pat_film" : pat_film,
"pat_religion" : pat_religion,
"pat_sports" : pat_sports,
"pat_mob" : pat_mob,
"pat_lap" : pat_lap,
"pat_vr" : pat_vr,
"pat_ar" : pat_ar,
"pat_langes" : pat_langi,
  });
document.location.href = "/choose_doctor"
  } else {
    // No user is signed in.
  }
});
});
 </script> 
  

    <script >
      /* Fundraising Grader
*
* Generic Copyright, yadda yadd yadda
*
* Plug-ins: jQuery Validate, jQuery 
* Easing
*/

$(document).ready(function() {
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    $(".steps").validate({
        errorClass: 'invalid',
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.insertAfter(element.next('span').children());
        },
        highlight: function(element) {
            $(element).next('span').show();
        },
        unhighlight: function(element) {
            $(element).next('span').hide();
        }
    });
    $(".next").click(function() {
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        if ((!$('.steps').valid())) {
            return true;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
    $(".submit").click(function() {
            console.log("end hogaya");
        
    });
    $(".previous").click(function() {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
});



var modules = {
    $window: $(window),
    $html: $('html'),
    $body: $('body'),
    $container: $('.container'),
    init: function() {
        $(function() {
            modules.modals.init();
        });
    },
    modals: {
        trigger: $('.explanation'),
        modal: $('.modal'),
        scrollTopPosition: null,
        init: function() {
            var self = this;
            if (self.trigger.length > 0 && self.modal.length > 0) {
                modules.$body.append('<div class="modal-overlay"></div>');
                self.triggers();
            }
        },
        triggers: function() {
            var self = this;
            self.trigger.on('click', function(e) {
                e.preventDefault();
                var $trigger = $(this);
                self.openModal($trigger, $trigger.data('modalId'));
            });
            $('.modal-overlay').on('click', function(e) {
                e.preventDefault();
                self.closeModal();
            });
            modules.$body.on('keydown', function(e) {
                if (e.keyCode === 27) {
                    self.closeModal();
                }
            });
            $('.modal-close').on('click', function(e) {
                e.preventDefault();
                self.closeModal();
            });
        },
        openModal: function(_trigger, _modalId) {
            var self = this,
                scrollTopPosition = modules.$window.scrollTop(),
                $targetModal = $('#' + _modalId);
            self.scrollTopPosition = scrollTopPosition;
            modules.$html.addClass('modal-show').attr('data-modal-effect', $targetModal.data('modal-effect'));
            $targetModal.addClass('modal-show');
            modules.$container.scrollTop(scrollTopPosition);
        },
        closeModal: function() {
            var self = this;
            $('.modal-show').removeClass('modal-show');
            modules.$html.removeClass('modal-show').removeAttr('data-modal-effect');
            modules.$window.scrollTop(self.scrollTopPosition);
        }
    }
}
modules.init();
    </script>



</body>

</html>
