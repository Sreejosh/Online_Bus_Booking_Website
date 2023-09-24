
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="icon" href="Bus name.jpg">
    <style>
  *{
    margin: 0;
    box-sizing: border-box;
    padding: 0;
  }
  div{
    margin: 50px auto;
	padding: 50px;
	background-color: rgba(255, 255, 255, 0.297);
	border-radius: 5px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	width: 400px;

  margin-left:100px ;
  }
  /* div:hover{
    background-color: white;
  } */
  body{
    background-color: rgb(0, 176, 245);
    background-image: url("images/bus wallpaper.jpg");
    background-repeat:no-repeat;
    background-size: cover;
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
input[type="password"], input[type="email"]{
	padding: 10px;
	margin-bottom: 20px;
	border-radius: 5px;
	border: none;
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

input[type="submit"] {
	background:linear-gradient(45deg,#00ccff,#0e1538,#0e1538,#d400d4);
	color: white;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
  transition: 0.5s;
}
input[type="submit"]:hover{
letter-spacing: 0.25rem;
/* background: var(--clr); */
box-shadow: 0 0 35px darkviolet;

}
input[type="submit"]:before{
  content:'';
  position:absolute;
 inset:2px;
background: #27282c;
}
  form {
	display: grid;
  background:transparent;
}
h1{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-size: 2rem;
    margin-bottom: 20px;
}


    </style>
</head>
<body>
    <div>
        <h1>Create Account</h1>
        <form onsubmit="validate()"  class="create" method="post" action="register_data.php">
            <Label>UserID: </Label>
            <input type="text" name="username" id="username" required><br>
            <Label>Name: </Label>
            <input type="text" name="name" id="name" required><br>
            <Label>Mobile Number: </Label>
            <input type="text" name="phno" id="phno" required><br>
            <Label>Email-Id : </Label>
            <input type="text" id="email" name="email" required><br>
            <Label>Create Password : </Label>
            <input type="text" name="password" id="password" required><br>
            <Label>Confirm Password : </Label>
            <input type="text" name="Cpass" id="Cpass"><br>
            <input type="submit" value="Create Account" onclick="return mess()">
        </form>

    </div>
  
    <script>
      function validate(){
      var UN = document.getElementById("username");
      var name = document.getElementById("name");
      var mobilenu = document.getElementById("phno");
      var email = document.getElementById("email");
      var PS = document.getElementById("password");
      var ConfirmPS = document.getElementById("Cpass");
      const name_regx = /^[a-zA-Z]+(([\',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
      const un_regx = /^[a-zA-Z0-9_]{8,16}$/; 
      const email_regx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const phone_regx =  /^(?:\+?1[-.\s]?)?\(?([0-9]{3})\)?[-.\s]?([0-9]{3})[-.\s]?([0-9]{4})$/;
      const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
      if(!un_regx.test(UN.value)){
        alert("Username must be atleast 8 charecters and must include alphabetical characters")
        return  false;
      }
      if(!name_regx.test(name.value)){
        alert("Enter a valid name")
        return  false;
      }
      
      if (!passwordRegex.test(PS.value)) {
        alert("Password must be atleast 8 charecters and must include alphabetical characters")
        return false;
      }
      if (!phone_regx.test(mobilenu.value)){
        alert("Mobile number should be valid")
        return false;
      }
      if (!email_regx.test(email.value)) {
        alert("E-mail should be valid")
        return false;
      }
      if(PS.value != ConfirmPS.value){
        alert("Confirm password must be same as Create password")
        return false;
      }
      }
      function mess(){
			alert("Your details saved successfully.You are ready to log in");
		}
    </script>
   
    
</body>
</html>

