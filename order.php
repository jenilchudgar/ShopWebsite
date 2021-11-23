<?php
if(isset($_POST['name']))
    $server = "localhost";
    $username = "root";
    $password = "";
    $insert = false;
    $con= mysqli_connect($server,$username,$password);
    if (!$con){
        die ("Connection failed to this data base".mysqli_connect_error());
    }
    // else{
    //     echo "Succesfully Connected to the Data Base";
    // }
    
    $name = $_POST ['name'];
    $age = $_POST ['age'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone_number'];
    $gender = $_POST ['gender'];
    $sql = "INSERT INTO `travel`.`usa` (`name`, `age`, `email`, `phone_number`, `gender`, `date`) VALUES ('$name', '$age', '$email', '$phone', '$gender', current_timestamp());";

    if($con->query($sql) == true)
    {
        // echo "Succesfull in filling the form";
        $insert= true;
    }
    // else($con->query($sql) == false){
    //     echo $con->error;
    // }
    $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>
<body>
    <img src="https://www.iiti.ac.in/public/storage/sliders/July2019/SivS3HwwDwLlGCc4l7sc-medium.png" alt="IIT Indore" class="bg">
    <div class="container">
        <h3>Please enter your details and products you need:</h3>
        <br>

        <form action="Project.php" method="post">
            <input type="text" id="name" name="name" placeholder="Enter your name: ">

            <input type="number" id="age" name="age" placeholder="Enter your age: ">

            <input type="email" id="email" name="email" placeholder="Enter your email: ">

            <input type="number" id="phone_number" name="phone_number" placeholder="Enter your phone number: ">

            <input type="text" id="gender" name="gender" placeholder="Enter your gender: ">
            <?php
            if($insert == true)
            {
                echo '<p>Thanks for Submiting the form.</p>';
            }
            ?>
            <button class="btn">Submit</button>
        </form>
    </div>
    <!-- <script src="index.js"></script> -->
</body>
</html>