<?php
    include ('config.php');

    $viewsql = "SELECT* FROM curd";

    $finalviewsql = mysqli_query($conn,$viewsql);
    ?>
    <html>
    <head>
</head>
    <body>
        <table border=1 allign=center>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>EMAIL</th>
                <th>Action</th>
            </tr>
            <?php
                if($finalviewsql == TRUE){
                    while($data = mysqli_fetch_assoc($finalviewsql)){
                        $id = $data['ID'];
                        $fullname = $data['fullname'];
                        $address = $data['address'];
                        $email = $data['email'];
                    ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $fullname;?></td>
                        <td><?php echo $address;?></td>
                        <td><?php echo $email;?></td>
                        <td> <a href="delete.php?id=<?php echo $id?>">Delete</a></td>
                        <td> <a href="edit.php?edit_id=<?php echo $id?>">edit</a></td>
                    </tr>

            <?php 
                    }
                }
            ?>
        </table><br>
     <button style="font-size:20px "><a href="index.php">Back</a></button>
            </head>
            </body>
            </html>

