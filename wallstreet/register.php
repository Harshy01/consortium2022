<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | WALLSTREET</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="css/formStyle.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container d-flex justify-content-center pt-3 shadow-lg p-3 mb-5 rounded">
        <div class="row align-items-center">
            <form class="p-4" method="post" action="store_details.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row mb-2">
                    <label for="name" class="col-md-4 col-form-label">Name*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" placeholder="Name" name="name"  required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email" class="col-md-4 col-form-label">Email*</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control rounded-pill" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="phone" class="col-md-4 col-form-label">Contact No. *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="phone" placeholder="Contact No." required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="college" class="col-md-4 col-form-label">College*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="college" placeholder="College" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="course" class="col-md-4 col-form-label">Course*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="course" placeholder="eg: B-Tech" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="year" class="col-md-4 col-form-label">Year*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="year" placeholder="Year" required>
                    </div>
                </div>
                <center>
                <button class="btn submit rounded-pill align-items-center my-4" type="submit" name="submit_form" value="SUBMIT">SUBMIT</button>
                </center>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
