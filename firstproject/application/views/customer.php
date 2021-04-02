<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	
  	
	<title>TYA CUSTOMER VIEW</title>
	<link rel ="icon" href="https://www.tyasuite.com/assets/img/fav3.ico" type="image/icon type">
</head>

<body>

	<nav class="navbar navbar-expand-md main-nav navigation fixed-top">
    	<div class="container-fluid">
            <div class="navbar-header">
            	<img class="desk logo" src="https://www.tyasuite.com/assets/img/TYASuite-LogoD.svg">
            	<img class="mob-logo" alt="logo" src="https://www.tyasuite.com/assets/img/TYASuite-LogoM.svg">
            </div>
            <div class="" >
            			<a class="closebtn" id="closebtn">&times;</a>
            		</div>
       <a class="menu-icon" id="menu-icon" ><i class="fa fa-bars"></i></a>
       
            <div class="dropdown">
            	<div class="navlist navbar-nav mr-auto">
            		<div class="sidebar-logo">
            			<a><img alt="cloud erp" src="https://www.tyasuite.com/assets/img/TYASuite-LogoM.svg"></a>
            		</div>
            		<ul class="nav-list">
            		<li class="navitem" >
            			<a class="item-color" id="dec" href="">Home</a>
            		</li>
        
            		<li class="navitem dropdown">
            			<a class="dropdown-toggle item-color company-prop" id="dec" >Company</a>
            			<div class="dropdown-content">
                          <a class="dropdown-item" href="#">About us</a>
                          <a class="dropdown-item partner-prop" href="#">Partners</a>
                          <a class="dropdown-item" href="#">Career</a>
                        </div>
            		</li>
            		<li class="navitem dropdown">
            			<a class="dropdown-toggle item-color" id="dec" href="#">Products</a>
            			<div class="dropdown-content">
                          <a class="dropdown-item" id="dec" href="#">Procurement To Pay</a>
                          <a class="dropdown-item" id="dec" href="#">Project Management</a>
                          <a class="dropdown-item" id="dec" href="#">Compliance Management</a>
                          <a class="dropdown-item" id="dec" href="#">Vendor Management</a>
                          <a class="dropdown-item" id="dec" href="#">Inventory Management</a>
                          <a class="dropdown-item" id="dec" href="#">Sales Order Management</a>
                          <a class="dropdown-item" id="dec" href="#">Asset Management</a>
                          <a class="dropdown-item" id="dec" href="#">Cloud ERP Software</a>
                        </div>
            		</li>
            		<li class="navitem dropdown">
            			<a class="dropdown-toggle item-color" id="dec" href="#">Pricing</a>
            			<div class="dropdown-content">
                          <a class="dropdown-item" id="dec" href="#">Procurement To Pay</a>
                          <a class="dropdown-item" id="dec" href="#">Project Management</a>
                        </div>
            		</li>
            		<li class="navitem">
            			<a class="item-color" id="dec" href="#">Blogs</a>
            		</li>
            		<li class="navitem">
            			<a class="item-color" id="dec" href="#">Contact</a>
            		</li>
            	</ul>
            	</div>
            	
            </div>            
       
    	    	</div>
	</nav>
	 <section class="banner">
	 <div class="container-fluid ban">
	 	<div class="ban-img" >
        </div>
      </div>
    		<h1 class="heading">Become a Partner</h1>
	 </section>
	 
	    	
	<section class="sec-head">
    	<div class="container">

        	<h2>Ready to reach to higher to business?</h2>
        	<p>Backed by the experience and expertise of professionals from the finance and IT sectors, TYASuite has emerged to be a multifunctional, and process-oriented cloud business solution which is agile, scalable, and customizable. The software is build to suit companies' specific requirement reducing the time utilized and the scope of error facilitating process automation, abiding by the regulatory compliance.
        	
        	</p>
        	<div class="">
        		<img class="img-fluid" src="https://www.tyasuite.com/assets/img/bg/partners/partner.svg" alt="erp vendors in india">
        		
        	</div>
    	</div>	
	</section>
	
	<section class="sec-mid">
		<div class = "container">
			<h2>Let's Talk</h2>
			<div>
    	<div class="card-body-outer">
    	<div class="card-body">
    	<form action="<?php echo base_url(); ?>Customer_view/insert" name="myForm" method="post" autocomplete="off">
    		<div class="row">
    			<div class="box">
    			<div class="col-md-6">
    			<div class="form-group">
    			<input type="text" class="inputBox" id="fname" name="fname" placeholder="First Name*" /><br>
    			<span id="fnameDisplay"></span>
    			</div>
    			</div>
    			<div class="col-md-6">
    			<div class="form-group">
    			<input type="text" class="inputBox" id="lname" name ="lname" placeholder="Last Name* " /><br>
    			<span id="lnameDisplay"></span>
    			</div>
    			</div>
    			</div>
    			
    		</div>
    		<div class="row">
    			<div class="box">
    			<div class="col-md-6">
    			<div class="form-group">
    				<input type="email" class="inputBox" id="email" name="email" placeholder="email*" /><br>
    				<span id="emailDisplay"></span>
    			</div>
    			</div>
    			<div class="col-md-6">
    			<div class="form-group">
    				<input type="text" class="inputBox" id="city" name="city" placeholder="city*" /><br>
    				<span id="cityDisplay"></span>
    			</div>
    			</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="box">
    			<div class="col-md-6">
    			<div class="form-group">
        		<input type="text" class="inputBox" id="Company" name="company" placeholder="company*" ><br>
        			<span id="companyDisplay"></span>
        		</div>
    			</div>
        		<div class="col-md-6">
    			<div class="form-group">
        		<input type="number" class="inputBox" id="phone" name="phone" placeholder="Phone number*" ><br>
        		<span id="phoneDisplay"></span>
        		</div>
        		</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="box">
    			<div class="col-md-6">
    			<div class="form-group">
        		<input type="text" class="inputBox" id="designation" name="designation" placeholder="designation*" ><br>
        		<span id="designationDisplay"></span>
        		</div>
    			</div>
        		<div class="col-md-6">
    			<div class="form-group">
           		<input list="No. of Employee" class="inputBox" id="No_of_Employee's" name = "No_of_Employee" placeholder="No. of Employee's" ><br>
           		<span id="No_of_EmployeeDisplay"></span>
        		<datalist id="No. of Employee">
        			<option value="1-10">
        			<option value="11-50">
        			<option value="51-100">
        			<option value="101-200">
        			<option value="201-500">
        			<option value="500 above">
        		</datalist>
        		</div>
        		</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="box">
    			<div class="col-md-6">
    			<div class="form-group">
        		<input list="No. of IT Person" class="inputBox" id="No_of_IT_Person's" name = "No_of_IT_person" placeholder="No. of IT person's"><br>
        		<span id="No_of_IT_personDisplay"></span>
        		<datalist id="No. of IT Person">
        			<option value="1-30">
        			<option value="30-50">
        			<option value="50-100">
        			<option value="100-200">
        			<option value="200-500">
        			<option value="500 above">
        		</datalist>
        		</div>
    			</div>
        		
    			<div class="col-md-6">
    			<div class="form-group">
        		<input list="No. of CA" class="inputBox" id="No_of_CA's" name="No_of_CA" placeholder="No_of_CA's"><br>
        		<span id="No_of_CADisplay"></span>
        		<datalist id="No. of CA">
        			<option value="1-5">
        			<option value="6-15">
        			<option value="16-30">
        			<option value="30-50">
        			<option value="50 above">
        		</datalist>	
        		</div>
        		</div>
    			</div>
    		</div>
    		<div class="submit"><input type="submit" class="btn btn-success" value="Submit"></div>    		
    	</form>
    	</div>
    	</div>
    	</div>
    	</div>
	</section>
				
	<footer class= "pos">
		<div class="container mgn">
			<div class="row row-mgn">
				<div class="footer-column col-lg-5 col-md-3">
					<div class="foot-widget" >
						<h6>TYA Suite Software Solution Pvt. Ltd.</h6>
						<p>R.K Complex, 2nd Floor, 152, KHB Colony, 5th Block, Koramangala, Bengaluru, Karnataka 560095.</p>
						<p><span>Support:</span>
							<a href="#">info@tyasuite.com</a>
						</p>
					</div>
				</div>
				<div class="footer-column col-lg-2 col-md-3">
					<div>
						<h6>Company</h6>
						<ul class="foot-list">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					
				</div>
				<div class="footer-column col-lg-3 col-md-3">
					<h6>Products</h6>
					<ul class="foot-list">
							<li><a href="#">Procurement Software</a></li>
							<li><a href="#">Project Management</a></li>
							<li><a href="#">Compliance Management</a></li>
							<li><a href="#">Vendor Management</a></li>
							<li><a href="#">Inventory Management</a></li>
							<li><a href="#">Sales Order Management</a></li>
							<li><a href="#">Asset Management</a></li>
							<li><a href="#">Cloud ERP Management</a></li>
						</ul>
				</div>
				<div class="footer-column col-lg-2 col-md-3">
					<h6>Other Links</h6>
					<ul class="foot-list">
							<li><a href="#">Blog</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
				<div class="footer-column col-lg-5 col-md-3 col-sm-12" >
				<div class="row centre-just">
				<div class="news">
					<h6 class="subscribe">Subscribe To Our Newsletter</h6>
					<div class="newsletter-box">
						<form method="post" action="" name="newsletter">
							<div class="subscriber-mail">
								<input type="email" class="email-input" name="newsletter_email" id="newsletter_email" placeholder="Enter Email Address*">
								
								<button type="button" class="btn email-submit-btn"></button>
							</div>
						</form>
					</div>
					<div class="connection">
						<h6 class="social-connection">Connect With Us!</h6>
						<ul class="social-network">
							<li class="Social-icons"><a href = "#"><img alt="LinkedIN" src="https://www.tyasuite.com/assets/img/icons/linkedin.png"></a></li>
							<li class="Social-icons"><a href = "#"><img alt="Facebook" src="https://www.tyasuite.com/assets/img/icons/fb.png"></a></li>
							<li class="Social-icons"><a href = "#"><img alt="Twitter"  src="https://www.tyasuite.com/assets/img/icons/twitter.png"></a></li>
							<li class="Social-icons"><a href = "#"><img alt="Instagram"src="https://www.tyasuite.com/assets/img/icons/instagram.png"></a></li>
							<li class="Social-icons"><a href = "#"><img alt="Youtube"  src="https://www.tyasuite.com/assets/img/icons/youtube.png"></a></li>
							
						</ul>
					</div>
				</div>
				</div>
			</div>
