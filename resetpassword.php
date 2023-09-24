<?php
        
    include('Database.php');
    if (isset($_POST['userid']) && isset($_POST['password']) && isset($_POST['Cpass'])) {
        $userid = $_POST['userid'];
        $oldpassword = $_POST['password'];
        $confirmpass = $_POST['Cpass'];
        

        $sql = "UPDATE users SET password='$confirmpass' WHERE userid='$userid' AND password='$oldpassword'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: SignInPage.php?message=passwordsaved_success');
        } else {
            header('Location: ForgotPass.php?error=passwordsaved_failed');
        }
        mysqli_close($conn);
    }   
?>