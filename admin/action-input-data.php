<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//cek button    
    if($_POST['Submit'] == "Submit") {
    $namapengirim = $_POST['inputnama_pengirim'];
    $alamatpengirim = $_POST['inputalamat_pengirim'];
    $teleponpengirim = $_POST['inputtelepon_pengirim'];
    $kabupatenpengirim = $_POST['inputkbt_pengirim'];
    $kode_pospengirim = $_POST['inputkos_pengirim'];

    $namapenerima = $_POST['inputnama_penerima'];
    $alamatpenerima = $_POST['inputalamat_penerima'];
    $teleponpenerima = $_POST['inputtelepon_penerima'];
    $kode_pospenerima = $_POST['inputkos_penerima'];

    $namabarang = $_POST['nama_barang'];
    $beratbarang = $_POST['berat_barang'];
   
    //Masukan data ke Table
    
    $inputpengirim    ="INSERT INTO pengirim (nama,alamat,kabupaten,kode_pos,telepon) VALUES ('$namapengirim','$alamatpengirim','$teleponpengirim','$kabupatenpengirim','$kode_pospengirim')";
    $inputpenerima    ="INSERT INTO penerima (nama_penerima,alamat_penerima,kode_pos,telepon_penerima) VALUES ('$namapenerima','$alamatpenerima','$teleponpenerima','$kode_pospenerima')";
    $inputbarang      ="INSERT INTO barang (nama_barang,berat_barang) VALUES ('$namabarang','$beratbarang')";
    if ($conn->query($inputpengirim) == TRUE) {
    if($conn->query($inputpenerima) == TRUE){

      if($conn->query($inputbarang) == TRUE){

      }
    }
   
    ?>
        <script language="JavaScript">
        alert('Input Data penerima Berhasil');
        document.location='action-input-data.php';
        </script>
    <?php
  
    }
    else {
      
    //Jika Gagal
    echo "error : ". $sql. "<br>". $conn->error;
    }
}
?>