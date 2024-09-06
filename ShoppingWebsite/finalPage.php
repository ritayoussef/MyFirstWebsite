<html>
    <link rel="stylesheet" href="./style.css">
    <body>
        <nav>
 
       
   <img id="logo" src="./assets/order-1024x1024.jpg" alt="Make Orders Here ;) logo">
      <h1>Make Your Orders Here ;) </h1>
        <ul class="menu">
            <li><a href="#">Tour</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact Us</a></li>
            
        </ul>
 
 
    </nav>
        <?php
        
        error_reporting(E_ERROR | E_PARSE);
          
        if($_GET['check'] == 'true')
        {
            
       echo "<h2> Thank You " ; echo $_GET["nombre"];
              echo "</h2><br> ";
       echo "<h2>Your product will be shipped to ";   echo " "; echo $_GET["ciudad"];
             echo ".</h2> <br> ";
       echo "<h2> Your total is $500.00 </h2>";  
         echo " <br> ";
     
       
        if ($_GET["edad"] < 18)
        {
            echo "<h2> Since you are under 18, your parents must phone us to complete this transaction.</h2>";
        }
        else
        {
            echo "<h2>Thank you for your order, it will arrive soon.</h2>";
        }
        }
        else
        {
            echo "<h2>Please check back in a little while, we may have something to interest you.</h2>";
        }
        
        
        ?>
        <footer>
         <div class = "MakeOrder">  
         <h3 class = "MakeOrder">Make Orders Here ;) </h3>
        <p class = "MakeOrder">@ 2022 all rights reserved</p>
        </div>
           
            
        </footer>
      
    </body>
</html>