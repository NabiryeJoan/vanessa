
<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar">
            <!-- <h1><a class="navbar-brand" href="index.php"> 
            AGROGET_AWAY
            </a></h1> -->
            <!-- <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button> -->
            <img class="logo" src="assets/pictures/logo.jpeg" alt="logo" >
      
            <div class="navbar-style" id="">
                <ul class="nav-text">
                    <li class="nav-item">
                        <a class="nav-item-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-link" href="Aboutus.php">About Us</a>
                    </li> 
                     
                     <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                     <li class="nav-item">
                        <a class="nav-item-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-link" href="login.php">Sign In</a>
                    </li><?php }?>

                    <li class="nav-item">
                        <a class="nav-item-link" href="contactus.php">Contact us</a>
                    </li>

                </ul>
                
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>