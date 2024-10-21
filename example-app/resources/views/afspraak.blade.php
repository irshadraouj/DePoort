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
                    <h2>Afspraak maken</h2>
                    <p>...</p>
                </div>
                <div class="grid-icon">
                </div>
            </div>
        </section>

        <!-- afspraak maken -->
        <form id="form" method="post">
            <table>
                <tr>
                    <td> naam: </td>
                    <td><input type="text" placeholder="* naam" id="naam" onkeyup="foutmelding('naam')">
                        <input type="text" placeholder="tsv" id="tsv" onkeyup="foutmelding('tsv')">
                        <input type="text" placeholder="* achternaam" id="achternaam"
                            onkeyup="foutmelding('achternaam')">
                    </td>
                    <td id="naam-error"></td>
                    <td id="tsv-error"></td>
                    <td id="achternaam-error"></td>
                </tr>
                <tr>
                    <td> telefoon:</td>
                    <td><input type="number" placeholder="* telefoon" id="telefoon" onkeyup="foutmelding('telefoon')">
                    </td>
                    <td id="telefoon-error"></td>

                </tr>
                <tr>
                    <td> geslacht: </td>
                    <td> man <input id="geslacht" type="radio" name="geslacht" onkeyup="foutmelding('geslacht')">
                        <br>
                        vrouw <input id="geslacht" type="radio" name="geslacht">
                        <br>
                        iets anders<input id="geslacht" type="radio" name="geslacht">
                    </td>
                    <td id="geslacht-error"></td>



                </tr>
                <tr>
                    <td> reden: </td>
                    <td>
                        <!-- <input type="text" placeholder="reden van uw afspraak" id="reden"
                            onkeyup="foutmelding('reden')"> -->
                        <textarea id="redenbox" placeholder="* reden van uw afspraak"></textarea>

                    </td>
                    <td id="reden-error"></td>

                </tr>

                <tr>
                    <td> tijd: </td>
                    <td><input type="date" name="tijd" placeholder="dd-mm-jjjj" id="tijd" onkeyup="foutmelding('tijd')">
                    </td>
                    <td id="tijd-error"></td>

                </tr>

                <tr>

                    <td></td>
                    <td><input type="submit" name="submit" value="Afspraak maken"></td>

                </tr>

            </table>

            <script>

                function foutmelding(id) {
                    //    document.getElementById("naam")

                    if (document.getElementById(id).value.length < 2) {
                        document.getElementById(id).style.backgroundColor = "red";
                        document.getElementById(id + '-error').innerHTML = id + " klopt niet,";
                    }
                    else {
                        document.getElementById(id).style.backgroundColor = "lightgreen";
                        document.getElementById(id + '-error').innerHTML = "";
                    }
                }


            </script>

        </form>

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

    table {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    td {
        padding: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="submit"] {
        width: calc(100% - 20px);
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="radio"] {
        margin-left: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    td:first-child {
        text-align: right;
        font-weight: bold;
    }

    #naam-error,
    #tsv-error,
    #achternaam-error,
    #adres-error,
    #postcode-error,
    #telefoon-error,
    #geslacht-error,
    #geboorte-error {
        color: red;
        font-size: 0.9em;
        padding-left: 10px;
    }

    @media (max-width: 768px) {
        table {
            width: 100%;
        }

        td:first-child {
            text-align: left;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
        }
    }

    .logo {
        width: 200px;
        height: 100px;
    }

    /* icons */
    .social-icons a {
        text-decoration: none;
        margin: 0 10px;
        color: #5ea3a3;
        /* Zwart */
    }

    .social-icons a:hover {
        color: #000;
        /* Blauw bij hover */
    }

    .social-icons i {
        font-size: 24px;
        /* Grootte van het icoon */
    }

    textarea {
        resize: none;
        width: 360px;
        height: 70px;
    }
</style>