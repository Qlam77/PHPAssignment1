<?php
$db = mysqli_connect("localhost:3306", "root", "1234")
or die(mysqli_connect_error());

mysqli_select_db($db, 'bcit') or
die(mysqli_error($db));

$wordRand = rand(1, 235924);
$wordRand2 = rand(1, 235924);
$conjRand = rand(1, 9);
$prefRand = rand(1, 9);
$prefRand2 = rand(1, 9);

$view1 = mysqli_query($db, "
	SELECT word FROM wordList WHERE _id = $wordRand;
");

$view2 = mysqli_query($db, "
	SELECT word FROM wordList WHERE _id = $wordRand2;
");

$view3 = mysqli_query($db, "
	SELECT word FROM conjList WHERE _id = $conjRand;
");

$view4 = mysqli_query($db, "
	SELECT word FROM prefList WHERE _id = $prefRand;
");

$view5 = mysqli_query($db, "
	SELECT word FROM prefList WHERE _id = $prefRand2;
");

$randWord1 = mysqli_fetch_assoc($view1);
$randWord2 = mysqli_fetch_assoc($view2);
$randConj = mysqli_fetch_assoc($view3);
$randPref = mysqli_fetch_assoc($view4);
$randPref2 = mysqli_fetch_assoc($view5);

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
        <h3 class="TestMe" style="display: none;">
            <?php echo (ucfirst(trim($randPref['word']) . trim(lcfirst($randWord1['word']))) . " " . ucfirst($randConj['word']) . " " . ucfirst(trim($randPref2['word']) . trim(lcfirst($randWord2['word']))));?>
            <br/>
            <br/>
            <button class="btn" onclick="javascript=window.location.reload()">Reload with new words!</button>
        </h3>
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
                    FakeEmail@FakeEmail.com
                </div>
                <div>
                    604-dont-call-me
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