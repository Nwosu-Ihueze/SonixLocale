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
<div class="container-fluid">
    <div class="row">
        <!--Text-->
        <div class="col-lg-5">
           <h1 class="animate__fadeInDown">Know the attendance</h1>
           <h5 class="animate__slideInLeft">Its going to be sophisticated and simple, stay tuned. Coming soon...</h5>
           <form class="animate__slideInRight" method="POST" action="process.php">
               <label for="inputEmail" class="sr-only"></label>
               <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter your email address" required>
               <button class="btn btn-primary" type="submit">Get notified</button>
          </form>  
        </div>
        <!--/Text-->
    </div>
    <div class="row">
        <!--Image-->
        <div class="col-lg-7">
            <!--Slider Images-->
            <div class="slider-main">
                  <img src="1.jpg">
                  <img src="2.jpg">
                  <img src="3.jpg">
                  <img src="4.jpg">
                  <img src="5.jpg">
                  <img src="6.jpg">
                </div>
                
        </div>
    </div>
        

    
</div>

   
    
    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<script src="js/slider.js"></script>

</body>
</html>