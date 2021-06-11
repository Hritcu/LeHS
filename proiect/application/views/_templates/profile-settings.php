
<!doctype html>
<html lang="en">

<head>
    <title>Learn HTML</title>
    <meta charset="utf-8" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Learn CSS">
    <meta property="og:description" content="A game for learning CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>public/css/profile-sett.css" rel="stylesheet">
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
                 <a class="btn btn-5" href="<?php echo URL; ?>profile/indexl">Profile</a>
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

    <div class="split">
    <div class="split left">
            <h4 class="font-weight-bold py-3 mb-4">
                Account settings
            </h4>
            <div class="centered">
                <div class="card-body media align-items-center">
                <img src="<?php echo URL;?>application/models/uploads/<?php echo $_SESSION['filename'];?>" alt="" class="d-block ui-w-80">
                    <form method="POST"
              action=""
              enctype="multipart/form-data">
              <div class="media-body ml-4">
              <label class="btn btn-outline-primary">
                                  Upload new photo
            <input type="file" name="uploadfile" class="account-settings-fileinput" value="" />
            </label> &nbsp;
            </div>
            <div>
                <button type="submit" class="btn btn-5" id="reset" name="upload">
                Upload
                </button>
            </div>
        </form>
                </div>
            </div>
        </div>
        
    
        <div class="split right">

            <div class="centered">
            <form method="POST"
              action=""
              enctype="multipart/form-data">
                <div class="card-body1">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control mb-1" name="username" value=<?php echo $_SESSION['username']; ?>>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value=<?php echo $_SESSION['name'];?>>
                    </div>
                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control mb-1" email="email" value=<?php echo $_SESSION['email']; ?>>
                        <div class="alert alert-warning mt-3">
                        <br>
                            Introduceti aici parola pentru a salva modificarile<br>
                        <br>
                        </div>
                    </div>

                </div>


                <div class="tab-pane fade" id="account-change-password">
                    <div class="card-body1 pb-2">

                        <div class="form-group">
                            <label class="form-label">Current password</label>
                            <input type="password" name="password"  class="form-control" >
                        </div>

                        <div class="form-group">
                            <label class="form-label">New password</label>
                            <input type="password" class="form-control" name="new_password">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Repeat new password</label>
                            <input type="password" class="form-control" name="rnew_password">
                        </div>

                    </div>
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-5" name="submit_change" value="Submit" id="save">Save </button>&nbsp; 
                    <button type="submit" class="btn btn-5" name="cancel" value="Submit" id="cancel">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>