<!doctype html>
<html lang="en">

<head>
    <title>Learn HTML</title>
    <meta charset="utf-8" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Learn CSS">
    <meta property="og:description" content="A game for learning CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>/public/css/paginacss.css" rel="stylesheet">
</head>

<body>

    <header>
        <button id="menuBtn" type="button" class="btn btn-5"> Menu </button>
    </header>

    <input type="hidden" id="correctAnswer" value="<?php echo $level_model->raspuns ?>">
    <input type="hidden" id="shelter_style_justifyContent" value="<?php echo $level_model->justify_content_property_shelter ?>">
    <input type="hidden" id="shelter_style_flexDirection" value="<?php echo $level_model->flex_direction_property_shelter ?>">
    <input type="hidden" id="shelter_style_alignItems" value="<?php echo $level_model->align_items_property_shelter ?>">


    <div class="split left">
        <div class="centered">

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

            <div class="header">
                <div>
                    <h1 class="title">Learn CSS</h1>
                </div>
                <div id="level-counter">
                    <a href="<?php echo ($level_model->id) - 1 ?>" id="previous" class="btn btn-5">&laquo;</a>
                    <div class="level-indicator"><?php echo $level_model->id?> of 20 </div>
                    <a href="<?php echo ($level_model->id) + 1 ?>" id="nextlevel" class="btn btn-5"> &raquo;</a>
                </div>
            </div>

            <p id="instructions" >
                <?php echo $level_model->cerinta  ?>
            </p>
            <form method="POST"
              action=""
              enctype="multipart/form-data">
            <div id="editor">
                <div id="css">
                    <pre id="before">#shelter {

display: flex; </pre>
                    <textarea id="code" autofocus autocapitalize="none"></textarea>
                    <pre id="after">}</pre>
                </div>
                <div >
                    <p id="response">AICI VA FI RASPUNSUL</p>
                    <input type="hidden" id="clevel" name="clevel" value="0">
                </div>
                    </div>
            <div>
            <button type="submit" id="checkCodeBtn"  name="submit_check" value="Submit" class="btn btn-5">Check!</button>
                <a href="<?php echo ($level_model->id) + 1 ?>">
                <button id="nextBtnn" class="btn btn-5">Next</button>
                 </a>
                </div>
                    </form>
                <script src="<?php echo URL; ?>public/js/verifyInputCodeCSS.js"></script>
            <section>
                
            <footer>
                <div class="share">
                    •
                    <a href="<?php echo URL; ?>home/index" id="active">Home</a>•
                    <a href="....">GitHub</a> •
                    <a href="<?php echo URL; ?>home/profilesettings" id="active">Settings</a>•
                </div>
                <div id="learnhtml">
                <div id="learnHTML">Want to learn HTML? Play <a href="<?php echo URL; ?>HTMLLevels/level/2">Learn HTML</a>.
                    </div>
                </div>
            </footer>

        </div>
    </div>


    
    <div class="split right">

        <div id="background" style="<?php echo $level_model->background_style ?>">
            <div id="house" >
            <img  src="<?php echo URL; ?>public/img/Casa_Caine_Rosu.png" id="Casa_Caine_Rosu" alt="Casa_Caine_Rosu">
            </div>
            <div id="house" style="<?php echo $level_model->blue_dog_house_style ?>">
            <img src="<?php echo URL; ?>public/img/Casa_Caine_Albastru.png" id="Casa_Caine_Albastru" alt="Casa_Caine_Albastru">
            </div>
            <div  id="house" style="<?php echo $level_model->yellow_dog_house_style ?>">
            <img src="<?php echo URL; ?>public/img/Casa_Caine_Galben.png" id="Casa_Caine_Galben" alt="Casa_Caine_Galben">
            </div>
        </div>

        <div id="shelter" >
            <div id = "dog">
            <img src="<?php echo URL; ?>public/img/Caine_Rosu.png" id="Caine_Rosu" alt="Caine_Rosu">
            </div>
            <div id = "dog"  style="<?php echo $level_model->blue_dog_style ?>">
            <img src="<?php echo URL; ?>public/img/Caine_Albastru.png" id="Caine_Albastru" alt="Caine_Albastru">
            </div>
            <div id = "dog"  style="<?php echo $level_model->yellow_dog_style ?>" >
            <img src="<?php echo URL; ?>public/img/Caine_Galben.png" id="Caine_Galben" alt="Caine_Galben">
            </div>

        </div>
    </div>



</body>

</html>