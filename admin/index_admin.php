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
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top ">
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
                            <a class="nav-link active" aria-current="page" href="./index_admin.php">Home</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form.php">Form Pengiriman</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="bg-image">
        
        <div id="box">
            <div class="content">
                <h1>Daftar Transaksi</h1><br>
             </div>
        <table class="table table-success table-striped">
					<thead>
						<tr>
							<th>No Resi</th>
							<th>Nama Pengirim</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <td>111232</td>
                        <td>joko</td>
                        <td>otw</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                        </td>
					</tbody>
				</table>
			</div>
    </div>
</body>
</html>