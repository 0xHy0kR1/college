<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDCOST - Health Service Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+0123456789</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="https://www.google.com/search?q=fb&sca_esv=f40bbf4ff6228df6&sca_upv=1&ei=E5csZujRHr2y4-EP0-mn2Ac&oq=face&gs_lp=Egxnd3Mtd2l6LXNlcnAiBGZhY2UqAggBMhYQLhiABBixAxjRAxhDGIMBGMcBGIoFMhAQABiABBixAxhDGIMBGIoFMhEQLhiABBixAxjRAxiDARjHATILEAAYgAQYsQMYgwEyCxAAGIAEGLEDGIMBMgUQLhiABDIOEC4YgAQYsQMYgwEY1AIyCxAAGIAEGLEDGIMBMggQABiABBixAzILEAAYgAQYsQMYgwFIkiBQhANYphRwAngBkAEFmAHZBKABuQuqAQczLTEuMS4xuAEByAEA-AEBmAIFoALIFagCCsICChAAGLADGNYEGEfCAg0QABiABBiwAxhDGIoFwgIZEC4YgAQYsAMY0QMYQxjHARjIAxiKBdgBAcICExAuGIAEGLADGEMYyAMYigXYAQHCAhkQLhiABBixAxjRAxhDGIMBGMcBGMkDGIoFwgILEAAYgAQYkgMYigXCAigQLhiABBixAxjRAxhDGIMBGMcBGMkDGIoFGJcFGNwEGN4EGOAE2AECwgIWEAAYAxi0AhjlAhjqAhiMAxiPAdgBA8ICGBAAGAMYtAIY5QIY6gIYChiMAxiPAdgBA8ICJRAuGIAEGLEDGNEDGEMYgwEYxwEYigUYlwUY3AQY3gQY4ATYAQKYAwSIBgGQBg26BgQIARgIugYGCAIQARgUugYECAMYCpIHCzIuMy0xLjEuNy0xoAeMHQ&sclient=gws-wiz-serp">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="https://www.google.com/search?q=twitter&sca_esv=f40bbf4ff6228df6&sca_upv=1&ei=9ZYsZt68H4vG4-EPvcKqoAE&gs_ssp=eJzj4tLP1TfIyDMsS05XYDRgdGDwYi8pzywpSS0CAFnOB00&oq=twitter&gs_lp=Egxnd3Mtd2l6LXNlcnAiB3R3aXR0ZXIqAggAMhYQLhiABBixAxjRAxhDGIMBGMcBGIoFMgoQABiABBhDGIoFMgoQABiABBhDGIoFMgoQABiABBhDGIoFMgoQABiABBhDGIoFMgsQABiABBixAxiDATINEAAYgAQYsQMYQxiKBTIKEAAYgAQYQxiKBTILEAAYgAQYsQMYgwEyCxAAGIAEGLEDGIMBMiUQLhiABBixAxjRAxhDGIMBGMcBGIoFGJcFGNwEGN4EGOAE2AEESIgvUNQEWNIhcAJ4AZABBJgBtAOgAfQbqgEIMi0xMC4xLjK4AQHIAQD4AQGYAgugAt0aqAIUwgIKEAAYsAMY1gQYR8ICDRAAGIAEGLADGEMYigXCAhkQLhiABBiwAxjRAxhDGMcBGMgDGIoF2AEBwgIOEC4YgAQYsQMY0QMYxwHCAgUQABiABMICCBAAGIAEGLEDwgIZEC4YgAQY0QMYQxi0AhjHARiKBRjqAtgBAsICExAAGIAEGEMYtAIYigUY6gLYAQLCAhYQABgDGLQCGOUCGOoCGIwDGI8B2AEDwgIYEAAYAxi0AhjlAhjqAhgKGIwDGI8B2AEDwgIQEAAYgAQYsQMYQxiDARiKBZgDCYgGAZAGEboGBggBEAEYCLoGBAgCGAe6BgYIAxABGAq6BgYIBBABGBSSBwsyLjAuNy4xLjctMaAH4mA&sclient=gws-wiz-serp">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="https://www.google.com/search?q=linkedin&sca_esv=f40bbf4ff6228df6&sca_upv=1&ei=0ZYsZoitE__D4-EPnJKBsAQ&oq=link&gs_lp=Egxnd3Mtd2l6LXNlcnAiBGxpbmsqAggAMhAQABiABBixAxhDGIMBGIoFMg0QABiABBixAxhDGIoFMg0QABiABBixAxhDGIoFMhMQLhiABBixAxjRAxhDGMcBGIoFMgoQABiABBhDGIoFMhAQABiABBixAxhDGIMBGIoFMhAQABiABBixAxiDARiKBRgKMgUQABiABDIFEAAYgAQyCBAAGIAEGLEDSLA9UMsFWN8fcAF4ApABAJgBywOgAdcYqgEJMC4yLjcuMi4xuAEByAEA-AEBmAIIoAK0D6gCFMICBBAAGEfCAgsQABiABBixAxiDAcICCxAuGIAEGLEDGIMBwgIOEAAYgAQYsQMYgwEYigXCAhEQLhiABBixAxjRAxiDARjHAcICGRAuGIAEGNEDGEMYtAIYxwEYigUY6gLYAQHCAhMQABiABBhDGLQCGIoFGOoC2AEBwgIWEAAYAxi0AhjlAhjqAhiMAxiPAdgBAsICGBAAGAMYtAIY5QIY6gIYChiMAxiPAdgBAsICDhAuGIAEGLEDGNEDGMcBwgIKEC4YgAQYQxiKBcICEBAuGIAEGNEDGEMYxwEYigXCAg0QLhiABBixAxhDGIoFwgIZEC4YgAQYQxiKBRiXBRjcBBjeBBjgBNgBA5gDCogGAZAGCLoGBAgBGAe6BgYIAhABGAq6BgYIAxABGBSSBwkyLjAuMy4xLjKgB6lb&sclient=gws-wiz-serp">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="https://www.google.com/search?q=instagram&sca_esv=f40bbf4ff6228df6&sca_upv=1&ei=oJYsZo2iFtm74-EP6YCqoAo&ved=0ahUKEwiN8oHr3eGFAxXZ3TgGHWmACqQQ4dUDCBA&uact=5&oq=instagram&gs_lp=Egxnd3Mtd2l6LXNlcnAiCWluc3RhZ3JhbTIQEAAYgAQYsQMYQxiDARiKBTIQEAAYgAQYsQMYQxiDARiKBTILEAAYgAQYsQMYgwEyCxAAGIAEGLEDGIMBMgsQABiABBixAxiDATILEAAYgAQYsQMYgwEyCxAAGIAEGLEDGIMBMgsQABiABBixAxiDATIFEAAYgAQyCBAAGIAEGLEDSP4pULgDWPghcAJ4AZABAZgBqwOgAfAfqgEJMC4xLjcuNS4xuAEDyAEA-AEBmAIKoALjEqgCEsICChAAGLADGNYEGEfCAg0QABiABBiwAxhDGIoFwgITEC4YgAQYsAMYQxjIAxiKBdgBAcICExAAGIAEGEMYtAIYigUY6gLYAQLCAhMQLhiABBhDGLQCGIoFGOoC2AECwgIWEAAYAxi0AhjlAhjqAhiMAxiPAdgBA8ICGBAAGAMYtAIY5QIY6gIYChiMAxiPAdgBA8ICCxAuGIAEGLEDGIMBwgIOEAAYgAQYsQMYgwEYigXCAhEQLhiABBixAxjRAxiDARjHAcICGhAuGIAEGLEDGIMBGJcFGNwEGN4EGOAE2AEEwgIQEC4YgAQY0QMYQxjHARiKBZgDB4gGAZAGDLoGBAgBGAi6BgQIAhgHugYGCAMQARgKugYGCAQQARgUkgcJMi4xLjQuMi4xoAeQZg&sclient=gws-wiz-serp">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="https://www.google.com/search?q=youtube&oq=youtube&gs_lcrp=EgZjaHJvbWUqBwgAEAAYjwIyBwgAEAAYjwIyEwgBEC4YgwEYxwEYsQMY0QMYgAQyDQgCEAAYgwEYsQMYgAQyDQgDEAAYgwEYsQMYgAQyCggEEAAYsQMYgAQyCggFEAAYsQMYgAQyEAgGEAAYgwEYsQMYgAQYigUyCggHEAAYsQMYgAQyBwgIEAAYgAQyBwgJEAAYjwLSAQk2MDA2ajBqMTWoAgiwAgE&sourceid=chrome&ie=UTF-8">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>MedCost</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                       
                        <a href="price.php" class="nav-item nav-link active">Costlist</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Know about surgery</a>
                            <div class="dropdown-menu m-0">
                            <a href="dailysis.php" class="dropdown-item">Dialysis </a>
                                <a href="hernia.php" class="dropdown-item">Hernia surgery</a>
                                <a href="bariatric.php" class="dropdown-item">Bariatric</a>
                                <a href="colonoscopy.php" class="dropdown-item">Colonoscopy</a>
                                <a href="chemotherapy.php" class="dropdown-item">Chemotherapy </a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
                <h1 class="display-4">Avarage Surgery Cost</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Dialysis Cost</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;"></small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                    <p><b>Rs. 3500-6000/ Year</b></p>
                        <a href="dailysis.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Know More</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Hernia Surgery</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;"></small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                    <p><b>Rs. 18000-50000/ Year</b></p>
                        <a href="hernia.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Know More</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Bariatric Surgery</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;"></small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                    <p><b>Rs. 210000-600000/ Year</b></p>
                        <a href="bariatric.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Know More</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-4.jpg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Colonoscopy Cost</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;"></small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                    <p><b>Rs. 9000-25000/ Year</b></p>
                        <a href="colonoscopy.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Know More</a>
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="img/price-5.jpeg" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white">Chemotherapy Cost</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;"></small><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                    <p><b>Rs. 4000-40000/ Year</b></p>
                        <a href="chemotherapy.php" class="btn btn-primary rounded-pill py-3 px-5 my-2">Know more</a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


   


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
    
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, Raipur,Chattisgarh,India</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+0123456789</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Costlist</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Know about surgery</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Costlist</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Know about surgery</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Follow Us</h4>
                   
            
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
              
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>