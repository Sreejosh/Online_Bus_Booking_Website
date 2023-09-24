<?php
session_start();
?>
<html>
    <head>
        <title>
            Charan Bus Services
        </title>
        
        <link rel="icon" href="Bus name.jpg">
        <style>
          
body {
    margin: 0;
    position:absolute;
  
}
/* .topnav{
    background-color: white(200, 198, 198);
    overflow: hidden;
    text-align: center;
}
.topnav :nth-child(1){
    float: left;

} */
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
/* .search :nth-child(3){
    padding: 0.5rem;
    border-radius: 5px;
    border: ridge;
    height: 60px;
    width: 20rem;

}
.search :nth-child(4){
    padding: 0.5rem;
    border-radius: 5px;
    border: ridge;
    height: 60px;
    width: 20rem;
    

}
.search :nth-child(5){
    padding: 0.5rem;
    border-radius: 5px;
    border: ridge;
    height: 60px;
    width: 20rem;

}  

.search:nth-child(6) button {
  color: white;
    background-color: rgb(220, 50, 50);
    padding: 0.5rem;
    border-radius: 5px;
    border: ridge;
    column-gap: 0;
    height: 60px;
    width: 20rem;
    cursor:pointer ;
} */

.offer1{
    /* background-color: red; */
    text-align: center;
    align-items: center;
    padding: 20px;
}
.offer1 img{
    width: 50%;
    height: 50%;
    text-align: center;
    align-items: center;
    border-radius: 20px;
    margin-top: 20px;
   

    
}
.search {
    /* background-color: white; */
    padding: 10rem;
    text-align: center;
    /* background-color: white; */
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

  .text {
    color: white;
    font-size: 40px;
    padding: 16px 32px;
    cursor:pointer;
  }
  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    
  }
.image {
    opacity: 10;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }
  .offer:hover .image {
    opacity: 1;
  }
  
  .offer:hover .middle {
    opacity: 1;
  }
  .offer {
    position: relative;
    width: 50%;
    display: grid;
    overflow: auto;
  }
  .offers{
    display: grid;
  }
  /* .offers img{
    display: inline;
    column-gap: 2rem;
  } */


  .button {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  .specifications{
  text-align: center;
  }
  .specifications img{
    border-radius: 20px;
    border-style: white 2px ridge;

  }
  .specifications:nth-child(1) img{
    width: 100px;
    height: 100px;
    
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
    color: whitesmoke;
  }
  .about h1{
    font-size: 40px;
    font-family:'Times New Roman', Times, serif ;
    color: white;
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
  
  .offer {
	  flex: 30%;
	  padding: 5px;
	}
	.offer img {
	  width: 100%;
	}
	.alloffers {
	   display: flex;
	}
    .rightnav{
        margin-right: 65px;
    }
    .search h1{
      font-size: 2rem;
    }
    #my-video {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  z-index: -1;
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
              <a href="myprofile.php">My Account</a>
              <a href="MainPage.php">Logout</a>
            </div>
          </div> 
        </div>
        </div>

        <section class="video">
        <p style="font-size: 3rem; color:#FFFFFF ; text-align:center;"> CLAIM OFFER</p>

        <video id="my-video" autoplay muted loop>
            <source src="images/video2.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </section>

        <section class="offer1">
            <img src="https://images.railyatri.in/ry_images_prod/SafetyBanner-1604043106.jpg" alt="OFFER 3">
        </section>
      
        <div class="search">
        <p style="font-size: 3rem; color:#FFFFFF"> Book Your Bus Tickets</p>
           <br>
           <form class="form-inline" method="post" action="Mainprofile.php">
            <input type="text" id="#source" list="source"  name="source" placeholder="SOURCE">
            <datalist id="source">
              <option value="Hyderabad">
              <option value="Vijayawada">
              <option value="Vishakapatnam">
              <option value="Mumbai">
              <option value="Banglore">
              <option value="Amaravati">
              <option value="Amalapuram">
              <option value="Srikakulam">
              <option value="Chitoor">
              <option value="Guntur">
</datalist> 
            <input type="text" id="#dest" name="destination" list="destination" placeholder="DESTINATION">
            <datalist id="destination">
            <option value="Hyderabad">
              <option value="Vijayawada">
              <option value="Vishakapatnam">
              <option value="Mumbai">
              <option value="Banglore">
              <option value="Amaravati">
              <option value="Amalapuram">
              <option value="Srikakulam">
              <option value="Chitoor">
              <option value="Guntur">
</datalist> 
            <input type="date" name="dateofjourney" id="#dot" placeholder="Date of Journey">    
            <a href="Mainprofile.php"><input type="submit" name="search" id="#search" value="SEARCH" ></a>
            </form>
<!--            
<script>
          // Get the value of the input field
          var source = document.getElementById("#source").value;

          // Save the value to a cookie
          document.cookie = "sourceValue=" + source;
</script> -->
        

        </div>
        <div class="searchprint" name="searchprint">
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
    tr:hover{
      background-color: lavenderblush;
    }
    .book a{
      background-color: lightcoral;
	
	color: white;
	border-radius: 3px;
  font-size: 17px;
	cursor: pointer;
  text-decoration:none;
}
/* button:hover{
letter-spacing: 0.25rem;
/* background: var(--clr); */
/* box-shadow: 0 0 35px darkviolet; */
/* button:before{
  content:'';
  position:absolute;
 inset:2px;
background: #27282c;
} */
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
if (isset($_POST['search'])) {
// Get the firstname input from the user
$source = $_POST['source'];
$destination = $_POST['destination'];
// Retrieve data from the "Employee" table based on the firstname inputS
$sql = "SELECT * FROM bustable WHERE source='$source' AND destination = '$destination'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Display the data in a table format

echo   "<table border='5px solid blue' width=50px height=50px >
<tr>
<th>Bus ID</th>
<th>SOURCE</th>
<th>DESTINATION</th>
<th>TOTAL SEATS</th>
<th>AVAILABLE SEATS</th>
<th>BUS NUMBER</th>
<th> BUS TYPE </th>
<th> DEPARTURE TIME </th>
<th> PICKUP POINT </th>
<th> DROP POINT </th>
<th>Book Bus </th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['busid']."</td>
<td>".$row['source']."</td>
<td>".$row['destination']."</td>
<td>".$row['total_seats']."</td>
<td>".$row['available_seats']."</td>
<td>".$row['busnumber']."</td>
<td>".$row['bustype']."</td>
<td>".$row['departure_time']."</td>
<td>".$row['pickup_point']."</td>
<td>".$row['drop_point']."</td>
<td class='book'><a href='buspayment.php'>BOOK</a></td>
</tr>";
}
echo "</table>";
} else {
echo "<state>No Buses Available !</state>";
}
}
mysqli_close($conn);
?>
</div>

        <div class="specifications">
          <!-- <img src="images/specifications.jpg" alt="Availabilities in our website"> -->
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


    </body>
</html>