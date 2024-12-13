<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" href="img/logo.png" type="img.png" >
    <title> College project</title>
</head>
<body>
    <div class="container"> <!-- This is the container which contains all the other -->

        <!--This is the header-->
        <div id="Header"> 
            <div >     <img src="img/logo.png" alt=""> </div>
           <div class="title">
            <h1>Ani Wears</h1>
            </div>
            
            <div class="nav-bar">
                <ul class="bar">
                <li><a href="index.html" target="_parent">Home</a></li>
                <li><a href="shop.html" target="_parent">Shop</a></li>
                <li><a href="about.html" target="_parent">About</a></li>
                <li><a class="active" href="contact.html" target="_parent">Contact</a></li>
               <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
               </ul>
            </div>


            <!--This is the mobile div -->
           <div id="mobile">
          <a href="cart.html" target="_parent"><i class="fa-solid fa-cart-shopping"></i></a>
          <i id="mobile-bar"  class="fas fa-outdent"></i>
           </div>
        </div><!--This is the ending of header-->
        
     <!--The is the hero div-->
     <div id="page-header" class="about-header">     
       <p class="para2">#Let's Talk</p>
       <p class="para4">Leave a message and we will get back to you</p>
    </div><!--This is the ending of third div group-->
    
    <div id="contact-details">
        <div class="details">
            <span>Get IN Touch</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map-location-dot"></i>
                    <p>Dekocha bhaktapur</p>
                </li>

                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>Samrat@gmail.com</p>
                </li>

                <li>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p>9844537533</p>
                </li>

                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>Sunday to friday: 5:00 am to 9:00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1157.032811215472!2d85.4317220227273!3d27.677376798008154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1b3d16e36993%3A0xade3caff3293c7fa!2sKhwopa%20College%20(TU%20Affiliated)!5e0!3m2!1sen!2snp!4v1732339054459!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div id="form-details">
        <form method="post" action="contact.php">
            <span>Leave A Mssage</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" name="name">
            <input type="email" placeholder="E-mail" name="email">
            <input type="text" placeholder="Subject" name="sub">
            <textarea name="" id="" cols="30" rows="10" placeholder="leave your message" name="message"></textarea>
            <button class="normal">Submit</button>
        </form>
      
        <div class="people">
            <div>
                <i class="fa-regular fa-circle-user"></i>
                <p><span>Samrat Deula</span> <br>Senior Manager <br>phone:984191657 <br> Email:samrat@gmail.com</p>
            </div>

            <div>
                <i class="fa-regular fa-circle-user"></i>
                <p><span>Yujin</span> <br>Senior Marketing Manager <br>phone:9846825 <br> Email:Yujin@gmail.com</p>
            </div>

            <div>
                <i class="fa-regular fa-circle-user"></i>
                <p><span>Bibhusha</span> <br>Publication Manager <br>phone:984194352<br> Email:Bibhusha@gmail.com</p>
            </div>

            <div>
                <i class="fa-regular fa-circle-user"></i>
                <p><span>Ayusha</span> <br>Cost Manager <br>phone:9841916235<br> Email:Ayusha@gmail.com</p>
            </div>
        </div>
    </div>
          <!--This is th sign-up div-->
          <div id="sign-up">
            <div class="sign-text">
                <h4>Sign Up For Free</h4>
                <p>Get E-mail updated about our latest shop and <span>special offer</span></p>
            </div>

            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign up</button>
            </div>
        </div>
        <!--This is the footer of the web site-->
        <footer id="footer">
            <div class="col">
                <img class="logo"  src="img/logo.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong> Dekocha bhaktapur</p>
                <p><strong>Phone:</strong> 98148676</p>
                <p><strong>Hours:</strong> 10:00 - 18:00 , Sun - fri</p>
       
                <h4><b>Follow Us</b></h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
            
            <div class="col">
                <h4>About</h4>
                <a href="#">About us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Conatct us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign in</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>

            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play</p>
                <div class="row">
                    <img src="img/app.jpg" alt="">
                    <img  src="img/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateway</p>
                <img class="pay" src="img/pay.png" alt="">
            </div>

         
        </footer>
    </div> <!--This the closing of the container -->

    <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "review";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sql = "INSERT INTO users (name, email,subject,message)
		VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["sub"]."','".$_POST["message"]."')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	

	$conn->close();
	//header("location: log.php");
?>
    <script src="script.js"></script>
</body>
</html>