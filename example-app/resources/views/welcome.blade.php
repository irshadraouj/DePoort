<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 4</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">START PAGE</h1>
  <p class="w3-xlarge">Template by w3.css</p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

    <!-- Main Content -->
    <main>
        <!-- First Section -->
        <section class="grid-section">
            <div class="container">
                <div class="grid-text">
                    <h2>About Us</h2>
                    <p>We offer the best services. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet.</p>
                </div>
                <div class="grid-icon">
                </div>
            </div>
        </section>

        <!-- Second Section -->
        <section class="grid-section light">
            <div class="container">
                <div class="grid-icon">
                </div>
                <div class="grid-text">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Follow us on:</p>
            <div class="social-icons">
                <i class="fa fa-facebook-official"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            <p>Powered by You</p>
        </div>
    </footer>

    <!-- External JS -->
    <script src="script.js"></script>
</body>
</html>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.container {
    width: 80%;
    margin: auto;
    max-width: 1200px;
}

/* Navigation */
.navbar {
    background-color: #e74c3c;
    padding: 10px;
}

.navbar .logo {
    font-size: 24px;
    color: #fff;
    text-decoration: none;
}

.nav-links {
    display: inline-block;
    float: right;
}

.nav-links a {
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
}

.nav-links a:hover {
    background-color: #c0392b;
}

.menu-toggle {
    display: none;
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
        width: 100%;
        text-align: center;
    }
    
    .menu-toggle {
        display: block;
        float: right;
    }

    .nav-links a {
        display: block;
        padding: 15px;
        border-top: 1px solid #fff;
    }
}

/* Header */
.header {
    background-color: #e74c3c;
    color: white;
    padding: 100px 0;
    text-align: center;
}

.header h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.cta-button {
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: none;
    cursor: pointer;
}

.cta-button:hover {
    background-color: #333;
}

/* Grid Sections */
.grid-section {
    padding: 50px 0;
}

.grid-section.light {
    background-color: #f4f4f4;
}

.grid-section .grid-text,
.grid-section .grid-icon {
    width: 50%;
    display: inline-block;
    vertical-align: middle;
}

.grid-text h2 {
    margin-bottom: 20px;
    font-size: 32px;
}

.grid-text p {
    color: #7f8c8d;
}

.icon-large {
    font-size: 120px;
    color: #e74c3c;
    text-align: center;
}

/* Footer */
.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}

.footer p {
    margin-bottom: 20px;
}

</style>

<script>
function toggleMenu() {
    const navMenu = document.getElementById('navMenu');
    if (navMenu.style.display === 'block') {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'block';
    }
}
</script>