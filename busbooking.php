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
    font-size: 2rem;
    font-family: 'Times New Roman', Times, serif;
    color: black;
    margin: 0;

}
.search :nth-child(3){
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

.search :nth-child(6) button{
    color: white;
    background-color: rgb(300, 0, 0);
    padding: 0rem;
    border-radius: 5px;
    border: ridge;
    column-gap: 0;
    height: 60px;
    width: 20rem;
    cursor:pointer ;
    margin-bottom: 0px;
    font-size: 18px;
}

.search{
    background-color: white;
    padding: 10rem;
    text-align: center;
    background-image: url("images/New\ bus.jpg");
    background-size: cover; 
    background-repeat: no-repeat;
    background-position: top;
    column-gap: 0;
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
    display: inline-block;
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
    .book{
      color: white;
      background-color: red;
      padding: 10px;
      border-radius: 10px;
    }
        </style>
    </head>
    <body>
        <div class="navbar">
                <div class="logo">
                    <div class="inlo">charan
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
              <a href="myprofile.php">My Account</a>
              <a href="MainPage.php">Logout</a>
            </div>
          </div> 
          <a href="#rides">Get Free Rides</a>
          <div class="dropdown">
            <button class="dropbtn">My Bookings 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Print Booking</a>
              <a href="#">Cancel Booking</a>
            </div>
          </div> 
          <a href="#offers">Offers</a>
        </div>
        </div>
        <div class="search">
        <p style="font-size: 3rem; color:#FFFFFF"> Book Your Bus Tickets</p>
           <br>
            <input type="text" name="source" id="#source" placeholder="SOURCE">
            <input type="text" id="#dest" placeholder="DESTINATION" >
            <input type="date" name="dateofjourney" id="#dot" placeholder="Date of Journey">
            <a href="busbooking.php"><button>MODIFY SEARCH</button></a>
        </div>
        <table>
          <thead>
          <tr>
          <th>S.No</th>
          <th>SOURCE</th>
          <th>DESTINATION</th>
          <th>DATE & TIME</th>
          <th>TOTAL SEATS</th>
          <th>AVAILABLE SEATS</th>
          <th> </th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <td>1</td>
          <!-- <td><?php echo $input_source; ?></td> -->
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><button class="book">BOOK</button></td>
  

          </tbody>
        </table>
        
        <div class="offers" id="offers">
            <div class="offer-header">
              <header class="header">
              <p>CharanBus Offers</p> 
              <!-- <a href="#alloffers" >All Offers</a> -->
              <a href="#busoffers">Bus Offers</a>
              <a href="#viewall">View All Offers</a>
              </header>
            </div>
            <div class="alloffers">
            <div class="offer">
                <img src="https://images.railyatri.in/ry_images_prod/4-1569907865.jpg" alt="Bus-offer-1" style="width : 100%">
                <div class="middle">
                  <div class="text"><button class="button">Claim Offer</button></div>
                </div>
              </div>
            <div class="offer">
              <img src="https://cdn.grabon.in/gograbon/images/web-images/uploads/1591861321093/bus-coupons.jpg" alt="Bus-offer-2" style="width : 100%">
                <div class="middle">
                  <div class="text"><button class="button">Claim Offer</button></div>
                </div>
              </div>
            <div class="offer">
              <img src="https://images.railyatri.in/ry_images_prod/SafetyBanner-1604043106.jpg" alt="Bus-offer-3" style="width : 100%">
                <div class="middle">
                  <div class="text"><button class="button">Claim Offer</button></div>
                </div>
              </div>
              <div class="offer">
                <img src="https://images.railyatri.in/ry_images_prod/SafetyBanner-1604043106.jpg" alt="Bus-offer-3" style="width : 100%">
                  <div class="middle">
                    <div class="text"><button class="button">Claim Offer</button></div>
                  </div>
                </div>
            </div>
        </div>
       
       
    </body>
</html>

<!-- <table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table> -->


<?php
  // // Retrieve row details from database
  // $source = $_POST['source'];
  // $destination = $_POST['destination'];

  // $sql = "SELECT * FROM bustable WHERE source = $source AND destination = $destination";
  // $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_assoc($result);

  // // Return row details in JSON format
  // header('Content-Type: application/json');
  // echo json_encode($row);
?>
