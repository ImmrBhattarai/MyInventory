<!doctype html>
<html lang="en">
<head>
	<title>My INVENTORY</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/body.scss">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/logo.png">

	<!--Plugins CSS -->
	<script src="https://kit.fontawesome.com/bc12959002.js" crossorigin="anonymous"></script>

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="wizixo/template/assets/css/style.css" />

	<style>
   
    /*assign full width inputs*/
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
   
    /*set a style for the buttons*/
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 20px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
   
    /* set a hover effect for the button*/
    button:hover {
        opacity: 0.8;
    }
   
    /*set extra style for the cancel button*/
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
   
    /*centre the display image inside the container*/
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }
   
    /*set image properties*/
    img.avatar {
        width: 30%;
        border-radius: 50%;
    }
   
    /*set padding to the container*/
    .container {
        padding: 16px;
    }
     
    /*set the forgot password text*/
    span.psw {
        float: right;
        padding-top: 16px;
    }
   
    /*set the Modal background*/
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: #2d9edf;
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 20px;
    }
   
    /*style the model content box*/
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        border: 1px solid #888;
        width: 40%;
    }
   
    /*style the close button*/
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
     
    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }
   
    /* add zoom animation*/
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }
     
    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }
     
    @keyframes animatezoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }
    }
     
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }

	body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #1d1e22;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

 /* Dropdown Button */
 .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;} 

	</style>
</head>

<body>
	<!--header Start-->
	<header class="footer footer-white pt-6 position-relative">

		<!-- Logo Nav Start -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="page.php">
					<img src="img/logo.png" width="200" />
				</a>

				<!-- Main Menu Start -->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">

						<!-- Home -->
						<li class="nav-item">
							<a class="nav-link active" href="page.php">Home</a>
						</li>

						<!-- About menu -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="demosMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
							<div class="dropdown-menu" aria-labelledby="demosMenu"  >
								<img src="img/AboutLOGO.png">
								<!-- bottom part -->
								<div class="w-100 bg-grad pattern-overlay-2 p-4 mt-3 all-text-white d-none d-lg-flex" >
									<div class="align-self-center" style="width: auto;">
										<h6>MyInventory is a system developed by Suraj Bhattarai, Sushant Shah, Sneha Katwal and Saroj Baniya for Robotics Club, IoEPC.</h6>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- Main Menu End -->

					<!-- LOGIN -->	
					<button onclick="document.getElementById('id01').style.display='block'" style="width: auto;"  class="btn btn-outline-white mt-md-1">Login</button>


				<!-- Modal -->
    			<div id="id01" class="modal">
 
     			   <form class="modal-content animate" action="/action_page.php">
          					<div class="imgcontainer">
             			  	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              				  <img src="img/profile.png" alt="Avatar" class="avatar">
								
            				</div>
							<div class="imgcontainer">
							<label style="color: white;">Username: ADMIN</label>
							</div>
 
           					<div class="container">

                					<input type="password" placeholder="Enter Password" name="psw" required>
 
               					 <button type="submit">Login</button>
           					 </div>
        			</form>
   			 </div>
 
									<script>
										var modal = document.getElementById('id01');
										window.onclick = function(event) {
											if (event.target == modal) {
												modal.style.display = "none";
											}
										}
									</script>
				<!-- Header Extras End-->
			</div>
		</nav>
		<!-- Logo Nav End -->
	</header>
	<!--Header End-->

	<!-- Main Banner -->
	<section class="p-0 py-5 bg-grad pattern-overlay-2">
			<div class="row py-0 py-md-5 justify-content-between align-items-center">
				<div class="col-sm-10 col-lg-5 all-text-white my-5 mt-md-0">
					<div class="text-center py-md-0 ">
						<h2>What do you want to take?</h2>
						<h6>If you are administrator, kindly login!</h6>
							<form action="index.html" method="post">
              <div class="text-left py-md-0 mt-md-0">
							<h1> Student Dashboard </h1>
							
							<fieldset>
							<legend><span class="number">1</span> Basic Info</legend>
							<p>
							<label for="ItemID">Item ID No.:</label>
							<input  placeholder="RC0XX"  type="text" id="ItemID" name="ItemID">

								<div class="dropdown">
								<button class="btn btn-white mt-md-auto mr-1">Quantity</button>
								<div class="dropdown-content">
									<a href="#">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
								</div>
								</div> 
							
							<label for="RollNO">Unique Campus Roll No(Full):</label>
							<input  placeholder="PUR076BEI0XX"  type="text" id="RollNO" name="RollNO">
							</p>
							</fieldset>
							<button class="btn btn-outline-white mt-md-0" type="submit">Submit</button>	
              </div>
						</form>
					</div>
				</div>

        <div class="pricingTable">
          
          <ul class="pricingTable-firstTable">
        <li class="pricingTable-firstTable_table">
              <h1 class="pricingTable-firstTable_table__header">Activity Feed</h1>
              <ul class="pricingTable-firstTable_table__options">
                <li>Unlimited Listing</li>
                <li>Edit Your Listing</li>
                <li>Approve Reviews</li>
                <li>Take Booking Online</li>
                <li>24/7 Support Service</li>
              </ul>
            </li></ul>
              <button class="pricingTable-firstTable_table__getstart">Get Started Now</button>
            </li>
          </ul>
        </div>
 
        <!-- ACTIVITY FEED  -->
        <div class="col-lg-auto all-text-white my-auto mt-md-6">
        <div class="text-right py-md-0 ">
        <h2>Inventory Activity Feed</h2>
        <h6> See most recent changes below! </h6>
        </div>
        <form action="index.html" method="post">
        <h1> Item Status </h1>

        </form>
        </div>
			</div>

	</section>
	<!--Main banner-->

	<!-- footer  -->
	<footer class="footer footer-dark position-relative">

		<!--footer copyright -->
		<div class="footer-copyright">
			<div class="footer-logo" href="page.php">
					<img src="img/logo.png" height=auto width=auto />
          MyInventory is a DBMS project as instructed by Tantra Nath Jha sir. Developed by students of IOE Purwanchal Campus for Robotics Club, Dharan.
	</footer>
	<!--footer-->

	<!--Global JS-->
	<script src="wizixo/template/assets/vendor/jquery/jquery.min.js"></script>
	<script src="wizixo/template/assets/vendor/popper.js/umd/popper.min.js"></script>
	<script src="wizixo/template/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="wizixo/template/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!--Vendors-->
	<script src="wizixo/template/assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
	<script src="wizixo/template/assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>

	<!--Template Functions-->
	<script src="wizixo/template/assets/js/functions.js"></script>

</body>
</html>
