<!doctype html>
<html lang="en">

<head>
    <title>Learn HTML</title>
    <meta charset="utf-8" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Learn CSS">
    <meta property="og:description" content="A game for learning CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>public/css/styleChooseHTMLorCSS copy.css" rel="stylesheet">
</head>

<body>

    <header>
        <button id="menuBtn" type="button" class="btn btn-5"> Menu </button>
    </header>


    <nav id="navPanel">
        <ol>
            <li id="home">
                <a class="btn btn-5" href="<?php echo URL; ?>home/index" >Home</a>
            </li>
            <li>
                 <a class="btn btn-5" href="<?php echo URL; ?>profile">Profile</a>
            </li>
            <li>
            <a class="btn btn-5" href="<?php echo URL; ?>profilesettings">Settings</a>
            </li>
            <li>
            <a class="btn btn-5" href="index.php?logout='1'"> Log out</a>
            </li>
        </ol>
    </nav>
    <script src="<?php echo URL; ?>public/js/meniu.js"></script>

    <h1 id="title">
        Welcome ! What would you like to learn and practice today?
    </h1>
    <div class="Buttons">
    <a href="<?php echo URL; ?>HTMLLevels/level/1">    
        <img src="<?php echo URL; ?>public/img/HTML.png" id="LearnHTML" alt="LearnHTML">
         </a>
         <a href="<?php echo URL; ?>CSSLevels/level/1">
         <img src="<?php echo URL; ?>public/img/CSS.png" id="LearnCSS" alt="LearnCSS">
         </a>
    </div>
    <footer>
    <a href="<?php echo URL; ?>home/scholary">
        <img src="<?php echo URL; ?>public/img/ScholarlyHTML_Button.png" id="ScholarlyHTML" alt="ScholaryHTML">
        </a>
    </footer>

</body>

</html>




