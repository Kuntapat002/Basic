<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJmercury</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.rollingstone.com/wp-content/uploads/2018/10/BOHEMIAN-RHAPSODY-Gwilym-Lee-Brian-May-and-Rami-Malek-Freddie-Mercury.jpg?resize=1800,1200&w=1800   " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://static.independent.co.uk/2021/11/19/09/23435178-high_res-freddie-mercury-the-final-act.jpg?width=1200" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.majorcineplex.com/uploads/content/images/Bohemain3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php
    include("footer.php");
    ?>
</body>
</html>