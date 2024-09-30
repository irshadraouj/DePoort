<!DOCTYPE html>
<html lang="en">
<head>
<title>De Poort</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header class="header">
  <!-- navbar groot -->
  <div class="navbar">
    <a href="/" class="homebutton">Home</a>
    <a href="/inloggen" class="inloggenbutton">Inloggen</a>
    <a href="/afspraak" class="afspraakmakenbutton">Afspraak maken</a>
    <a href="/contact" class="contactbutton">Contact</a>
    <a href="/overons" class="overonsbutton">Over ons</a>
  </div>
</header>

<!-- Main Content -->
<main>
    <!-- First Section -->
    <section class="grid-section">
        <div class="container">
            <div class="grid-text">
                <h2>Over ons</h2>
                <p>...</p>
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
                <h2>...</h2>
                <p>...</p>
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
        <p></p>
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
    background-color: #5ea3a3;
    padding: 10px;
}

/* Style for navigation links */
.navbar a {
    padding: 10px 20px;
    background-color: #488b8f;
    color: white;
    cursor: pointer;
    display: inline-block;
}

.navbar a:hover {
    background-color: #333;
}

/* Header */
.header {
    background-color: #5ea3a3;
    padding: 35px 0;
    text-align: left;
}

.header h1 {
    font-size: 48px;
    margin-bottom: 20px;
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