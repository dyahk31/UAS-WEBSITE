<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color:rgba(26, 25, 25, 1);">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <img src="mobil_login.png" alt="logo">
                    </div>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav"">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"></li>
                            <a class="nav-link active" aria-current="page" href="index_admin.php">Home</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form/form.php">Form Pengiriman</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  <div class="container">
    <h3>Pengirim</h3>
    <form action="action-input-data.php" method="POST" name="form-input-data" class="row g-3">
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">nama</label>
          <input type="text" class="form-control" name="inputnama_pengirim">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">alamat</label>
          <input type="text" class="form-control" name="inputalamat_pengirim" placeholder="jl. bikini bottom">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">telepon</label>
          <input type="text" class="form-control" name="inputtelepon_pengirim" placeholder="+62 12345">
        </div>
        
        <div class="col-md-4">
          <label for="inputState" class="form-label">Kabupaten</label>
          <select name="inputkbt_pengirim" class="form-select">
            <option selected></option>
            <option value="dps">Denpasar</option>
            <option value="gyr">Gianyar</option>
            <option value="tbn">Tabanan</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" name="inputkos_pengirim">
        </div>
        <div class="col-12">
        </div>
      
      <h3>Penerima</h3>
      
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">nama</label>
          <input type="text" class="form-control" name="inputnama_penerima">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">alamat</label>
          <input type="text" class="form-control" name="inputalamat_penerima" placeholder="jl. bikini bottom">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">telepon</label>
          <input type="text" class="form-control" name="inputtelepon_penerima" placeholder="+62 12345">
        </div>
        
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" name="inputkos_penerima">
        </div>
        <div class="col-12">
        </div>
        <h3>Barang</h3>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" name="nama_barang">
        </div>
        <div class="col-12">
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Berat Barang</label>
          <input type="int" class="form-control" name="berat_barang">
        </div>
        <div class="col-12">
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" value="Submit" name="Submit"></input>
        </div>
      </form>
    </div>
</body>
</html>