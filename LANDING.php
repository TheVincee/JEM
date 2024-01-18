<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS.css">
    <style>
     body {
    background-color: #f8f9fa;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.navbar {
    background-color: #000000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

}

.navbar-brand, .navbar-nav .nav-link {
    color: #fff;
    font-size: 19px; /* Adjust the font size as needed */
}

.navbar-toggler-icon {
    background-color: #fff;
}

.hero {
    background-color: #04052E;
    color: #ffffff;
    padding: 70px 0; /* Adjust the padding as needed */
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

img {
      width: 1000px; /* Set the width */
   height: 600px; /* Set the height */
  /* You can also add other styling properties here, such as border-radius, box-shadow, etc. */
        }

.hero button {
    background-color: #ffffff;
    color: #007bff;
    font-weight: bold;
}

/* Services Section Styling */
.services {
    background-color: #FBF7F4;
    color: #333;
    padding: 100px 0;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* About Section Styling */
.about {
    background-color: #F6FFF8;
    color: #333;
    padding: 100px 0;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* Projects Section Styling */
.projects {
    background-color: #f9f9f9;
    color: #333;
    padding: 100px 0;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* Testimonials Section Styling */
.testimonials {
    background-color: #f5f5f5;
    color: #333;
    padding: 100px 0;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* Contact Section Styling */
.contact {
    background-color: #FBF7F4;
    color: #333;
    padding: 100px 0;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.glass-card {
    background-color: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
}

.footer {
    background-color: #2D2D2A; /* Change this to your desired color */
    padding: 100px 0;
}

.footer-col {
    width: 25%;
    padding: 0 15px;
}

/* Footer column header styles */
.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}

/* Footer column header underline styles */
.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

/* Footer column list item styles */
.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

/* Footer column list item link styles */
.footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #cccccc; /* Adjusted color for improved elegance */
    display: block;
    transition: all 0.3s ease;
}

/* Footer column list item link hover styles */
.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
}

/* Social links styles */
.footer-col .social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}

/* Social links hover styles */
.footer-col .social-links a:hover {
    color: #24262b;
    background-color: #ffffff;
}


  </style>
  </head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container-lg ">
          <a class="navbar-brand fw-bold" href="#">CARRY ME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link d-lg-none" href="#contact">Contact</a>
              </li>
            </ul>
            <a class="btn btn-outline-light d-none d-lg-block" href="Dashboard.php">Admin</a>
            <br>
            <a class="btn btn-outline-light d-none d-lg-block" href="courier/login.html">Courier</a>
          </div>
        </div>
      </nav>

   <section class="hero" id="hero">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h1 class="display-4 fw-bold">Efficient Logistics Solutions</h1>
                <p class="tag_top">Reliable, Secure, Punctual</p>
                <h1 class="main_tagline">Empowering Your Business with Seamless Shipping Services</h1>
                <p class="tag_bottom">"Where Every Shipment Unlocks New Opportunities!"</p>
                <a class="btn btn-outline-light btn-lg" href="index.php">Explore Our Projects</a>
            </div>
            <div class="col-sm-6">
            <img src="KArl.png" alt="Description of the image">
            </div>
        </div>
    </div>
</section>


      
      <section class="services" id="services">
    <div class="container-lg">
        <h2 class="display-5 fw-bold mb-4">SERVICES</h2>
        <div class="row">
            <div class="col-lg col-sm-6 mt-4">
                <div class="card glass-card">
                    <i class="bi bi-cup-hot-fill"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">BOOK A RIDE</h5>
                        <p class="card-text">Book a ride effortlessly with a user-friendly app, ensuring a convenient and timely transportation solution for your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm-6 mt-4">
                <div class="card glass-card">
                    <i class="bi bi-cup-hot-fill"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">DELIVER PACKAGES</h5>
                        <p class="card-text">Easily send and receive packages with our efficient delivery service, ensuring secure and prompt transportation for your items.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm-6 m-auto mt-4">
                <div class="card glass-card">
                    <i class="bi bi-cup-hot-fill"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">COURIER PLATFORM</h5>
                        <p class="card-text">Empower your courier business with our comprehensive platform, streamlining operations, optimizing routes, and enhancing communication for efficient and reliable parcel deliveries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      
<section class="about" id="about">
    <div class="container">
        <h2 class="display-4 fw-bold mb-4">About Our Company</h2>
        <p>Welcome to [Your Company Name], where excellence meets innovation. We take pride in providing top-tier solutions in the world of logistics and transportation.</p>
        <p>With a commitment to precision and customer satisfaction, our team navigates the complexities of the industry, ensuring seamless and secure services. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum est id pulvinar mollis.</p>
        <p>Our dedication extends beyond delivery – it's about creating an experience. Nullam rhoncus dignissim ipsum, ac pulvinar tellus sodales ut. Vestibulum tincidunt malesuada consectetur. Nulla vel fermentum leo.</p>
        <p>Experience the difference with [Your Company Name]. Proin molestie sapien vel nulla accumsan, sit amet viverra metus ornare. Mauris iaculis ex vitae mollis pulvinar. Phasellus fringilla neque sed ligula lacinia iaculis.</p>
    </div>
</section>

      
     
<section class="contact" id="contact">
    <div class="container">
        <h2 class="display-4 fw-bold mb-5 text-center">Contact Us</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card glass-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Person 1</h5>
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:jane@mymail.com">jane@mymail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card glass-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Person 2</h5>
                        <i class="bi bi-twitter"></i>
                        <a href="#" target="_blank">Twitter</a>
                        <i class="bi bi-instagram"></i>
                        <a href="#" target="_blank">Instagram</a>
                        <i class="bi bi-facebook"></i>
                        <a href="#" target="_blank">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card glass-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Person 3</h5>
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel:+1234567890">+1234567890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



      
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>About Us</h4>
                <ul>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Book a Ride</a></li>
                    <li><a href="#">Courier Platform</a></li>
                    <li><a href="feedback.html">Deliver Packages</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Phone</a></li>
                    <li><a href="#">Address</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
</html>