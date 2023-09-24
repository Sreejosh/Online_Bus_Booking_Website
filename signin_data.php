<?php
    session_start();   
    include('Database.php');
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE userid='$username' AND password='$password' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phoneNumber'] = $row['phoneNumber'];
            header('Location: Mainprofile.php');
        } else {
            header('Location: SignInPage.php?error=invalid_credentials');
        }

        mysqli_close($conn);
    }    
    ?>