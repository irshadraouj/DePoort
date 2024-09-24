<?php
include("/Users/bas15/Documents/GitHub/DePoort/example-app/resources/views/connection.blade.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inlog</title>
    <link rel="stylesheet" href="style.css">
    <script src="myscripts.js"></script>
</head>
<body>
<div id="box">
    <form method="post">
        <div>
            <h1>Login</h1>
        </div>
        <label for tnummer>Telefoonnummer:</label>
        <input type="text" id="tnummer" name="tnummer"
        onkeypress="return restrictionAlphabet(event)"><br>
        <label for ww>Wachtwoord:</label>
        <input type="password" id="ww" name="ww">
    </form>
</div>
<script>
    function restrictionAlphabet(e){
        var x = e.which || e.keycode;
        if((x >= 48 && x <= 57))
        return true;
    else
    return false;
    }
</script>
</body>
</html>