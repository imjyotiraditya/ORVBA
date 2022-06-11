<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="new.css">
    <!-- Aos cdn  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Work+Sans:wght@300&display=swap"
        rel="stylesheet">
    <title>Contact us</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="home1">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ORVBA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link text-white" href="Ulogin.php">Login</a>
                    <li class="nav-item"></li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- contact -->
    <div class="container" id="contact">
        <div class="row justify-content-center">
            <h2 class="text-center">Contact us</h2>
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Name</label>
                        <input type="email" class="form-control" id="exampleInputname" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputemail" class="form-label">email</label>
                        <input type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email
                            with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputnumber1" class="form-label"> Contact
                            Number</label>
                        <input type="text" class="form-control" id="exampleInputnumber1">
                    </div>
                    <button type="submit" class="btn btn-primary mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid mt-3">
        <div class="row justify-content-evenly bg-dark text-white">
            <div class="col-lg-6">
                <h2>Useful Links</h2>
                <a class="mt-3" href="index.php">Home</a> <br>
                <a class="mt-3" href="services.php">Services</a> <br>
                <a class="mt-3" href="#blog">blog</a> <br>
                <a class="mt-3" href="contact.php">Contact us</a> <br>
                <a class="mt-3" href="Mlogin.php">Mechanic Login</a>
            </div>
            <div class="col-lg-6 text-center mt-5">
                Design by-Abhisek praharaj <br>
                <a href="https://www.facebook.com/abhisek.praharaj.1" target="_blank">
                    <i class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/in/abhisek-praharaj-1bb62822b/" target="_blank"><i
                        class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/abhisek__praharaj/?utm_medium=copy_link" target="_blank"> <i
                        class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</body>

</html>