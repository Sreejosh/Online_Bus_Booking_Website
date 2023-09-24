
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile</title>
    <link rel="icon" href="Bus name.jpg">
    <style>
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
        .navbar {
    overflow: hidden;
    color: white;
    background-color: black;
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
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    font-size: 25px;
    margin-right: 0px;
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
        .rightnav{
        margin-right: 60px;
        float: right;
    }
    .profile{
        font-family: 'Times New Roman', Times, serif;
        color : white;    
        margin-left: 50px;
        margin-top: 10px;
    }
    .profile img {
        width: 300px;
        margin-left: 0rem;
        height: 300px;
        float: left;
        border-radius: 50%;
    }
    body{
        background-image: url("https://wallpapercave.com/wp/wp2704890.jpg");
        background-size: cover; 
        background-repeat: no-repeat;
        background-position: top;
        column-gap: 0;
    }
    .profiledata {
        font-size: 30px;
        margin-right: 50rem;
        float: right;
        
    }
    .mybooking{
      font-family: 'Times New Roman', Times, serif;
        color : white;    
        margin-left: 50px;
        margin-top: 100px;
        float: left;

    }
    .mybooking button{
      cursor: pointer;
      font-size: 2rem;
      background-color: white;
      color: black;
      border-radius: 10px;
      float: left;
    }
    .profile h1{
      font-size: 2rem;
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
   float: left;
  }
  .about p ,li{
    font-size: 20px;
    font-family:'Times New Roman', Times, serif ;
    color: white;
  }
  .about h1{
    font-size: 40px;
    font-family:'Times New Roman', Times, serif ;
    color: white;
  }
  .social h2{
    font-size: 2rem;
    color: white;
    text-align: center;
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
            <button class="dropbtn"><?php
            echo $_SESSION['name'];
            ?>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="Mainprofile.php">Home Page</a>
              <a href="MainPage.php">Logout</a>
            </div>
          </div> 
          </div>
        </div>
        <section class="profile">
            <h1>Dashboard</h1>
            <img src="https://i.pinimg.com/originals/d3/7b/02/d37b020e87945ad7f245e48df752ed03.jpg" alt="Profile">
            <div class="profiledata">
            <h3>Welcome back <?php
            echo $_SESSION['name'];
            ?></h3>
            <p>Name: <?php
            echo $_SESSION['name'];
            ?> </p>
            <p>Email: <?php
            echo $_SESSION['email'];
            ?> </p>
            <p>Mobile Number: <?php
            echo $_SESSION['phoneNumber'];
            ?> </p> <br>
            </div>
  </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        <section class="mybooking">
          <form  method="post" action="myprofile.php">
          <button name="booking">My Bookings</button>
          <div class="searchprint" name="searchprint">

          </form>
          
        <style>
   table{
      width: 100%;
      height: 70px;
      border: 1px solid;
      padding: 20px;
    }
    th{
      text-align: center;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
    }
    td{
      text-align: center;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
    }
   
    .book a{
      background-color: lightcoral;
	
	color: white;
	border-radius: 3px;
  font-size: 17px;
	cursor: pointer;
  text-decoration:none;
}

state{
  color: red;
  text-align: center;
  font-size: 1rem;
  margin-top: 10px;
}

</style>
<?php

include('Database.php');
// Check if the "SEARCH" button is clicked
if (isset($_POST['booking'])) {
  
$current_user_id = $_SESSION['name'];
$sql = "SELECT * FROM bookingdata
INNER JOIN users ON bookingdata.userid = users.name
INNER JOIN bustable ON bookingdata.source = bustable.source AND bookingdata.destination = bustable.destination AND bookingdata.bustype = bustable.bustype
WHERE bookingdata.userid = '$current_user_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Display the data in a table format

echo   "<table border='5px solid blue' width=50px height=50px >
<tr>
<th>User ID</th>
<th>Card Number </th>
<th>SOURCE</th>
<th>DESTINATION</th>
<th>BUS TYPE</th>
<th>BUS NUMBER</th>
<th>PRICE</th>


</tr>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['userid']."</td>
<td>".$row['cardnumber']."</td>
<td>".$row['source']."</td>
<td>".$row['destination']."</td>
<td>".$row['bustype']."</td>
<td>".$row['busnumber']."</td>
<td>".$row['price']."</td>
</tr>";
}
echo "</table>";
} else {
echo "<state>You haven't booked anything !</state>";
}
}
mysqli_close($conn);
?>
</div>

        
        </section>
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
        <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>br><br><br><br><br><br><br>
        <section class="social">
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

        </section>
        
</body>
</html>
