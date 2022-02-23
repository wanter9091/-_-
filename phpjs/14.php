<?php
	$conn=mysqli_connect("localhost","root", "1q2w3e4r");
	mysqli_select_db($conn,"opentutorials");
    $sql="SELECT * FROM topic WHERE name='".$_GET['name']."' AND 
    password='".$_GET['password']."'";
    echo $sql;
	$result=mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $password=$_GET['password'];
            if($password==1111){
                echo "어서오세요~";
            }
            else{
                echo "뉘신지?";
            }
        ?>
    </body>
</html>