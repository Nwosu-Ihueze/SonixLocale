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
<link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
<!--Rotator-->
<link rel="stylesheet" href="./css/slider.css">
<!--Lightbox-->
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<link rel="stylesheet" href="./css/lightbox.css">
<!--Intro Carousel-->
<link href="./css/content-slider.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</head>
<body style="background-image: url('./assets/bg.png');">
<section class="hero" id="hero">
        <div class="container">
           <!--Counter-->
                <img src="./assets/countdown.svg">
            <!--/ Counter-->
            <div class="row">
                
                <!--Text-->
                <div class="col-xl-5 col-md-5 col-sm-12">
                    <!--Introduction-->
                    <div class="mob">

                    <div class="content-slider">
                        <div class="slider">
                          <div class="mask">
                            <ul>
                              <li class="anim1">
                                <div class="quote">Know the number of people around you</div>
                                <div class="source">This technology uses sonic metrics such as reflection/deflection and <br>
                                     estimated echometry/sonography to listen for the tiniest sound <br>
                                     disturbance in matter within a specified radius (eg 100m radius) to <br>
                                     determine how many people are present within that space.</div>
                              </li>
                              <li class="anim2">
                                <div class="quote">Customize your preferences</div>
                                <div class="source">Maybe you rent interested in knowing the number of people 500m away, <br>
                                     customize your preferences to search within a specific radius. You can <br> 
                                     select a search filter such as finding the number of women using <br>
                                     Genderspace excellent technology. </div>
                              </li>
                              <li class="anim3">
                                <div class="quote">Listening History at a glance</div>
                                <div class="source">From your dashboard, you can see the trail of listening <br>
                                 history. from number of people to the echo-geographical locations. <br>
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                                 tempor incididunt ut labore et dolore magna aliqua.</div>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                
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

                <!--Mode switcher-->
                <div class="container">
                        <div class="theme-switch">
                          <a class="switch" href="dark.html"></div>
                        </div>
                        <!--/ Mode switcher-->

                </div></div>
                <!--/Text-->

                <!--Image-->
                <div class="col-xl-7 col-md-7 col-sm-12">
                    <div class="hero-content">
                        <!--Carousel Wrapper-->
                        <div class="carousel-container" id="carousel">
                            <a class="sonix" href="./assets/onboarding.png" data-lightbox="gallery">
                                <img class="img-fluid" src="./assets/onboarding.png" alt="item-1">
                              </a>
                              <a class="sonix" href="./assets/signup.png" data-lightbox="gallery">
                                <img class="img-fluid" src="./assets/signup.png" alt="item-2">
                              </a>
                              <a class="sonix" href="./assets/dashboard.png" data-lightbox="gallery">
                                <img class="img-fluid" src="./assets/dashboard.png" alt="item-3">
                              </a>
                              
                              <a class="sonix" href="./assets/search.png" data-lightbox="gallery">
                                <img class="img-fluid" src="./assets/search.png" alt="item-4" id="listening">
                              </a>
                              <a class="sonix" href="./assets/settings.png" data-lightbox="gallery">
                                <img class="img-fluid" src="./assets/settings.png" alt="item-5">
                              </a>
                              <a class="sonix" href="./assets/success.png" data-lightbox="gallery">
                                <img class="img-fluid" src="./assets/success.png" alt="item-6">
                              </a>
                        </div>

                        <!--/Carousel Wrapper-->
                    </div>
                </div>
                <!--/Image-->

            </div>
        </div>
    </section>
    
    
    <!-- JS, Popper.js, and jQuery -->
<script src='./js/jquery.js'></script>
<script src="./js/slider.js"></script>
<script src="./js/jquery.waterwheelCarousel.js"></script>
<!--Lightbox-->
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="dist/js/lightbox.js"></script>
<script src="./js/lightbox.js"></script>


<script>
 $("#listening").click(function speak(){
    var msg = new SpeechSynthesisUtterance();
        msg.text = "You have approximately 179 people within your vicinity";
        window.speechSynthesis.speak(msg);    
 });
</script>
<script>
    $(".theme-switch").on("click", () => {
    $("body").toggleClass("light-theme");
  });
</script>





</body>
</html>





