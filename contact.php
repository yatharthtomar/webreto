<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
    <script src="js/jquery.min.js"></script>
    
    <link href="multiselect/jquery.multiselect.css" rel="stylesheet" />
    <script src="multiselect/jquery.multiselect.js"></script>
     <link rel="stylesheet" href="assets/css/all.css">
     <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="styling.css" rel="stylesheet">
  <title>Web Reto | Contact</title>
</head>

<body>
     
   
  <!-- Top Bar -->
  <section id="top-bar" class="p-3">
    <div class="container">
      <div class="row ">
        <div class="col-md-4">
          <i class="fas fa-phone phoneimage"></i>123456789
        </div>
        <div class="col-md-4">
          <i class="fas fa-envelope-open phoneimage"></i>contact@webreto.com
        </div>
        <div class="col-md-4">
          <div class="social text-right">
               <a href="#">
              <i class="fab fa-twitter"></i>
            </a>

            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
    
 
<!-- Navbar -->

     <nav class="navbar navbar-expand-lg sticky-top" id ="newnavbar1">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/FinalLogoWebReto.png" class="logo" alt="">
      </a>
        <a class="navbar-brand" href="index.html">
         <h2 id ="brandname">WebReto</h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <ul class="navbar-nav" id ="navbarnaya">
             <li class="nav-item mr-3">
            <a class="nav-link" href="index.html">Home</a>
          </li>
             <li class="nav-item mr-3">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item mr-3 dropdown">
            <a class="nav-link dropdown-toggle" href="webdev.html" data-toggle="dropdown" id="navbardrop">Web Dev</a>
              <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="webdev.html">Website Development</a></li>
        <li><a class="dropdown-item" href="#">Desktop Apps Development</a></li>
        <li><a class="dropdown-item" href="#">Mobile Apps Development</a></li>
        <li><a class="dropdown-item" href="#">Web Scrapping</a></li>
        <li><a class="dropdown-item" href="#">GUI apps for Embedded Systems</a></li>
        <li><a class="dropdown-item" href="#">Requirement Engineering</a></li>
        <li><a class="dropdown-item" href="#">Systems Design Engineering</a></li>
      </ul>
          </li>
          <li class="nav-item  mr-3 dropdown">
            <a class="nav-link dropdown-toggle" href="design.html" data-toggle="dropdown" id="navbardrop">Design</a>
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="design.html">UI/UX Design</a></li>
        <li><a class="dropdown-item" href="#">Content Writing</a></li>
        <li><a class="dropdown-item" href="#">Brand Logo Design</a></li>
        <li><a class="dropdown-item" href="#">Website Design Packages</a></li>
        <li><a class="dropdown-item" href="#">Landing Page Design</a></li>
      </ul>
          </li>
          <li class="nav-item  mr-3 dropdown">
            <a class="nav-link dropdown-toggle" href="business.html" data-toggle="dropdown" id="navbardrop">Business Growth</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="business.html">Data Analytics</a></li>
        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
        <li><a class="dropdown-item" href="#">SEO</a></li>
        <li><a class="dropdown-item" href="#">Business Strategy for Startups</a></li>
        <li><a class="dropdown-item" href="#">Business Analytics and Intelligence</a></li>
        <li><a class="dropdown-item" href="#">Business Process Improvement</a></li> 
        </ul>
          </li>
            <li class="nav-item mr-3">
            <a class="nav-link" href="portfolio.html">Portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div id ="bannerimage"> 
    <div id= "abouttext">
    <p id="para">Contact Us</p>
    </div>
    </div>
     
    <div id="webretocontent1">
    
   <div class="container">
        <div class="row">
        <div class="col-sm-12 contactform">
           <h1>Contact Us</h1>
          <?php

//Get user input
$name = $_POST["name"];
$email = $_POST["email"];
$services = $_POST["servicesdata[]"];
$message = $_POST["message"];

