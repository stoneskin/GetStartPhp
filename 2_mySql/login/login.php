<?php require 'dbconfig.php' ?>
<html>
<body>
<?php
$isPost=($_SERVER["REQUEST_METHOD"] == "POST");
?>

<?php if (!$isPost): ?>
    <!-- login form -->
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    UName: <input type="text" name="uname"><br>
    Pwd: <input type="text" name="pwd"><br>
    <input type="submit">
    </form>


<?php else:?>

    <?php
        //load username and password from post
        $uname=$_POST["uname"];
        $pwd=$_POST["pwd"];
        $error="";

        // validation
        if(!isset($uname) || empty($uname )){
            $error= "username is required!";
        }        
        if(!isset($pwd) || empty($pwd)){
            $error= "password is required!";
        }


        if(!empty($error)){
            echo '<p>'.$error.' <br>';
        }else{
            //to load db to check pwd
            $sql = "SELECT * FROM `user` WHERE Email='{$uname}' and Password='{$pwd}';";
            $result = $conn->query($sql);  
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $id=$row['ID'];
                echo "<p>Welcome $uname, your id is {$id} <br>";
            }else{
                echo "no result found!";
            }
            
        }  

    ?>
    <a href=""> back </a>
<?php endif; ?>

</body>
</html>