<!DOCTYPE html>
<html lang="en">
@extends("layouts.layout")
@section("De Poort, welcome")
@section("content")
<head>
    <title>De Poort</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

   

    <!-- Main Content -->
    <main>
        <!-- First Section -->
        <section class="grid-section">
            <div class="container">
                <div class="grid-text">
                    <h1>Ons Team</h1>
                    <p>Ons toegewijde team van ervaren huisartsen, 
                    praktijkondersteuners en assistentes staat altijd klaar 
                    om u de beste zorg te bieden. Wij volgen de nieuwste ontwikkelingen 
                    binnen de medische wetenschap en werken nauw samen met apotheken, 
                    fysiotherapeuten, specialisten en ziekenhuizen om ervoor 
                    te zorgen dat u de zorg krijgt die u nodig heeft.</p>
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
                </div>
            </div>
        </section>
    </main>

    

    <!-- External JS -->
    <script src="script.js"></script>
</body>
@endsection
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
        border-radius: 60px;
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
        padding: 20px 0;
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

    .logo{
        width: 200px;
        height: 100px;
    }
    /* icons */
.social-icons a {
    text-decoration: none;
    margin: 0 10px;
    color: #5ea3a3; /* Zwart */
}

.social-icons a:hover {
    color: #000; /* Blauw bij hover */
}

.social-icons i {
    font-size: 24px; /* Grootte van het icoon */
}
</style>