<link rel="stylesheet" href="style.css">

<div id="hasil">
	<!-- <div>
		<h2 id="tracking">Hasil Tracking Layanan Ekspedisi</h2>
	</div> -->
  <div class="col-sm-7" id="detail">
    <div class="card">
      <div class="card-body">
	<div id="contTracking">
<?php
	function cek(){
		$resi = $_POST['resi'];
		$connection = new mysqli('localhost','root','','paket');
		$query = ("SELECT t.no_resi, p.nama_pengirim, pa.nama_penerima, b.nama_barang,
			t.asal_kota, t.tujuan_kota,	t.tgl_kirim, t.tgl_terima, t.status FROM transaksi t JOIN pengirim p ON t.id_pengirim = p.id_pengirim 
			JOIN penerima pa ON t.id_penerima = pa.id_penerima JOIN barang b ON t.id_barang = b.id_barang WHERE no_resi = $resi");

		$result = mysqli_query($connection,$query);
	  while($row = mysqli_fetch_array($result)){
?>		
		
<?php
		    echo "<table>
          <thead>
          <tr>
            <th>No Resi</th>
            <th style='padding-right: 40px'>Pengirim</th>
            <th style='padding-right: 40px'>Penerima</th>
            <th style='padding-right: 40px'>Status</th>
          </tr>
          </thead>

          <tbody>
          <br>
            <tr>
              <td>{$resi}</td>
              <td>{$row[1]}</td>
              <td>{$row[2]}</td>
              <td>{$row[8]}</td>
            </tr>
          <br>
            <tr class = 'detail'>
              <td>Barang : {$row[3]}</td>
            </tr>
          <br>
            <tr>
              <td>Kota Asal : {$row[4]}</td>
            </tr>
          <br>
            <tr>
              <td>Kota Tujuan : {$row[5]}</td>
            </tr>
          <br>
            <tr>
              <td>Tanggal Pengiriman : {$row[6]}</td>
            </tr>
          <br>
          ";
           echo '<tr><td>Tanggal Sampai : <br>'; echo $row[7] == "0000-00-00" ? "-" : $row[7]; echo '<br></td></tr>'; 
          echo "
          </table>
          </tbody>"
    
?>
		
<?php
	}
	if (mysqli_num_rows ($result) != 1){
		echo 'Maaf, nomor resi yang anda masukkan tidak terdaftar<br>';
		echo 'Mohon cek kembali nomor resi anda';
?>
<?php	}
}
?>
		<div class="content" style="margin-top:-150px"><?php cek()?>
	</div>
		</div>
      </div>
    </div>
  </div>
</div>