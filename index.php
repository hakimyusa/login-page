<?php include 'koneksi.php'; ?>

<?php
//inisialisasi session
session_start();

//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'Auth failed!';
  header('Location: login.php?error=login_first');
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <p>Welcome, <?php echo($_SESSION['username']) ?></p>
  <a href="logout.php">Logout</a>
</body>
</html>

