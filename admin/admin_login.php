<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin_login.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Admin</title>
</head>
<body>
<div class="flex-container">
    <div class="flex-left">
      <div class="bg-image">
        <table>
          <tr>
            <td>
              <div class="logo">
                <img src="mobil_login.png" alt="logo">
              </div>
            </td>
          </tr>
          <tr>
            <td>
            <h1>Kirim-in</h1>
            </td>
          </tr>
          <tr>
            <td>
            <p>Send your love with Kirim-in</p>
            </td>
          </tr>
        </table>
    </div>
    </div>
    <div class="flex-right">
      <div class="isi">
      <center>
        <h1>Login Admin </h1>
        <p>Login with your username and password</p>
        <form action="act_login.php" method="post">
        <table>
            <tr>
                <td>
                <div class="input-group flex-nowrap">
                     <span class="input-group-text" id="addon-wrapping"></span>
                     <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                </td>
            </tr>
            <tr>
                <td>
                <div class="input-group flex-nowrap">
                     <span class="input-group-text" id="addon-wrapping"></span>
                     <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                </td>
            </tr>
            <tr>
                <td><br><input type="submit" class="login" value="Login"></td>
            </tr>
        </table>
        </form>
        </center>
      </div>
    </div>
  </div>
</body>
</html>