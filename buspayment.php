<?php
session_start();
$fs = fopen("source.txt","r");
$fd = fopen("destination.txt","r");
$ft = fopen("bustype.txt","r");
$s = fread($fs,filesize("source.txt"));
$d = fread($fd,filesize("destination.txt"));
$t = fread($ft,filesize("bustype.txt"));
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Charan Bus Services
        </title>
        
        <link rel="icon" href="Bus name.jpg">
        <style>
          
body {
    margin: 0;
    position:absolute;
  
}
.dropdown {
    float: right;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    font-size: 25px;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  .specifications{
  text-align: center;
  }
  .specifications img{
    border-radius: 20px;
    border-style: white 2px ridge;

  }
  .about{
    border-radius: 20px;
    border-style: ridge;
   margin-top: 1%;
   margin-left: 3%;
   margin-bottom: 3%;
   margin-right: 3%;
   padding: 3rem;
   box-shadow: 50px black;
  }
  .about p ,li{
    font-size: 20px;
    font-family:'Times New Roman', Times, serif ;
    color: rgb(43, 42, 42);
  }
  .about h1{
    font-size: 40px;
    font-family:'Times New Roman', Times, serif ;
    color: black;
  }
  .footer{
    background-color: rgb(32, 31, 31);
    color: white;
    padding: 2rem;
    margin-top: 1rem;
    text-align: center;
  }
  .copyright{
    float: right;
    text-align: center;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
  }

  .connect-container{
    text-align: center;
  }
  .connect-container img{
    text-align: center;
    border-radius: 50%;
    display: inline;
    width: 80px;
    height: 80px;
  
  }

  .header a {
    float: right;
  }
  .header p{
    float: left;
    font-family: 'Times New Roman', Times, serif;
    color: black;
    font-size:24px;
  }


.navbar .inlo{
    color: rgb(255, 0, 0);
    float: left;
}
.navbar .logo{
    color: rgb(116, 3, 3);
    font-family: sans-serif;
    font-size: 2rem;
    padding-left: 3rem;
    align-items: center;
    font-weight: bolder;
    float: left;

}
.navbar img{
    border-radius: 50%;
    width: 20;
    height: 20;
}
.offers{
    box-sizing: border-box;
    overflow: hidden;
}
.offer-header{
    float: right;

}

.offer-images{
    float: left;
    width: 50%;
    padding: 8px;
    height: auto;
}
.offers-body{
    display: grid;
    grid-template-columns: auto auto auto;
    clear: both;
    content: " "; 
} 
.search :nth-child(1){
    padding: 0rem;
    font-size: 1rem;
    font-family: 'Times New Roman', Times, serif;
    color: black;
    margin: 0;

}


.search {
    background-color: white;
    padding: 10rem;
    text-align: center;
    background-image: url("images/New\ bus.jpg");
    background-size: cover; 
    background-repeat: no-repeat;
    background-position: top;
    column-gap: 0;
}
.form-inline {
  display: inline;
  margin-right: 10px;
}
.form-inline  input{
  padding: 0.5rem;
    border-radius: 5px;
    border: ridge;
    height: 60px;
    width: 20rem;
}
.search p{
  font-size: 2rem;
}
.offers{
    border: 2px lightgrey ridge;
    border-radius: 5px;
    padding: 30px 30px ;
    margin: 50px 300px 50px 300px;
    box-shadow: 4px 4px lightgrey;
    overflow: hidden;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    background-color: white(200, 198, 198);
    text-align: center;
   
}
/* .offer-header:nth-child(1){
    float: left;
    
} */
about{
    border-radius: 20px;
    border-style: ridge;
   margin-top: 1%;
   margin-left: 3%;
   margin-bottom: 3%;
   margin-right: 3%;
   padding: 3rem;
   box-shadow: 50px black;
  }
  .about p ,li{
    font-size: 20px;
    font-family:'Times New Roman', Times, serif ;
    color: rgb(43, 42, 42);
  }
  .about h1{
    font-size: 40px;
    font-family:'Times New Roman', Times, serif ;
    color: black;
  }

.offer-header a{
    text-decoration: none;
    color: rgb(105, 100, 100);
    text-align: center;
    font-size: 24px;
    padding: 15px 17px;
    text-decoration: none;
    float: right;
  
   
}
.offers-body{
    display: grid;
}
.offer{
  display: table;
  content: " ";

}

.navbar {
    overflow: hidden;
    background-color: white;
    font-family: 'Times New Roman', Times, serif;
   
  }
  
  .navbar a {
    float: right;
    font-size: 16px;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
  }
  
  .dropdown {
    float: right;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin-right: 80px;
    font-size: 25px;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

input[type="text"],
input[type="option"]{
	padding: 20px;
    width: 50%;
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
    width: 50%;
	border-radius: 5px;
	cursor: pointer;
  transition: 0.5s;
}

  form {
	display: grid;
 padding: 10px;
  border-radius: 2px;
  align-items: center;
  width: 50%;

}
.pay h1{
    text-align: center;

}
.pay{
    background: url("https://st.redbus.in/Images/India/ContextualLogin/generic_banner_Ind.png");
    color: white;
    align-items: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.pay form {
    margin-left: 1000px;
    margin-bottom: 100px;
    padding-bottom: 50px;
}
.pay h3{
  margin-left: 1020px;

}
.option{
    padding: 10px;
    width: 50%;
	margin-bottom: 20px;
	border-radius: 5px;
	border: none;
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);

}
.innerpay:nth-child(1){
    width: 25%;

}
.innerpay:nth-child(2),innerpay:nth-child(7){
    width: 12.5%;
}
.innerpay{
    display: inline;
}


  

 

    
        </style>
    </head>
    <body>
        <div class="navbar">
                <div class="logo">
                    <div class="inlo">Online
                    </div>  bus 
                </div>
                <div class="rightnav">
            <div class="dropdown">
            <button class="dropbtn"><?php echo $_SESSION['name'] ?>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="Mainprofile.php">Home Page</a>
              <a href="myprofile.php">My Account</a>
              <a href="MainPage.php">Logout</a>
            </div>
          </div> 
        </div>
        </div>
        <section class="pay">
            <h1>BOOK YOUR TICKET</h1>
            <h3>Enter your payment details</h3>

            <form onsubmit="validate()"   method="post" action="paydata.php">
            <label>Enter your full name : </label>
            <input type="text" name="name" id="name" required><br>
            <label>Enter your card number : </label>
            <input type="text" name="cnumber" id="cnumber" required><br>
            <label>Enter your mobile number : </label>
            <input type="text" name="mobile" id="mobile" required ><br>
            <label>Enter your source : </label>
            <input type="text" name="source" id="source" value="<?php echo $s; ?>" required><br>
                <label>Enter your destination : </label> <br>
                <input type="text" name="destination" id="destination" value="<?php echo $d; ?>"   required><br>
                <label>Enter your bustype : </label> <br>
                <input type="text" name="bustype" id="bustype" value="<?php echo $t; ?>"   required><br>
                <!-- <select name="state " id="state" class="option" required>
                    <option value="state">State</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Andhra">Andhra</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Goa">Goa</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Karnataka">Karnataka</option>
                </select> -->
            
            <input type="submit"  value="SUBMIT">
        </form>
        </section>
        

        <div class="specifications">
          <img src="images/specifications.jpg" alt="Availabilities in our website">
          <img src="images/numbers.jpg" alt="bumbers">
        </div>
           <div class="about">
          <div class="bestway">
            <h1>The Best Way to Book Bus Tickets</h1>
            <p>Do you want to know the best way to book tickets online securely and how to book tickets in advance? ChOnlineBus.com is the best online platform for bus booking, train tickets booking and hotels booking. You can check the amenities provided, compare booking fares, check bus timings in the searched route, other facilities and more with us. You can find an affordable and cost-effective online travel bookings facility at OnlineBus.
              With OnlineBus, online bus ticket booking is now very easy. You simply need to fill in the details of your journey in our search bar (departure city, destination city and the date of journey) click on the search button to get all the bus operators available for booking tickets online. Then, select the bus that best suits your travel needs and securely complete your booking online on OnlineBus.com.
              We would recommend that you book your tickets at least 2 - 3 days in advance so that you can reserve bus or train seats as per your preference and get the best-discounted price on your booking.</p> <br>
            <h1>Online Bus Ticket Booking at low price</h1>
            <p>
              With OnlineBus, travellers can book bus tickets online at the lowest ticket fares. Travellers prefer to choose their favorite bus to reserve online bus booking. You’re at the right place to find a wide range of Private buses and SRTC (State Road Transport Corporation) buses are available for bus booking online on OnlineBus.
            </p>
            <p>You will find below various types of buses available to book bus tickets on AbhiBus at lowest fare bus ticket booking:
              <br>
                <ul>
                  <li>AC Buses </li>
                  <li>  Non AC Buses </li>
                  <li>   Ordinary Buses </li>
                  <li> Mini Buses </li>
                  <li>Super Luxury (Non-AC Seater)   </li>
                  <li>Volvo AC Buses   </li>
                  <li> Sleeper AC Buses  </li>
                  <li> Sleeper Buses  </li>
                  <li> Deluxe Buses   </li>
                  <li>Sleeper Cum Seater AC   </li>
                  <li>  Double Decker Buses  </li>
                  <li> Mercedes buses   </li>
                  <li>  Non-Mercedes buses </li>
                  <li>Express Buses   </li>
                </ul>
            </p>
            <br>
            <h1>Online Bus Booking Services</h1>
            <p>OnlineBus is India’s leading online bus ticket booking service provider. Check out our great offers and amazing discount coupons to book bus tickets at the lowest price with us. You can check the bus schedules, compare prices, and find all the information you need to plan an ideal and comfortable bus or train journey.</p>
             <p>OnlineBus has simplified the online bus booking process for your travel planning. You can save time and money by using CharanCash. Book now!!!
              
              Check all your bus or train route options and use the advanced smart filters to accommodate a reliable and comfortable journey as per your scheduled travel plan needs.</p></p> 

              <br>
              <h1>Benefits of Booking Bus Tickets Online</h1>
              <p>In this day and age of technology, offline modes of bus ticket booking are no more a preference. Online ticket booking is easy, fast and hassle-free. AbhiBus ticks off all three with our easy app and website navigation.</p>
              <p>Booking bus tickets online with AbhiBus has solved many problems that people face while booking their tickets at offline counters or travel agents. Download the OnlineBus App to see the benefits of making a bus ticket booking online.</p>
              <p>Here's listing all the benefits of booking bus tickets online on OnlineBus</p>
              <br>
              <ul>
                <li>Avoid standing in long queues at offline bus ticket counters.</li>
                <li>No more hassle of approaching travel agents.</li>
                <li>Choose from multiple bus services. </li>
                <li>Book both Private and SRTC bus tickets online. </li>
                <li> Check bus ticket availability online.</li>
                <li> Get bus timings, ticket price, boarding & dropping point details online. </li>
                <li>Access to payment partner discounts and cashback offers. </li>
                <li>Free cancellation feature.. </li>
                <li>24/7 customer support. </li>
              </ul>
              <br>
              <h1>How to Book Bus Tickets Online on OnlineBus</h1>
              <p>In this day and age of technology, offline modes of bus ticket booking are no more a preference. Online ticket booking is easy, fast and hassle-free. OnlineBus ticks off all three with our easy app and website navigation.
                Booking bus tickets online with AbhiBus has solved many problems that people face while booking their tickets at offline counters or travel agents. Download the OnlineBus App to see the benefits of making a bus ticket booking online.</p>
                <p>Here's listing all the benefits of booking bus tickets online on OnlineBus</p>
                <ul>
                  <li>Avoid standing in long queues at offline bus ticket counters.</li>
                  <li>No more hassle of approaching travel agents.</li>
                  <li> Choose from multiple bus services.</li>
                  <li>Book both 
          </div>
          
        </div>
        <h2 style="text-align: center;">We're Social! Connect with us on</h2>
        <div class="connect-container">    
          <a href="#fb"><img src="images/fb1.jpg" alt="facebook"></a> 
          <a href="https://instagram.com/sreejosh________?igshid=ZDdkNTZiNTM="><img src="images/insta6.jpg" alt="instagram"></a> 
          <a href="#tw"><img src="images/twitter.png" alt="instagram"></a> 
        </div>
        <footer class="footer">
          <div class="copyright">
            Copyright &copy Web Technoligies Ltd. All Right Reserved.</div>
        </footer>

        <script>
      function validate(){
      var cnumber = document.getElementById("cnumber");
      var mobile = document.getElementById("mobile");
      var source = document.getElementById("source");
      var destination = document.getElementById("destination");
      var bustype = document.getElementById("bustype");
      const cnumber_regx = /^[0-9]{8}$/;
      const source_regx = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/; 
      const destination_regx = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;
      const bustype_regx =  /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;
      const mobileRegex = /^(?:\+?1[-.\s]?)?\(?([0-9]{3})\)?[-.\s]?([0-9]{3})[-.\s]?([0-9]{4})$/;
      if(!cnumber_regx.test(cnumber.value)){
        alert("Enter a valid Card Number")
        return  false;
      }
      if(!mobileRegex.test(mobile.value)){
        alert("Enter a valid mobile number")
        return  false;
      }
      
      if (!source_regx.test(street.value)) {
        alert("Enter valid address")
        return false;
      }
      if (!destination_regx.test(city.value)){
        alert("Enter valid city")
        return false;
      }
      if (!bustype_regx.test(state.value)) {
        alert("Enter valid state")
        return false;
      }
     
      }
  
    </script>
    </body>
</html>