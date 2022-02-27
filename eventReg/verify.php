<?php
    // include('session.php');
    session_start();
    if(isset($_POST['submit']))
    {
    //  $servername = "localhost";
    //  $username = "ias2020";
    //  $password = "ecell123";
    //  $dbname = "eco21";    
    }
    else{
        header("location:check.php");
    }
    $con = mysqli_connect("localhost","ias2020","ecell123","conso22");

    // $conn = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }	 
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $reg = mysqli_query($con, "SELECT * FROM registrations WHERE email = '$email'");
    $var = mysqli_num_rows($reg);
    if(!$var){
        header("location:../notReg.php");
    }
?>
<?php include('header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Events | Consortium '22 | E-CELL, VNIT</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- local css -->
    <link rel="stylesheet" href="./css/verify.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon_io/site.webmanifest">
</head>

<body>
    <!-- header start -->
    <?php 
        $name1 = mysqli_query($con, "SELECT name FROM registrations WHERE email = '$email'");
        $name1 = $name1->fetch_array()[0] ?? '';
        if(!$name1) $name1='user';
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="block-reveal">
                    <div class="block"></div>
                    <h5 class="my-3 username">Hello, <?php echo $name1; ?> <i class="fa-regular fa-face-smile"></i></h5>
                </div>
                <!-- <p class="username my-3" href="#">Hello, <?php echo $name1; ?></p> -->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> -->
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
                </ul>
                <!-- <div class="">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btnth" type="submit"><a href="logout.php">Logout</a></button>
                </div> -->
                </div>
            </div>
        </nav>
    </div>
    <!-- header end -->
    <?php 
        $ceo = mysqli_query($con, "SELECT * FROM ceo WHERE email = '$email'");
        $neo = mysqli_query($con, "SELECT * FROM neo21entries WHERE email = '$email'");
        $eco = mysqli_query($con, "SELECT * FROM eco WHERE email = '$email'");
        $suc = mysqli_query($con, "SELECT * FROM suc WHERE email = '$email'");
        $coc = mysqli_query($con, "SELECT * FROM coc WHERE email = '$email'");
        $entremun = mysqli_query($con, "SELECT * FROM entremun WHERE email = '$email'");
        $wallstreet = mysqli_query($con, "SELECT * FROM wallstreet WHERE email = '$email'");
        $cryptowin = mysqli_query($con, "SELECT * FROM cryptowin WHERE email = '$email'");
        // $render = mysqli_query($con, "SELECT * FROM render WHERE email = '$email'");
        // $adventure = mysqli_query($con, "SELECT * FROM adventure WHERE email = '$email'");
        // $reg = mysqli_query($con, "SELECT * FROM register WHERE email = '$email'");
    ?>
    <div class="wrapper">
    <h2 class="text-center pt-3">Your Registered Events</h2></div>
    <div class="container">
        <div class="row">
            <?php $var = mysqli_num_rows($ceo);?>
            <?php if($var): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                    <img src="../img/ceo1.jpeg" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">CEO</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">CEO is an event that provides a glimpse into the future, where excellent leadership is necessary for success, and where participants take risks during the most challenging times.</h6>
                    <div class="col-md-12 text-right my-2">
                        <a href="https://www.ecellvnit.org/ceo/ceo.php" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( mysqli_num_rows($neo)): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                    <img src="../img/neo.jpeg" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">NEO</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">National Entrepreneurship Olympiad is a nationwide examination for the students of class 7th to 10th grade to nurture and test their entrepreneurial skills.</h6>
                    <div class="col-md-12 text-right mb-5 mt-2">
                        <a href="https://neo.ecellvnit.org/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( mysqli_num_rows($eco)): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                    <img src="../img/eco.jpeg" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">ECO</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">Ecopreneur aims to incise the college students to explore the world of Environmental Entrepreneurship by deducing a proper technical solution to an issue.</h6>
                    <div class="col-md-12 text-right mb-5 mt-2">
                        <a href="https://www.ecellvnit.org/ecopreneur/index.php" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if( mysqli_num_rows($suc)): ?>
            <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                <img src="../img/suc.jpeg" alt="">
                <h5 class="mt-2 text-center" style="font-weight: bold;">SUC</h5>
                <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">StartUp Conclave is a national-level business plan competition to facilitate and encourage this vision of promoting entrepreneurship for a brighter future in India.</h6>
                <div class="col-md-12 text-right mb-5 mt-2">
                    <a href="https://startupconclave.ecellvnit.org/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                </div>
            </div>
            <?php endif; ?>
            <?php if( mysqli_num_rows($coc)): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                    <img src="../img/coc.jpg" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">COC</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">Chamber of Commerce is a premier body whose goal is the collective and communal enhancement of businesses.It serves essential roles in development for projects.</h6>
                    <div class="col-md-12 text-right mb-5 mt-2">
                        <a href="https://www.ecellvnit.org/coc/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( mysqli_num_rows($entremun)): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                    <img src="../img/coc.jpg" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">EntreMUN</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">Chamber of Commerce is a premier body whose goal is the collective and communal enhancement of businesses.It serves essential roles in development for projects.</h6>
                    <div class="col-md-12 text-right mb-5 mt-2">
                        <a href="https://www.ecellvnit.org/coc/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if( mysqli_num_rows($cryptowin)): ?>
            <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                <img src="../img/suc.jpeg" alt="">
                <h5 class="mt-2 text-center" style="font-weight: bold;">Cryptowin</h5>
                <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">StartUp Conclave is a national-level business plan competition to facilitate and encourage this vision of promoting entrepreneurship for a brighter future in India.</h6>
                <div class="col-md-12 text-right mb-5 mt-2">
                    <a href="https://startupconclave.ecellvnit.org/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                </div>
            </div>
            <?php endif; ?>
            <?php if( mysqli_num_rows($wallstreet)): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <!-- <span class="tag px-4 py-2">PAN NIT</span> -->
                    <img src="../img/wallstreet poster final.png" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">Wallstreet</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">This event aims to test managing skills of the students and will help you discover the businessman/stock trader in you.</h6>
                    <div class="col-md-12 text-right mb-5 mt-2">
                        <a href="https://consortium.ecellvnit.org/wallstreet/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?>
            <!-- <?php if( mysqli_num_rows($render)): ?>
                <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                    <img src="../img/coc.jpg" alt="">
                    <h5 class="mt-2 text-center" style="font-weight: bold;">Render</h5>
                    <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">Chamber of Commerce is a premier body whose goal is the collective and communal enhancement of businesses.It serves essential roles in development for projects.</h6>
                    <div class="col-md-12 text-right mb-5 mt-2">
                        <a href="https://www.ecellvnit.org/coc/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                    </div>
                </div>
            <?php endif; ?> -->
        </div>
        <div class="row">
            <!-- <?php if( mysqli_num_rows($adventure)): ?>
            <div class="col-12 col-md-6 col-lg-4 eventcard mx-4">
                <img src="../img/suc.jpeg" alt="">
                <h5 class="mt-2 text-center" style="font-weight: bold;">Adventure</h5>
                <h6 class="mt-2 mx-2 pb-3 text-white text-left desc">StartUp Conclave is a national-level business plan competition to facilitate and encourage this vision of promoting entrepreneurship for a brighter future in India.</h6>
                <div class="col-md-12 text-right mb-5 mt-2">
                    <a href="https://startupconclave.ecellvnit.org/" target="_blank"><button type="button" class="btn btn4" style="margin-top: -8px;">Register Now</button></a>
                </div>
            </div>
            <?php endif; ?> -->
        </div>
    </div>
    
    <?php if(!mysqli_num_rows($ceo) && !mysqli_num_rows($neo) && !mysqli_num_rows($eco) && !mysqli_num_rows($suc) && !mysqli_num_rows($coc)): ?>
        <div class="wrapper mx-auto" style="background-color: #fff;width: 70%;border-radius: 30px;">
            <div><img src="../img/notFound.png" width="60%" alt=""></div>
        <h4 class="text-center px-3">You haven't registered to any event. If you think it's a mistake kindly check your registered email once.</h4>
    <?php endif; ?>
    <div class="wrapper">
    <h4 class="text-center my-3 py-2 px-3 reg"> Register for more events <a href="../events.php">here >></a></h4></div>
</div>
    <?php include('footer.php')?>
</body>
</html>