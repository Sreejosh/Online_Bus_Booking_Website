<?php
        
    include('Database.php');
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phno'])&& isset($_POST['name']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phno = $_POST['phno'];
        

        $sql = "INSERT INTO users (userid,name, email, password,phoneNumber) VALUES ('$username','$name', '$email', '$password', '$phno')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: SignInPage.php?message=registration_success');
        } else {
            header('Location: createaccount.php?error=registration_failed');
        }
        mysqli_close($conn);
    }   
?>