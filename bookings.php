<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta >
    <title>create account</title>
    <style>
        body{
            background-image: linear-gradient(135deg,#37eedf  ,#0d72f5  );
        }
        input:focus {

            font-size: 150%;
        }
        input:hover {
            background-color: red;

        }
        button  {
            background-color: yellow;
            font-size: 150%;
            border-radius: 10px;
        }
         
        span{
            color: rgb(133, 16, 16);

        }

        /* glass filter */
        .container {
             
            /* background-image: linear-gradient(135deg,#f00e6c  ,#0df581  ); */
            width: 300px;
             
            border-radius: 25px;
            padding: 90px;
            margin-top: 20px;
            margin-left: 400px; 
            box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
            border-radius: 15px;
            background-color: rgba(255, 255, 255, .15);
            
            backdrop-filter: blur(5px);
          }
          .container1 {
             
             /* background-image: linear-gradient(135deg,#f00e6c  ,#0df581  ); */
             width: 300px;
             margin-top: 10px; 
             border-radius: 25px;
             padding: 5px;
             margin-left: 400px; 
             box-shadow: 0 0 1rem 0 rgba(107, 19, 19, 0.2); 
             border-radius: 15px;
              
             
             backdrop-filter: blur(5px);
           }
          img{
            margin-top:10px;
            width: 40px;
            height: 30px;
          }


    </style>
</head>
<body>
    <div class="container1   "> 
        <h2  style="color: rgb(12, 12, 26);" >PAYMENT</h2>
    </div>
    
    <div class="container">
        <form id="form"   action="bookings1.php" method="post">
           <label  >firstname : <input type="text" name="uname1" id="uname1" required ></label>  <br> <br>
           <label  >lastname : <input type="text" name="uname2" id="uname2"  required></label>  <br> <br>
           <label  >email : <br><input type="text" name="email" id="mail" <?php
            if(isset($_COOKIE['cemail'])){echo $_COOKIE['cemail']; } ?> required></label> <br> <br> 
           <label  >Destination : <input type="text" name="destination" id="exampleFormControlSelect1" required ></label>  <br> <br>
            <!--    <select class="form-control" id="exampleFormControlSelect1" name="destination" required>
                  <option name="destination" value="Paris">Paris</option>
                  <option name="destination" value="london" selected>london</option>
                  <option name="destination" value="Barcelona">Barcelona</option>
                  <option name="destination" value="Mauritius">Mauritius</option>
                  <option name="destination" value="CHRIST THE REEDEEMER">CHRIST THE REEDEEMER</option>
                  <option name="destination" value="NEWZEALAND">NEWZEALAND</option>
                  
                </select>
            
                 
        </label><br> <br>   -->
        <label  >Journey Date : <input type="date" name="journey" id="exampleFormControlSelect1" required ></label>  <br> <br>
        <label>AMOUNT: <input type="text" name="amt" value="50000" disabled></label><br><br>
        
        <label  >CARD TYPE : <br><br>
            <input type="radio" name="ra1" id="ra1" required > <img src="main_page_images/mastercard.png" alt="">
            <input type="radio" name="ra1" id="ra1" required > <img src="main_page_images/visa.png" alt="">
            <input type="radio" name="ra1" id="ra1" required > <img src="main_page_images/americanexpress.png" alt="">
            <input type="radio" name="ra1" id="ra1" required > <img src="main_page_images/paypal.png" alt="">
        
            </label>  <br> <br>
           <label  >CARD number : <input type="text" name="cnum" id="cnum"  placeholder="1234 5678 8268" required></label>  <br> <br>
           <label  >CVV number : <br><input type="text" name="cvv" id="cvv" placeholder="123" required></label> <br> <br> 
            
           
            
            <input type="checkbox" id="cbox" required>I agree to  the policy <br>  <br>
            <button type="submit"  >PAY NOW</button>
        </form>
      </div>

     


</body>
</html>
