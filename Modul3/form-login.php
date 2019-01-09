<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="validasi.js"></script>
</head>
<body>
    <?php
session_start();
$username = 'Rifqi';
$password = 'yanuar';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username;
        // display_login_form();
        echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        // header("Location: admin.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}
else {
    display_login_form();
}
function display_login_form(){?>
  <div class="container">
      <img src="man1.png">
  <h1>Login</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <label for="">Username :</label>
    <input type="text" name="username" id="username" placeholder="Enter Username"><br>
    <label for="">Password :</label>
    <input type="password" name="password" id="password" placeholder="Enter Password"><br>
    <div class="log">
    <button type="submit" name="submit" value="submit" onclick="return validasilogin()">Login</button>
    </div>
    </form>
<?php } ?>

    </form>
    </div>
</body>
</html>
