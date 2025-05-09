<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $pesan = htmlspecialchars($_POST['pesan']);

  // Untuk sekarang hanya ditampilkan, bisa disimpan ke DB nanti
  echo "<h1>Terima kasih, $nama!</h1>";
  echo "<p>Email: $email</p>";
  echo "<p>Pesan: $pesan</p>";
} else {
  echo "Akses tidak sah.";
}
?>
