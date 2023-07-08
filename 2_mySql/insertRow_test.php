<?php require 'dbconfig.php' ?>
<html>
<body>
<?php
$isPost=($_SERVER["REQUEST_METHOD"] == "POST");
?>


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Body: <input type="text" name="body"><br>
Desc: <input type="text" name="description"><br>
Level: <input type="text" name="level"><br>
<input type="submit">
</form>
<?php if ($isPost):?>

    <?php

        $body=$_POST["body"];
        $desc=$_POST["description"];
        $level=$_POST["level"];

        if(!isset($level))
            $level=0;
//INSERT INTO `questions` (`id`, `body`, `description`, `level`, `reg_date`) VALUES (NULL, 'test', 'testdesc', '1', current_timestamp())
        if(isset($body) && $body !== ''){
            $sql = "INSERT INTO Questions (body, description, level)
            VALUES ('$body', '$desc', $level)";
        echo $sql."<BR>";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

       

            echo '<p>Insert Question ['.$body.'] into database table <br>';
            
        }      

    ?>
   
<?php endif; ?>
<?php $conn->close();?>

</body>
</html>