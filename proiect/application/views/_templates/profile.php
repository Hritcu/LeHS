
<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="utf-8" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Learn CSS">
    <meta property="og:description" content="A game for learning CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>public/css/profile copy.css" rel="stylesheet">
</head>
<header>
        <button id="menuBtn" type="button" class="btn btn-5"> Menu </button>
    </header>
<body>

    <nav id="navPanel">
                <ol>
                    <li id="home">
                    <a class="btn btn-5" href="<?php echo URL; ?>home/index" >Home</a>
                    </li>
                    <li>
                    <a class="btn btn-5" href="<?php echo URL; ?>profile/index">Profile</a>
                    </li>
                    <li>
                    <a class="btn btn-5" href="<?php echo URL; ?>profilesettings/index">Settings</a>
                    </li>
                    <li>
            <a class="btn btn-5" href="index.php?logout='1'"> Log out</a>
            </li>
                </ol>
            </nav>
            <script src="<?php echo URL; ?>public/js/meniu.js"></script>

    <div>
        <div class="container light-style flex-grow-1 container-p-y">


            <div id="split">

                <div class="split left">
                    <div class="centered">
                        <div class="card-body media align-items-center">
                            <img src="<?php echo URL;?>application/models/uploads/<?php echo $_SESSION['filename'];?>" alt="" class="d-block ui-w-80">
                            <div class="media-body ml-4">
                                <label class="btn btn-outline-primary">
                                <?php echo $_SESSION['username']; ?>
                                <br>
                                <?php echo $_SESSION['email']; ?>
                                    </label> &nbsp;

                            </div>

                            <a href="<?php echo URL; ?>utilizatori">Statistica</a>
                        </div>
                    </div>
                </div>

                <div class="split right">
                    <div>


                        <div class="card-html-progress">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-3">
                                    <h4>HTML</h4>
                                    Ai completat <?php echo $_SESSION['levelH'];?> nivele din 7!

                                </div>
                            </div>
                        </div>
                        <div class="card-html-progress">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-3">
                                    <h4>CSS</h4>
                                    Ai completat <?php echo $_SESSION['levelH']-1;?> nivele din 20!

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>




