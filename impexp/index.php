<?php 
include "config.php";
?>
<!doctype html>
<html>
    <head>
        <title>Makitweb - How to Export MySQL Table data as CSV file in PHP</title>
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            
            <form method='post' action='download.php'>
            <input type='submit' value='Export' name='Export'>
                
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>ID</th>
                    <th>levelH</th>
                    <th>levelC</th>
                    <th>levels</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>FileName</th>
                </tr>
            <?php 
            global $con;

        
            $user_arr = array();
            $sql = "SELECT * FROM tabel";
            $result = mysqli_query($con, $sql) or die( mysqli_error($con));
        
            while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC)){
                $id = $row['id'];
                $levelH = $row['levelH'];
                $levelC = $row['levelC'];
                $levels = $row['levels'];
                $uname = $row['username'];
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
                $filename = $row['filename'];
                $user_arr[] = array($id,$levelH,$levelC,$levels,$uname,$name,$email,$password,$filename);
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $levelH; ?></td>
                    <td><?php echo $levelC; ?></td>
                    <td><?php echo $levels; ?></td>
                    <td><?php echo $uname; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $password; ?></td>
                    <td><?php echo $filename; ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <?php 
            $serialize_user_arr = serialize($user_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
            </form>
        </div>
    </body>
</html>