<!-- 			footer bottom -->

				<div class="col-lg-6 col-md-12 col-sm-12 copyrightdiv">
					<p class="copyright">&#169; Copyright 2021 All rights reserved to TYASuite Software Solutions Pvt. Ltd.</p>
				</div>
		</div>
		
	</footer>

</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
  	$(window).scroll(function(){
  		if ($(document).scrollTop()>100) {
  			$("nav.navbar").addClass("test");
  			} else {
  				$("nav.navbar").removeClass("test");
  			}
  		});
  	});
  			
  </script>



<script>
//      $(document).ready(function(){
//      	$("#closebtn").hide();
    	
//      	if (window.matchMedia('(max-width: 767px)').matches){
    	
//      	$("#menu-icon,#closebtn").click(function(){
//      		$('div.dropdown').toggle();
//      		$("div.navbar-header").toggle();
//      	});
    	
//      	$("#menu-icon,#closebtn").click(function(){
//      		$('#menu-icon,#closebtn').toggle();
//      	});
     	 
//      }	else {
//      		$('div.dropdown').show();
//      }
// });
</script>

<script>
function myFunction(x) {
	$("#closebtn").hide();
	$("div.dropdown").hide();
	$("#menu-icon").show();
  if (x.matches) { // If media query matches
//     $("#menu-icon,#closebtn").click(function(){
//      		$('div.dropdown').toggle();
//      		$("div.navbar-header").toggle();
//      	});
    	
    
    	
    $("#menu-icon").click(function(){
    	$('div.dropdown').show();
    	$("div.navbar-header").hide();
    	$('#closebtn').show();
     	$('#menu-icon').hide();
    });
    	
     $("#closebtn").click(function(){
    	$('div.dropdown').hide();
    	$("div.navbar-header").show();
    	$('#menu-icon').show();
     	$('#closebtn').hide();
    });
    	
//      	$("#menu-icon,#closebtn").click(function(){
//      		$('#menu-icon,#closebtn').toggle();
//      	});
     	
     	
//      	$("#closebtn").click(function(){
     		
//      	});
     	
     	
  } else {
  	$("#menu-icon").hide();
    $('div.dropdown').show();
    $("div.navbar-header").show();
  }
}

