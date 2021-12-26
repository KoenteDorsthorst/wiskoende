<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css.css">

    <script type = "text/javascript">


        function calculate(){
            const userAnswer = document.getElementById("answer").value;
            if (userAnswer == Math.pow(randomNumber1, 2) + Math.pow(randomNumber2, 2)){
                alert("yeah");
            }
            else{
                alert("no");
            }
        }

    </script>

    <script type = "text/javascript">
        function newTest(){
            randomNumber1 = 0;
            randomNumber2 = 0;
            while(randomNumber1 <= 0){
                randomNumber1 = Math.floor(Math.random() * 10);
            }
            while(randomNumber2 <= 0){
                randomNumber2 = Math.floor(Math.random() * 10);
            }
            document.getElementById('question').innerHTML = randomNumber1 + "² + " + randomNumber2 + "² = ?";
        }
    </script>

</head>
<body>
<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/Includables/navbar.html";
    include($path) ?>

<script>

    let randomNumber1 = 0;
    let randomNumber2 = 0;
    window.onload = function() {
        newTest()
    }

</script>

<div class="center">
    <form>
        <label for="answer"><p id="question"></p></label><br>
        <input type="text" id="answer" name="answer"><br>
        <input type="button" value="calculate" onclick="calculate();">
        <input type="button" value="newTest" onclick="newTest();">
    </form>


</div>




<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Includables/end.html";
include($path) ?>
