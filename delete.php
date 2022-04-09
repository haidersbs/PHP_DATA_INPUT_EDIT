<?php
    include ('config.php');
    $dlt = $_REQUEST['id'];


    $dltsql = "DELETE FROM curd WHERE ID = $dlt";

    $finaldltsql = mysqli_query($conn, $dltsql);

    if($finaldltsql == TRUE){
        echo "Data Delete";
        header("Location: view.php?delete");

    }else{
        echo "Data Not Delete";
    }
?>



