<?php
include('/Users/bas15/Documents/GitHub/DePoort/example-app/resources/views/connection.blade.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inloggen</title>
</head>
<body>
   
<form id="form" method="post">
        <table>
            <tr>
                <td> naam: </td>
                <td><input type="text" placeholder="naam" id="naam" onkeyup="foutmelding('naam')">
                    <input type="text" placeholder="tsv" id="tsv" onkeyup="foutmelding('tsv')">
                    <input type="text" placeholder="achternaam" id="achternaam" onkeyup="foutmelding('achternaam')">
                </td>
                <td id="naam-error"></td>
                <td id="tsv-error"></td>
                <td id="achternaam-error"></td>
            </tr>
            <tr>
                <td> adres:</td>
                <td><input type="text" placeholder="adres" id="adres" onkeyup="foutmelding('adres')"></td>
                <td id="adres-error"></td>
            </tr>
            <tr>
                <td> postcode:</td>
                <td><input type="text" placeholder="postcode" id="postcode" onkeyup="foutmelding('postcode')">
                    <input type="text" placeholder="plaats" id="plaats" onkeyup="foutmelding('plaats')">
                </td>
                <td id="postcode-error" id="plaats-error"></td>
            </tr>
            <tr>
                <td> telefoon:</td>
                <td><input type="number" placeholder="telefoon" id="telefoon" onkeyup="foutmelding('telefoon')"></td>
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
                <td> gb.datum:</td>
                <td><input type="text" placeholder="dd-mm-jjjj" id="geboorte" onkeyup="foutmelding('geboorte')"></td>
                <td id="geboorte-error"></td>

            </tr>
            <tr>

                <td></td>
                <td><input type="submit" name="submit" value="Account aanmaken"></td>

            </tr>

        </table>
    </form>

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
</body>
</html>