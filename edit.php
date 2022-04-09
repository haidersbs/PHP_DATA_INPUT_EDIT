<?php
    include ('config.php');
  

    if(isset($_REQUEST['edit_id'])){
        $editdata = $_REQUEST['edit_id'];


    $editsql = "SELECT* FROM curd WHERE ID =  $editdata";

    $finaleditedatasql = mysqli_query($conn,$editsql);

    if($finaleditedatasql){
        $data = mysqli_fetch_assoc($finaleditedatasql);{
            $fullname = $data['fullname'];
            $address = $data['address'];
            $email = $data['email'];
        }
    }
}

if(isset($_REQUEST['submit'])){
    $editdata = $_REQUEST['edit_id'];
    $fullname = $_REQUEST['fullname'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    
    $upsql = "UPDATE curd SET fullname='$fullname', address = '$address', email=' $email' WHERE ID =  $editdata";
    $final = mysqli_query($conn,$upsql);
    if($final= TRUE){
        echo "done";
        header("Location: view.php?UPDATED");
    }else{
        echo"none";
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
    <input type="text" name="fullname" value="<?php if(isset($fullname)){echo $fullname;}?>"><br>
    <label for="">Your Address </label><br>
    <input type="text" name="address"value="<?php if(isset($address)){echo $address;}?>"> <br>
    <label for="">Your Email  </label><br>
    <input type="email" name="email"value="<?php if(isset($email)){echo $email;}?>"><br>
    <input type="submit" name="submit" value="UPDATE">
    
    </form>
</body>
</html>