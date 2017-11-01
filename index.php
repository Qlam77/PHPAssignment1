<?php
$contents = file_get_contents("WordList.txt");
$wordArray = explode("\n", $contents);
$contents = file_get_contents("Conjunctions.txt");
$conjuncArray = explode("\n", $contents);

$rand1 = rand(0, count($wordArray) - 2);
$rand2 = rand(0, count($wordArray) - 2);
$rand3 = rand(0, count($conjuncArray) - 2);
?>
<html xmlns:margin-bottom="http://www.w3.org/1999/xhtml">
<head>
    <title>Random World Generator</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 01 auto;
        }
    </style>
</head>
<body>
<script>
    $(document).ready(function(){
        $(".TestMe").fadeIn("slow", function(){
        });
    });
</script>
<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a class="brand-logo center" href="#">Randomize</a>
            </div>
        </nav>
    </div>
</header>
<main>
    <div class="center">
        <h3 class="TestMe" style="display: none;"><?php echo (ucfirst($wordArray[$rand1]) . " " . ucfirst($conjuncArray[$rand3]) . " " . ucfirst($wordArray[$rand2]));?></h3>
        <button class="btn" onClick="location.reload();">Get new words!</button>
    </div>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Made By:</h5>
                <p class="grey-text text-lighten-4">Paul Li, Quincy Lam</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact:</h5>
                <div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright BCIT Students
        </div>
    </div>
</footer>
</body>
</html>