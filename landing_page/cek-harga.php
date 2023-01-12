<?php
$connection = new mysqli('localhost','root','','paket');
$query = ("SELECT kota FROM daftar");

$result = mysqli_query($connection,$query);
$result2 = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Cek Ongkir</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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

<section>
  <div class="section-form">
    <div class="card" id="form-card">
      <div class="card-body">
        <h5 id="tracking">CEK BIAYA ONGKOS KIRIM</h5>
        <form action="harga.php" class="form-ongkir" method="post" name ="form-ongkir">

          <div class="form-input">
            <label for="asal">Asal</label>
            <!-- <input type="text" placeholder="Masukkan asal pengiriman"> -->
            <select id="asal" name="asal">
							<?php while($row = mysqli_fetch_array($result)){ ?>
								<option><?php echo $row[0]; ?></option>
							<?php  } ?>
						</select><br/>
          </div>

          <div class="form-input">
            <label for="tujuan">Tujuan</label>
            <!-- <input type="text" placeholder="Masukkan tujuan pengiriman" class="form-tujuan"> -->
            <select id="tujuan" name="tujuan">
							<?php while($row = mysqli_fetch_array($result2)){ ?>
								<option><?php echo $row[0]; ?></option>
							<?php  } ?>
						</select><br/>
          </div>

          <div class="form-input">
            <label for="berat">Berat</label>
            <!-- <input type="number" placeholder="Masukkan berat pengiriman" class="form-berat" name="berat" id="berat"> -->
            <input type="text" name="berat" id="berat" size="30" placeholder="Satuan : Kilogram(kg)"><br/>
          </div>

          <div class="form-input">
            <label for="paket">Paket</label>
            <!-- <input type="text" placeholder="Masukkan tujuan pengiriman" class="form-tujuan"> -->
            <select type="text" name="paket" id="paket" > 
							<option>Regular</option> 
							<option>Express</option> 
							<option>Flash</option>  
						</select>
          </div>
          <div class="ket">
						<p> KETERANGAN : </p>
						<p>1. Paket "Regular" lama pengiriman sekitar 5-7 hari </p>
						<p>2. Paket "Express" lama pengiriman sekitar 3-4 hari </p>
						<p>3. Paket "Flash" lama pengiriman sekitar 1-2 hari </p>
          </div>

         <!-- <button class="input-btn">
          CEK
         </button> -->

         <input type="submit" name="save" id="save" value="Cek Harga" onclick="saveForm(); return false;">

        </form>
      </div>
    </div>
  </div>
</section>

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
    <p>Copyright&copy; All rights reserved | This website is made with ♥ by Group 5</p>
  </div>

</footer>

<script type="text/javascript">  

					function numberCheck(berat) {
						var regex = /^\d+$/;
						return regex.test(berat);
					}

					function saveForm(){  
						var asal = document.getElementById('asal').value;
						var tujuan = document.getElementById('tujuan').value;
						var berat = document.getElementById('berat').value;

						if(asal == ''){  
							alert('Kota asal harus diisi !');  
							document.getElementById('asal').focus();  
							return false;  
						}  

						if(tujuan == ''){  
							alert('Kota tujuan harus diisi !');  
							document.getElementById('tujuan').focus();  
							return false;  
						}

						if(berat == ''){  
							alert('Berat barang harus diisi !');  
							document.getElementById('berat').focus();  
							return false;  
						} else if(!numberCheck(berat)){
							alert("Masukkan angka saja !");
							return;
						}
						document.getElementById('form-ongkir').submit();  
					} 

				</script>

</body>
</html> 
