<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Consortium '22 | E-CELL, VNIT</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- local css -->
    <link rel="stylesheet" href="./css/regStyle.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="img/favicon_io/site.webmanifest">
</head>
<body>
    <div class="track track-1">
        <div class="track-inner">
          <div class="plane-wrapper">
            <div class="plane">
              <div class="plane-tail"></div>
            </div>
          </div>
        </div>
      </div>
    
    <form class="login text-center" method="post" action="regStore_details.php" style="max-width: 90%;">
        <h1 class="text-center" style="color: #d5242a;">Register</h1>
        <label for="name" class="mt-2">Enter Your Name</label><br>
        <input class="my-3 text-center" style="border: 2px solid #696969;" type="text" name="name" placeholder="Your Name" required><br>
        <label for="email">Enter Your Email ID</label><br>
        <input class="my-3 text-center" style="border: 2px solid #696969;" type="email" name="email" placeholder="Email" required><br>
        <label for="phone">Enter Your Contact Number</label><br>
        <input class="my-3 text-center" style="border: 2px solid #696969;" type="tel" name="phone" placeholder="Contact Number" required><br>
        <Button style="background-color: #d5242a;" id="submit" type="submit" class="btn btnth" name="submit">SUBMIT</Button>
      </form>
</body>
</html>