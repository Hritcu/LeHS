<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose between HTML and CSS</title>
    <link href="<?php echo URL; ?>public/css/statistics2.css" rel="stylesheet">
</head>

<body>
    <header>
        <button id="menuBtn" class="btn btn-5" type="button"> Menu </button>
    </header>
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

    <h1 class="text" id="title">Top Utilizatori</h1>


    <table id="customers">
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Levels</td>
            </tr>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php if (isset($user->id)) echo $user->id; ?></td>
                    <td><?php if (isset($user->username)) echo $user->username; ?></td>
                    <td><?php if (isset($user->levels)) echo $user->levels; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>



</body>

</html>

