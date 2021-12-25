<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css.css">

</head>
<body>
<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/Includables/navbar.html";
    include($path) ?>




<script>


    var randomNumber1 = 0;
    var randomNumber2 = 0;
    while(randomNumber1 <= 0){
        randomNumber1 = Math.floor(Math.random() * 10);
    }
    while(randomNumber2 <= 0){
        randomNumber2 = Math.floor(Math.random() * 10);
    }
    window.onload = function() {
        document.getElementById('question').innerHTML = randomNumber1 + "² + " + randomNumber2 + "² = ?";
    }



</script>

<div class="center">
    <form onsubmit="calculate()">
        <label for="answer"><p id="question"></p></label><br>
        <input type="text" id="answer" name="answer"><br>
        <input type="submit" value="submit">
    </form>
</div>


<script>
    function calculate() {
        alert("2");
        var userAnswer = document.getElementById("answer").value;
        if (userAnswer === Math.pow(randomNumber1, 2) + Math.pow(randomNumber2, 2){
            alert("yeah");
        }
        else{
            alert("no");
        }
    }
</script>


<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Includables/end.html";
include($path) ?>
