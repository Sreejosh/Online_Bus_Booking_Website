<?php

   
    include('Database.php');
    echo "Hello";

    if(isset($_POST['name'])&&isset($_POST['cnumber'])&& isset($_POST['mobile'])&& isset($_POST['source'])&& isset($_POST['destination'])&& isset($_POST['bustype'])){
        $userid = $_POST['name'];
        $cnumber = $_POST['cnumber'];
        $mobile = $_POST['mobile'];
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $bustype = $_POST['bustype'];


        $sql = "INSERT INTO bookingdata (userid,cardnumber,mobilenumber,source,destination,bustype) VALUES('$userid','$cnumber','$mobile','$source','$destination','$bustype')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: confirmpage.php?message=registration_success");
        }
        else{
            header("Location: buspayment.php?error=registration_failed");
        }
        mysqli_close($conn);
    }
   
    
 ?>

 