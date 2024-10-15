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

                    <h1>Welkom bij Huisartsenpraktijk De Poort</h1>
                    <b> Uw gezondheid, onze hoogste prioriteit</b>
                    <p> Bij Huisartsenpraktijk De Poort staat persoonlijke en deskundige zorg centraal.
                        Ons team van ervaren huisartsen, verpleegkundigen en praktijkondersteuners staat klaar
                        om u te helpen bij al uw medische vragen en gezondheidsproblemen.
                        Wij geloven in een laagdrempelige, patiëntgerichte benadering,
                        waarbij uw welzijn altijd voorop staat.</p>

                    <br>
                    <h1>______________________________________________</h1>
                    <br>

                    <h1>Onze Zorgdiensten</h1>
                    <p>Wij bieden een uitgebreid scala aan medische diensten,
                        gericht op het bevorderen van uw gezondheid en welzijn:</p>
                    <b>Algemene Huisartsgeneeskunde:</b>
                    <p>Van consulten en medische controles tot behandelingen en verwijzingen.</p>
                    <b>Preventieve Zorg:</b>
                    <p>Gezondheidschecks, reisvaccinaties en advies over leefstijl en voeding.</p>
                    <b>Psychische Ondersteuning:</b>
                    <p>Begeleiding bij stress, burn-out, angst en depressie.</p>
                    <b>Chronische Zorg:</b>
                    <p>Behandeling en begeleiding van chronische aandoeningen zoals diabetes, hart- en vaatziekten, en
                        astma.</p>
                    <b>Specialistische Zorg:</b>
                    <p>Spreekuren voor huidklachten, allergieën en kleine chirurgische ingrepen.</p>

                    <br>
                    <h1>______________________________________________</h1>
                    <br>

                    <h1>Waarom kiezen voor Huisartsenpraktijk De Poort?</h1>
                    <b>Toegankelijke en persoonlijke zorg:</b>
                    <p>Wij kennen onze patiënten bij naam en nemen de tijd voor elke afspraak.</p>
                    <b>Moderne faciliteiten:</b>
                    <p>Onze praktijk is voorzien van de nieuwste apparatuur en een patiëntvriendelijke omgeving.</p>
                    <b>Samenwerking met specialisten:</b>
                    <p>Wij werken nauw samen met specialisten en zorgverleners in de regio voor een complete
                        zorgervaring.</p>
                    <b>Online afspraken en herhaalrecepten:</b>
                    <p>Plan uw afspraak eenvoudig online en vraag herhaalrecepten snel aan via ons patiëntenportaal.</p>


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
                            <td>08:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Zondag</td>
                            <td>08:00-17:00</td>
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
</style>