<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak - Klinik wanita</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Kontak Kami</h1>
    <nav>
      <a href="index.php">Beranda</a>
      <a href="layanan.php">Layanan</a>
      <a href="kontak.php">Kontak</a>
    </nav>
  </header>

  <main>
    <form action="proses_kontak.php" method="POST">
      <label>Nama:</label><br>
      <input type="text" name="nama" required><br>

      <label>Email:</label><br>
      <input type="email" name="email" required><br>

      <label>Pesan:</label><br>
      <textarea name="pesan" required></textarea><br>

      <button type="submit">Kirim</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 Klinik Kecantikan wanita</p>
  </footer>
</body>
</html>
