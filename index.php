<?php

    include 'config/database.php';
    
   

    // Message Vars
    $msg = '';
    $msgClass = '';

    // Check For Submit
//   if (filter_has_var(INPUT_POST, 'submit')) {
    if ($_POST) {
        // Check Require Fields
        if (!empty($_POST['user_email'])) {
            try {
                // insert query
                $query = "INSERT INTO users SET user_email=:user_email";
        
                // prepare query for execution
                $stmt = $con->prepare($query);
                    
                // posted values
                $user_email = htmlspecialchars(strip_tags($_POST['user_email']));

                // bind the parameters
                $stmt->bindParam(':user_email', $user_email);
                    
                // Execute the query
                if ($stmt->execute()) {
                  // Successful
                  $msg = 'Form submitted successfully';
                  $msgClass = 'alert-success';
                } else {
                    // Failed
                    $msg = 'Form not submitted';
                    $msgClass = 'alert-danger';
                }
            } catch(PDOException $exception) {
                die('ERROR: ' . $exception->getMessage());
            }
        }
    }
?>

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
<!--Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet">
<!--Rotator-->
<link rel="stylesheet" href="./css/slider.css">
<!--Tiny Slider-->
<link rel="stylesheet" href="./css/tiny-slider.css">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</head>
<body>
<section class="hero" id="hero">
        <div class="container">

            <!--Counter-->
            <img src="./assets/countdown.svg">
            <!--/ Counter-->

            <div class="row">
                
                <!--Text-->
                <div class="col-xl-5">

                    <!--Introduction-->
                    <h1 class="title">Know the number of people around you</h1>
                    <h5 class="text">Its going to be sophisticated and simple, stay tuned. Coming soon...</h5>
                    <!--/ Introduction-->

                    <?php if($msg != ''): ?>
                        <div class="alert <?php echo $msgClass; ?>">
                        <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>
                    

                    <!--Form-->
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="inputEmail" class="sr-only"></label>
                        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter your email address" required>
                        <button class="btn btn-primary" type="submit" name="submit">Get notified</button>
                      </form>  
                      <!--/ Form-->

                </div>
                <!--/Text-->

                <!--Image-->
                <div class="col-xl-7">
                    <div class="hero-content">
                        <!--Carousel Wrapper-->
                        <div class="carousel-container" id="carousel">
                            <img class='img-fluid' src="./assets/phone.png" id="item-1" />
                            <img class='img-fluid' src="./assets/phone.png" id="item-2" />
                            <img class='img-fluid' src="./assets/phone.png" id="item-3" />
                            <img class='img-fluid' src="./assets/phone.png" id="item-4" />
                            <img class='img-fluid' src="./assets/phone.png" id="item-5" />
                            <img class='img-fluid' src="./assets/phone.png" id="item-6" />

                        </div>

                        <!--/Carousel Wrapper-->

                    </div>

                    <!--Tiny Carousel-->

                    <div class="tiny-carousel" id="tiny-carousel">
                        <img class='img-fluid' src="./assets/tiny-mobile.png" id="item-1" />
                        <img class='img-fluid' src="./assets/tiny-mobile.png" id="item-2" />
                        <img class='img-fluid' src="./assets/tiny-mobile.png" id="item-3" />
                        <img class='img-fluid' src="./assets/tiny-mobile.png" id="item-4" />
                        <img class='img-fluid' src="./assets/tiny-mobile.png" id="item-5" />
                        <img class='img-fluid' src="./assets/tiny-mobile.png" id="item-6" />

                      </div>

                    <!--/ Tiny Carousel-->

                </div>
                
                <!--/Image-->

            </div>
        </div>
    </section>
    
    
    <!-- JS, Popper.js, and jQuery -->
<script src='./js/jquery.js'></script>
<script src="./js/slider.js"></script>
<script src="./js/jquery.waterwheelCarousel.js"></script>
<script src="./js/tiny-slider.js"></script>




</body>
</html>





