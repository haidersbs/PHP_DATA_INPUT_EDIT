<?php 
include ('config.php');


if(isset($_POST['submit'])){

$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];


$infosql = "INSERT INTO curd (fullname,address,email) VALUES('$fullname','$address','$email')";


$finalinfosql = mysqli_query($conn , $infosql);

if($finalinfosql == TRUE){
    echo "data submit";
    header("Location: view.php");
}else{
    echo "not submited ";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

    <label for="">Your Full Name </label><br>
    <input type="text" name="fullname"><br>
    <label for="">Your Address </label><br>
    <input type="text" name="address"> <br>
    <label for="">Your Email  </label><br>
    <input type="email" name="email"><br>
    <input type="submit" name="submit" value="submit">
    
    </form>
</body>
</html>