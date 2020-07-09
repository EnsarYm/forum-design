<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <title>Document</title>
</head>
<body style="background-color: #2e2e2e;">
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a style="font-size: 28px;" class="navbar-brand text-white" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
  <div class="container mt-5  mb-5">
  <form>
  <div class="form-group">
    <label class="text-white" for="exampleFormControlInput1">Email Adresiniz</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="isim@ornek.com">
  </div>
  <div class="form-group">
    <label class="text-white" for="exampleFormControlInput1">Adiniz</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adiniz">
  </div>
  <div class="form-group">
      <label class="text-white" for="exampleSelect1">Kategori</label>
      <select class="form-control" id="exampleSelect1">
        <option>Kategori Seciniz</option>
        <option>Yazilim</option>
        <option>Tasarim</option>
        <option>Mobil</option>
        <option>Web</option>
      </select>
    </div>
    <script src="ckeditor/ckeditor.js"></script>
<label class="text-white" for="exampleSelect1">Mesajiniz</label>
<textarea class="ckeditor" id="ckeditor1"></textarea>
<button type="submit" class="btn btn-success mt-5 ">Gonder</button>
</form>

</div>
<footer id="footer" class="page-footer bg-dark font-small stylish-color-dark pt-4 mt-5">


<div id="footer" class="container bg-dark text-center  text-md-left">


  <div class="row">

</div>


<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1 text-white">Soru Sor</h5>
  </li>
  <li class="list-inline-item">
    <a href="soru.php" class="btn btn-danger text-white btn-rounded">Sor!</a>
  </li>
</ul>

<hr>

<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1">
      <i class="fab fa-facebook-f"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-tw mx-1">
      <i class="fab fa-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-gplus mx-1">
      <i class="fab fa-google-plus-g"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-li mx-1">
      <i class="fab fa-linkedin-in"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-dribbble mx-1">
      <i class="fab fa-dribbble"> </i>
    </a>
  </li>
</ul>

<div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
  <a class="text-muted" href=""> EnsarYaman</a>
</div>

</footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>