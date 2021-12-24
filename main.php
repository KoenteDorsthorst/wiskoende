<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css.css">


</head>
<body>


<?php include "Includables/navbar.html" ?>

<script>
    var randomNumber1 = Math.floor(Math.random() * 10);
    var randomNumber2 = Math.floor(Math.random() * 10);
    window.onload = function() {
        var question = randomNumber1 + " + " + randomNumber2 + " = ?";
        document.getElementById('question').innerHTML = question;
    }
</script>

<div class="center">
    <form onsubmit="myFunction()">
        <label for="answer"><p id="question"></p></label><br>
        <input type="text" id="answer" name="answer"><br>
        <input type="submit" value="Submit">
    </form>
</div>

<script>
    function myFunction() {
        var userAnswer = document.getElementById("answer").value;
        if (userAnswer == randomNumber1 + randomNumber2){
            alert("yeah");
        }
        else{
            alert("no");
        }
    }
</script>


</body>
</html>