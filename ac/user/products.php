<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Furniture items</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel="stylesheet" href="./products.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

</head>

<body>
  <!-- partial:index.partial.html -->
  <nav class="flex-nav">
    <div class="container">
      <div class="grid menu">
        <div class="column-xs-8 column-md-6">
          <p id="highlight">Furniture Store</p>
        </div>
        <div class="column-xs-4 column-md-6">
          <a href="#" class="toggle-nav">Menu <i class="ion-navicon-round"></i></a>
          <ul>

            <li class="nav-item"><a href="./index.php">Home</a></li>
            <li class="nav-item"><a href="./about.php">About Us</a></li>
            <li class="nav-item"><a href="./contact.php">Contact Us</a></li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="grid second-nav">
        <div class="column-xs-12">
          <nav>
            <ol class="breadcrumb-list">
              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="./products.php">Furnitures</a></li>

            </ol>
          </nav>
        </div>
      </div>
      <?php


      include('../cont.php');

      $q = "SELECT * FROM `furniture`";
      $res = mysqli_query($connection, $q);

      while ($ress = mysqli_fetch_assoc($res)) {
      ?>
        <div class="grid product">
          <div class="column-xs-12 column-md-7">
            <div class="product-gallery">
              <div class="product-image">
                <img class="active" src="<?php echo $ress["img_url1"] ?>">
              </div>
              <ul class="image-list">
                <li class="image-item"><img src="<?php echo $ress["img_url2"] ?>"></li>
                <li class="image-item"><img src="<?php echo $ress["img_url3"] ?>"></li>
                <li class="image-item"><img src="<?php echo $ress["img_url4"] ?>"></li>
              </ul>
            </div>
          </div>
          <div class="column-xs-12 column-md-5">
            <h1><?php echo $ress['name'] ?></h1>

            <div class="description">
              <p><?php echo $ress['detail'] ?>.</p>
              <!-- <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p> -->
            </div>
            <button type="button" class="add-to-cart" data-toggle="modal" data-target="#exampleModal">contact us</button>
          </div>
        </div>
      <?php
      }

      ?>

    </div>
  </main>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contact Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Beyond Living - By Galaxy Furniture ( Furniture Store Jhotwara
          Jaipur )
          Address: Shop No. 211, Takiya ki chowki, Opp. Power House,
          Near Ravan Gate, Kalwar, Road,, Jhotwara, Jaipur, Rajasthan 302012
          Areas served: Jaipur and nearby areas Hours: Opens 10AM
          Phone: 090243 25271
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
  <footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="grid">
      <div class="column-xs-12">
        <p class="Copyright">&copy; <a href="" title="Arun Exports" target="_blank">Arun Exports</a></p>
      </div>
    </div>
  </footer>
  <!-- partial -->
  <script src="./products.js"></script>

</body>

</html>