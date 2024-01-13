<?php 
include('trydb.php');
if(isset($_POST['save'])){
    $user=$_POST['user'];
    $email=$_POST['email'];
$sql=mysqli_query($con,"INSERT INTO tt(`user` ,`email`) VALUES('$user','$email')");
if(!$sql){
echo"not inserted";
}
else{
    echo"data inserted";
}
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Wedding
  </title>
  <link rel="icon" type="image/x-icon" href="./img/f6.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <style>
    .owl-slider {
      text-align: center;
      margin-top: 100px;
    }

    .owl-nav button {
      position: absolute;
      top: 50%;
      background-color: #000;
      color: #fff;
      margin: 0;
      transition: all 0.3s ease-in-out;
    }

    .owl-carousel {
      display: flex;
      overflow-x: hidden;
    }

    .owl-nav button.owl-prev {
      left: 0;
    }

    .owl-nav button.owl-next {
      right: 0;
    }

    .owl-dots {
      text-align: center;
      padding-top: 15px;
    }

    .owl-dots button.owl-dot {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      display: inline-block;
      background: #ccc;
      margin: 0 3px;
    }

    .owl-dots button.owl-dot.active {
      background-color: #000;
    }

    .owl-dots button.owl-dot:focus {
      outline: none;
    }

    .owl-nav button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.38) !important;
    }

    span {
      font-size: 70px;
      position: relative;
      top: -5px;
    }

    .owl-nav button:focus {
      outline: none;
    }
  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</head>

<body>

 <!-- Button trigger modal -->
<button type="button" class="btn" style="color: #630436 border-box;" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   



    <div class="container">
        <h2>Student Details</h2>
      <button type="button"  data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
      <div class="modal" id="Login">
      <div class="modal-dialog">
      <div class="modal-content">
      <h4 class="modal-title" id="exampleModalLabel">Modal title</h4>
      <button class="btn btn-primary" type="button" data-dismiss="modal">&times;</button>
      <div class="modal-body">
          <!--Form start-->
<div class="add-form">
    <form method="POST">
        <div class="form-group">
            <label>User</label>
            <input class="form-control" type="text">
        </div>

        <div class="form-group">
            <label>User</label>
            <input class="form-control" type="email">
        </div>
    </form>
    </div>
    </div>

    <!--Modal footer-->
    <div>
    <button type="submit" class="btn btn-success btn-block">submit</button>
    </div>

    </div>
    </div>
    </div>
    </div>



      <!--  <form method="POST" action="">
          <div class="form-row">
            <div class="form-group col-md-6">
            <div class="form-group">
            <label for="inputAddress">Name</label>
            <input type="text" class="form-control" id="user" name="user">
          </div>
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary" name="save">Sign in</button>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary badge-pill"style=" width: 80px;" data-dismiss="modal">Exit</button>
      </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary badge-pill"style=" width: 80px;" data-dismiss="modal">Exit</button>
      </div>
    </div>
  </div>
</div>-->
  <br>
  <div class="owl-slider">
    <h3>Wedding photos</h3>
    <div id="carousel" class="owl-carousel mt-4">
      <div class="item">
        <img src="./img/cd1.jpg" alt="1000X1000">
      </div>
      <div class="item">
        <img src="./img/cd2.jpg" alt="">
      </div>
      <div class="item">
        <img src="./img/cd3.jpg" alt="">
      </div>
      <div class="item">
        <img src="./img/cd5.jpg" style="height: 180px; width:100%;"alt="">
      </div>
      <div class="item">
        <img src="./img/md.jpg" alt="">
      </div>
      <div class="item">
        <img src="./img/cd3.jpg" alt="">
      </div>
      <div class="item">
        <img src="./img/Alleppey.webp" alt="">
      </div>
      <div class="item">
        <img src="./img/Ranthambore.webp" alt="">
      </div>
      <div class="item">
        <img src="./img/agi.jpg" alt="">
      </div>
      <div class="item">
        <img src="./img/Goa.webp" alt="">
      </div>
    </div>
  </div>
  <script>
    jQuery("#carousel").owlCarousel({
      autoplay: true,
      rewind: true,
      /* use rewind if you don't want loop */
      margin: 20,
      /*
animateOut: 'fadeOut',
animateIn: 'fadeIn',
*/
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        1366: {
          items: 4
        }
      }
    });
  </script>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
</body>

</html>