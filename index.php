<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SonixLocale</title>
    <!-- Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--Custom CSS-->
<link rel="stylesheet" href="./css/style.css">
<!--Animate-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
<!--Rotator-->
<link rel="stylesheet" href="css/slider.css">

</head>
<body>
<section class="hero" id="hero">
        <div class="container">
            <div class="row">
                
                <!--Text-->
                <div class="col-lg-5">
                    <!--Introduction-->
                    <h1 class="animate__fadeInDown">Know the number of people around you</h1>
                    <h5 class="animate__slideInLeft">Its going to be sophisticated and simple, stay tuned. Coming soon...</h5>
                    <!--/ Introduction-->

                    <!--Form-->
                     <form class="animate__slideInRight" method="POST" action="process.php">
                        <label for="inputEmail" class="sr-only"></label>
                        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter your email address" required>
                        <button class="btn btn-primary" type="submit">Get notified</button>
                      </form>  
                      <!--/ Form-->

                </div>
                <!--/Text-->

                <!--Image-->
                <div class="col-lg-7">
                    <div class="hero-content">
                        <!--Carousel Wrapper-->
                        <div class="carousel-container" id="carousel">
                            <img src="./assets/phone.png" id="item-1" />
                            <img src="./assets/phone.png" id="item-2" />
                            <img src="./assets/phone.png" id="item-3" />
                            <img src="./assets/phone.png" id="item-4" />
                            <img src="./assets/phone.png" id="item-5" />
                            <img src="./assets/phone.png" id="item-6" />

                        </div>
                        <!--/Carousel Wrapper-->
                    </div>
                </div>
                <!--/Image-->
            </div>
        </div>
    </section>
   
    
    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<script src="js/slider.js"></script>

</body>
</html>