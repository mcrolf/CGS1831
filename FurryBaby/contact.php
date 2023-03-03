<!--Furry Baby: Contact PHP-->
<!--By: Michael Napoli-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="furrybaby.css">
        <title>Furry Baby: Contact </title>
    </head>

    <body>

        <div id="wrapper">

            <nav>    
                <a href="index.html"; class="button"> Home </a>
                <a href="products.html"; class="button"> Products </a>
                <a href="gallery.html"; class="button"> Gallery </a>
                <a href="aboutus.html"; class="button"> About Us </a>
            </nav>

            <header>
                <a href="index.html"><img src="FurryBaby3.png" class="logo"></a>
            </header>

        </div>

        <main>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            Thank you <?php echo $_POST["myName"]; ?> 
            <br>

        
        </main>

        <footer id="wrapper" class="buttonwrap">
            <a href="contact.html" class="button2"> Contact Us </a>
            <a class="button2"> (813)333-4444 </a>
            <a class="button2"> furrybabby@shop.com </a>
            <br>
            <br>
            <p> &copy;FurryBaby 2022 </p>
        </footer>

    </body>



</html>