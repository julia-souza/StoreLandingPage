<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">

    <title>Templates</title>

</head>

<body>
    
    <section>
        <header>
            <a href="index.php" > <img src="img/logo.png" alt="logo" class="logo"> </a>
            <ul>
                <li><a href="index.php">HOME</a></li> 
                <li><a href="#">TEMPLATES</a></li>
                <li><a href="#">CONTATO</a></li>
             </ul>
        </header>

        <div>
            <?php 
                // require 'include/slider.php';
            ?>
            
        </div>

        <div>
            <?php 
                require 'include/card.php';
            ?>
        </div>


        
        <div class="footer">
            <!-- <hr> -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel finibus eros. Morbi dapibus elit ut nisi accumsan, sed sodales arcu fermentum. Vivamus euismod, turpis.</p>
        </div >
    </section>

</body>


    
</html>