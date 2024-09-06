<html>
     <link rel="stylesheet" href="./style.css">
    <head>
        <script>
            alert ("Hey, You asked to proceed with your order, Press Ok if you would like to check the product ");
        </script>
    </head>
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
        <h1> Hello there
               <?php
               
               echo $_GET["yourname"];
               
               
               ?>
        
        
        </h1>
        <form action = "finalPage.php" method = 'GET'>
             <div>
        <h2>Would you like to buy this product?  </h2>
           <br>  <?php
            $gen = $_GET["yoursexe"];
            $img;
            echo "<input type='checkbox' name='check' value='true'>             ";
            if ($gen == "Male")
            {
                echo "      iPhone 12 $500.00";
                $img = "./assets/iPhone-12-black-02.png";
            }
            else if($gen == "Female")
            {
                echo "UGGS $500.00";
                $img = "./assets/UGGS.jpeg";
            }
            ?> <br>
            <br> 
            
            
            <input type = "submit" value = "Confirm your order">
            <input type = "hidden" name = 'nombre' value = <?php echo $_GET["yourname"];?>>
            <input type = "hidden" name = 'edad' value = <?php echo $_GET["yourage"];?>>
            <input type = "hidden" name = 'genero' value = <?php echo $_GET["yoursexe"];?>>
            <input type = "hidden" name = 'ciudad' value = <?php echo $_GET["youraddress"];?>>
            </form>  
             <img src = "<?php echo $img; ?>"> </div>
              
            
            
            <footer>
         <div class = "MakeOrder">  
         <h3 class = "MakeOrder">Make Orders Here ;) </h3>
        <p class = "MakeOrder">@ 2022 all rights reserved</p>
        </div>
           
            
        </footer>
       
    </body>
</html>