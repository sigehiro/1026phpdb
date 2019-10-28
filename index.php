<?php
$setpage = '';
if(isset($_GET['kind']) && $_GET['kind'] !== ''){
  $setpage = $_GET['kind'].'.php';
  header('Location: ' . $setpage);
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/customstyle.css">

  <title>1018授業</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">★Flavor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="ナビゲーションボタン">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
              <a class="nav-link" href="#" >All About<span class="sr-only">(current)</span></a>
              
             </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Place</a>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
             </li>
          </ul>
          <form action="" method="GET">
              <div class="form-group">
                <label for="exampleFormControlSelect1">選択</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kind">
                  <option value="cafe">cafe</option>
                  <option value="beauty">beauty</option>
                  <option value="medical">medical</option>
                </select>
                <button>切り替え</button>
          </form>
        </div>
  </nav>
  <div id="carousel-1" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/coffee1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/coffee5.jpeg"alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/coffee6.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      <!-- <img src="assets/images/coffee1.jpeg" alt="おすすめカフェ〜" class="img-fluid"> -->
      <!-- 上記のfluid画面の大小した時に自動補正が働いてくれて画面サイズと写真が付いてくる。-->
      <!-- メインヴィジュアる 終了-->
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4 md-3">
             <div class="card"　class="card-img-top">
                <img src="assets/images/coffee2.jpeg" alt="">
                <div class="card-body">
                    <h3 class="title">What we're all about</h3>
                    <p class="card-text">At the end of the day, it all comes down to coffee. But to get there it takes a dedicated, knowledgeable team with a sustainable approach.</p>
                    <a href="#" class="btn btn-primary">Go</a>
                </div>
              </div>
          </div>
          <div class="col-md-4 md-3">
              <div class="card"　class="card-img-top">
                 <img src="assets/images/coffee3.jpeg" alt="">
                 <div class="card-body">
                     <h3 class="title">Removing only caffeine</h3>
                     <p class="card-text"> Find out how we really achieve coffee that tastes so good you don't miss the caffeine.</p>
                     <a href="#" class="btn btn-primary">Go</a>
                 </div>
               </div>
           </div>
           <div class="col-md-4 md-3">
              <div class="card"　class="card-img-top">
                 <img src="assets/images/coffee4.jpeg" alt="">
                 <div class="card-body">
                     <h3 class="title">Amazing decaf is near you</h3>
                     <p class="card-text">Because you love coffee, but don't always want the caffeine, look for the Swiss Water® logo or ask how your coffee was decaffeinated.</p>
                     <a href="#" class="btn btn-primary">Go</a>
                 </div>
               </div>
           </div>
        </div>
      </div>
        <!-- .col-md-4終了-->
　　　　　<div class="container mt-5">
          <div class="iframe-wrapper">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7850.274753646112!2d123.90288862429827!3d10.330889320499157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999218ad96ccd%3A0x73cd2c6cb520d2c!2z44K744OWIOOCu-ODliBJVCDjg5Hjg7zjgq8!5e0!3m2!1sja!2sph!4v1571393301583!5m2!1sja!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
        <!-- 地図終了 -->
        <div class="container mt-5">
          <div class="iframe-wrapper">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/kbtMDlealpM?start=72" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <!-- ようつべ終了 -->
        <!-- お問い合わせフォーム -->
        <div class="container">
          <h2 class="mt-3">Contactform</h2>
          <form method="POST" action="check.php">
            <div class="form-group">
              <label for="nickname">nickname</label>
              <input type="text" class="form-control" id="nickname" name="nickname" aria-describedby="emailHelp" placeholder="nickname">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp2" placeholder="Email-address">
              <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Message</label>
              <textarea class="form-control" id="Message" aria-describedby="emailHelp3" placeholder="200文字以内にしてください" name="message"></textarea>
              <small id="emailHelp3" class="form-text text-muted">Feel free to write anything you want.</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="Check1">
                <label class="form-check-label" for="Check1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

<!-- レスポシブに対応 -->
        <div class="bg-dark mt-5 py-4 text-light">
          <p class="text-center"><small>(c)vaccmの部屋</small></p>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html＞