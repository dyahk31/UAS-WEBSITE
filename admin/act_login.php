<?php 

  // memulai session
  session_start();

  $database = file_get_contents("http://localhost/UAS/admin/creden.json");
  $database = json_decode($database, TRUE);
  $username = $_POST["username"];
  $password = $_POST["password"];

      $myfile =fopen("creden.json", "r") or die("unable to open file");
      $creden =json_decode(fread($myfile,filesize("creden.json")));

      if ($username == $creden-> username && $password == $creden->password) {
        session_start();
        $_SESSION["username"] = $username;
        header('Location: index_admin.php');
    } 
    else {
        echo "<script>
        alert('Username atau password salah!');
        window.location.href='admin_login.php';
        </script>";

   }
   
  
  