var x = window.matchMedia("(max-width: 767px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>

<script type="text/javascript">
function validateForm(){
	var fname = document.forms["myForm"]["fname"].value;
	var lname = document.forms["myForm"]["lname"].value;
	var email = document.forms["myForm"]["email"].value;
	var city  = document.forms["myForm"]["city"].value;
	var company = document.forms["myForm"]["company"].value;
	var phone   = document.forms["myForm"]["phone"].value;
	var designation     = document.forms["myForm"]["designation"].value;
	var No_of_Employee  = document.forms["myForm"]["No_of_Employee"].value;
	var No_of_IT_person = document.forms["myForm"]["No_of_IT_person"].value;
	var No_of_CA = document.forms["myForm"]["No_of_CA"].value;
	
	var nameRegex = /^[A-z]+$/;
	var emailRegex = /^[\w]+[@]{1}[\w]+[\.]{1}[\w]{2,4}$/;
	var phoneRegex = /^[0]?[0-9]{10}$/
	
	var fnameResult = nameRegex.test(fname);
	var lnameResult = nameRegex.test(lname);
	var emailResult = emailRegex.test(email);
	var cityResult = nameRegex.test(city);
	var companyResult = nameRegex.test(company);
	var phoneResult = phoneRegex.test(phone);
	var designationResult = nameRegex.test(designation);
	
	
	
	if (fnameResult == false){
		document.getElementById("fnameDisplay").innerHTML = "Enter correct Name";
		return false;
		}
		
	if (lnameResult == false){
		document.getElementById("lnameDisplay").innerHTML = "Enter correct last name";
		return false;
		}
		
	if (emailResult == false){
		document.getElementById("emailDisplay").innerHTML = "Enter correct email";
		return false;
		}
		
	if (cityResult == false){
		document.getElementById("cityDisplay").innerHTML = "Enter correct city name";
		return false;
		}
		
	if (companyResult == false){
		document.getElementById("companyDisplay").innerHTML = "Enter correct company name";
		return false;
		}
		
	if (phoneResult == false){
		document.getElementById("phoneDisplay").innerHTML = "Enter correct phone number";
		return false;
		}
		
	if (designationResult == false){
		document.getElementById("designationDisplay").innerHTML = "Enter correct designation";
		return false;
		}
		
	if (No_of_Employee == ''){
		document.getElementById("No_of_EmployeeDisplay").innerHTML = "Choose number of employee";
		return false;
		}
		
	if (No_of_IT_person == ''){
		document.getElementById("No_of_IT_personDisplay").innerHTML = "Choose No_of_IT_person";
		return false;
		}
		
	if (No_of_CA == ''){
		document.getElementById("No_of_CADisplay").innerHTML = "Choose No_of_CA";
		return false;
		}
	return true;	
	}
</script>

</html>