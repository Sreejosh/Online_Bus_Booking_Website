<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Password</title>
    <link rel="icon" href="Bus name.jpg">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(177, 232, 254);
            background-image: url("images/bus wallpaper.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            overflow: hidden;
        

        }
        input[type="text"],
        input[type="password"]{
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }
        input[type="submit"]{
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            border:none;
            background-color: green;
            color: white;
        }

        div{
            margin: 50px auto;
            padding: 20px;
            border: white ridge 2px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px;
            background-color: rgb(181, 181, 181);
            width: 500px;

        }
        div:hover{
            background-color: white;
        }
        form{
            display: grid;
        }
        h1{
            text-align: center;
            font-size: 2rem;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <div>
        <form onsubmit="validate()" method="post" action="resetpassword.php">
            <h1>Reset Password</h1>
            <Label>User-Id: </Label>
            <input type="text" name="userid" id="userid" required>
            <Label>Enter Old Password </Label>
            <input type="password" name="password" id="password" required>
            <Label>Confirm Password </Label>
            <input type="password" name="Cpass" id="Cpass" required>
            <input type="submit" value="Reset Password" onclick="return message()">
        </form>

    </div>
    <script>
        function validate(){
        var userid = document.getElementById("userid");
        var PS = document.getElementById("password");
        var ConfirmPS = document.getElementById("Cpass");
        const user_regx = /^[a-zA-Z0-9_]{8,16}$/;
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
        
        if (!passwordRegex.test(PS.value)) {
          alert("Password must be atleast 8 charecters and must include alphabetical characters")
          return false;
        }
        
        if (!user_regx.test(user.value)) {
          alert("E-mail should be valid")
          return false;
        }
        
    }
    function message(){
        alert("Your password is updated!");
    }
      </script>
    
    

    
</body>
</html>