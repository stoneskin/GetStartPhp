
<html>
<body>
<?php
$isPost=($_SERVER["REQUEST_METHOD"] == "POST");
?>

<?php if (!$isPost):?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php else:?>

    <?php

        $name=$_POST["name"];
        $email=$_POST["email"];

        if(isset($name) && $name !== ''){

            echo '<p>Welcome '.$name.' <br>';
            echo 'Your email address is: '.$email.        '</p>';
        }      

    ?>
    <a href=""> back </a>
<?php endif; ?>

</body>
</html>