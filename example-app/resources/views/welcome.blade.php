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
                    <h2>De Poort</h2>
                    <p>Welkom bij Huisartspraktijk De Poort.</p>
                </div>
                <div class="grid-icon">
                </div>
            </div>
        </section>

        <!-- Openingstijden -->

        <section class="grid-section light">
            <div class="container">
                <div class="grid-icon">
                </div>
                <div class="grid-text">
                    <h2>Openingstijden</h2>
                    <table>
                        <tr>
                            <td>Maandag</td>
                            <td>08:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Dinsdag</td>
                            <td>08:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Woensdag</td>
                            <td>08:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Donderdag</td>
                            <td>08:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Vrijdag</td>
                            <td>08:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Zaterdag</td>
                            <td>Gesloten</td>
                        </tr>
                        <tr>
                            <td>Zondag</td>
                            <td>Gesloten</td>
                        </tr>
                    </table>
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
        border: none;
        border-radius: 60px;
        color: white;
        cursor: pointer;
        display:inline-block;
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

    .grid-text table {
        width: 39%;
        border-collapse: collapse;
    }

    .grid-text th,
    .grid-text td {
        border: 1px solid #ddd;
        padding: 5px;
        text-align: left;
    }

    .grid-text th {
        background-color: #f0f0f0;
    }

    .logo{
        width: 200px;
        height: 100px;
    }
</style>