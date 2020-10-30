<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
    #cont{
        min-height: 600px;
    }
    </style>
    <title>photography</title>
  </head>
  <body>
  <?php include 'partials/_dbconnect.php'?>
    <?php include 'partials/header.php'?>
     <!-- slider start here  -->

     <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-10.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-12.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    <div class="container my-3" id="cont">
    <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
   echo ' <div class="container my-4" id="ques">
   <h1 class="text-center">Get in Touch</h1>
   <form action="/website/_contact.php" method="post">
       <div class="form-group">
           <label for="exampleFormControlInput1">Name</label>
           <input type="text" class="form-control" id="contactname" name="contactname" placeholder="Name">
       </div>
       <div class="form-group">
           <label for="exampleFormControlInput1">Email address</label>
           <input type="email" class="form-control" id="contactmail" name="contactmail"
               placeholder="Email Address">
       </div>

       <div class="form-group">
           <label for="exampleFormControlTextarea1">Message</label>
           <textarea class="form-control" id="message" name="message" rows="3"></textarea>
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
   </form>
</div>';
}
else{
  echo '<div class="container" id="ques">
            <div class="jumbotron jumbotron-fluid my-4">
                        <div class="container">
                           <h1 class="text-center">Oops!</h1>
                           <p class= "text-center">You are not Login. Please Login to contact us.</p>
                        </div>
             </div>
         </div>';
}
 ?>

    </div>
    <!-- end the slider hera -->
    </div>
    <?php include 'partials/_footer.php'?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>