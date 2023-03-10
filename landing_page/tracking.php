<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Cek Ongkir</title>
    <link rel="stylesheet" href="./css cek-harga/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>	
    <script src="track.js"></script>
<header>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./img/warna 5.png" alt="Logo" width="auto" height="30" class="d-inline-block align-text-top">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.html">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./cek-harga.php">Cek Ongkir</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./tracking.php">Cek Resi</a>
        </li>
   
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="content">
<div>
		<h4 id="tracking">Tracking Paket</h4>
</div>
<div class="row" >

  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <div class="content-tracking">
        <form method="POST" action="" class="form-tracking" id="form-tracking">			
          <label id="title">Masukkan Nomor Resi</label>
          <input id="position" type="text" class="form-control" name="resi" placeholder="Nomor Resi">
          <button id="position" type="submit" class="button" >Submit</button>
        </form>
	</div>
      </div>
    </div>
  </div>

  <div class="col-sm-8" id="detail">
    
  </div>
</div> 
	<!-- <div id="detail">
		
	</div> -->
</div>

<footer>
  <div class="footer-content">
    <div class="footer-item">
      <img src="./img/Group 10.png" alt="">
    </div>

    <div class="footer-item">
    <h5>GET IN TOUCH</h5>
        <a href="./index.html">Home</a>
        <a href="./cek-harga.php">Cek Ongkir</a>
        <a href="./tracking.php">Cek Resi</a>
    </div>

    <div class="footer-item">
      <h5>FOLLOW US</h5>
        <div class="footer-icon">
          <a href=""><img src="./img/instagram.png" alt=""></a>
          <a href=""><img src="./img/twitter.png" alt=""></a>
          <a href=""><img src="./img/play.png" alt=""></a>
          <a href=""><img src="./img/facebook.png" alt=""></a>
        </div>
    </div>
  </div>

  <div class="footer-credit">
    <p>Copyright&copy; All rights reserved | This website is made with ??? by Group 5</p>
  </div>

</footer>

</body>
</html> 
