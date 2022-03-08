<html>
<head><title>Your Favorite</title></head>
<body>
    Thanks for your service  <?php echo $_POST["username"]; ?><br>
    
    You really enjoyed  <?php echo $_POST["dish"]; ?><br>
    
    <?php
    if (!empty($_POST['color'])){
        $color = $_POST['color'];
        echo "-especially with a nice {$color} wine";
    } else {
        echo "Please select color. ";
    }    
    ?>
</body>
</html>