//error messages
$missingName = '<p><strong>Please enter your name!</strong></p>'; 
$missingEmail = '<p><strong>Please enter your email address!</strong></p>'; 
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>'; 
$missingMessage = '<p><strong>Please enter a message!</strong></p>'; 
$errors;
//if the user has submitted the form
if($_POST["submit"]){
    //check for errors
    if(!$name){
        $errors .= $missingName;  
    }else{
        $name = filter_var($name,FILTER_SANITIZE_STRING);   
    }
    if(!$email){
        $errors .= $missingEmail;   
    }else{
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors .=$invalidEmail;   
        }
		
	
    }
    if(!$message){
        $errors .= $missingMessage;
    }else{
        $message = filter_var($message, FILTER_SANITIZE_STRING);   
    }
 
        //if there are any errors
    if($errors){
        //print error message
        $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';   
    }else{
        $to = "yatharth.tomar91@gmail.com";
        $subject = "Contact";
        $message = "
        <p>Name: $name.</p>
        <p>Email: $email.</p>
		<p> Services Required : $services. </p>
        <p>Message:</p>
        <p><strong>$message</strong></p>"; 
        $headers = "Content-type: text/html";
        if(mail($to, $subject, $message, $headers)){
//            $resultMessage = '<div class="alert alert-success">Thanks for your message. We will get back to you as soon as possible!</div>';  
           
        }else{
            $resultMessage = '<div class="alert alert-warning">Unable to send Email. Please try again later!</div>';  
        }
    }
    echo $resultMessage;
}
?>
            <form action="contact.php#framework_form" method="post" id=framework_form>
             <div class="form-group">
                 <label for ="name1"> Name:</label>
             <input type="text" name="name" id="name1" placeholder="Name" class="form-control">
                
            </div>
                  <div class="form-group">
                 <label for ="email"> Email:</label>
             <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                
            </div>
                
            <div class="form-group">
                 <label for ="services"> Services:</label>
               
               <select name = "servicesdata[]" data-style="option1" classname="langOpt[]" multiple id="langOpt" multiple data-size="6">
    <optgroup class ="great1"label="Web Develpoment">
    <option  value="Website Development">Website Development</option>
    <option value="Desktop Apps Development">Desktop Apps Development</option>
    <option value="Mobile Apps Development">Mobile Apps Development</option>
    <option value="Web Scrapping">Web Scrapping</option>
    <option value="GUI apps for Embedded Systems">GUI apps for Embedded Systems</option>
    <option value="Requirement EngineeringRequirement Engineering">Requirement Engineering</option>
    <option value="Systems Design EngineeringSystems Design Engineering">Systems Design Engineering</option>
        </optgroup>
    <optgroup label="Design">
    <option value="UI/UX Design">UI/UX Design</option>
    <option value="Content Writing">Content Writing</option>
    <option value="Brand Logo Design">Brand Logo Design</option>
    <option value="Website Design Packages">Website Design Packages</option>
    <option value="Landing Page Design">Landing Page Design</option>
                </optgroup>
    <optgroup label="Business Growth">
    <option value="Business Process Improvement">Business Process Improvement</option>
                   <option value="Data Analytics">Data Analytics</option>
                   <option value="Digital Marketing">Digital Marketing</option>
                   <option value="SEO">SEO</option>
                   <option value="Business Strategy for Startups">Business Strategy for Startups</option>
                   <option value="Business Analytics and Intelligence">Business Analytics and Intelligence</option>
                   </optgroup>
</select>
            <script>
                $('#langOpt').multiselect({
                columns: 1,
                placeholder: 'Select Services'
});
                
            </script>
                </div>
                
            

                 <div class="form-group">
                 <label for ="message"> Message:</label>
                     <textarea name="message" id="message" class="form-control" rows="5">
                     </textarea>
                
            </div>
                
                 <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message">
            
            </form>
        
                  </div>
        
     </div>    
    </div>
    
    </div>
    
    <div id="footerimage">
     
    
    </div>
    <div id = "aboutcontactpage" class="about2">
       
 
  <ul id="aboutcontact2">
         
         <li><a id = "contact1" href="contact.php">Contact</a></li>
         <li><a id = "Disclaimer1" href="disclaimer.html">Disclaimer</a></li>
         <li><a id = "Terms1" href="terms.html">Terms Of Service</a></li>
         <li><a id = "Privacy1" href="privacy.html">Privacy Policy</a></li>
                  
     </ul>
       
     </div>
    
      <div id ="copyright">
     
     <p>All Rights Reserved ©<a id= "sitelink" href="index.html">WebReto</a></p>
     </div>
  


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/jquery-3.3.1.min.js "></script>  
    <script src="assets/js/bootstrap.bundle.min.js "></script>
 
    </body>
</html>
<?php ob_flush(); ?>