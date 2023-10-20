<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h1>Kalkulator David</h1>
  <form action="hitung.php" method="POST">
    <div class="form-group">
      <label for="angka1">Angka Pertama:</label>
      <input type="number" class="form-control" id="angka1" name="angka1" required>
    </div>
    <div class="form-group">
      <label for="operasi">Operasi:</label>
      <select class="form-control" id="operasi" name="operasi">
        <option value="tambah">Penambahan (+)</option>
        <option value="kurang">Pengurangan (-)</option>
        <option value="kali">Perkalian (*)</option>
        <option value="bagi">Pembagian (/)</option>
      </select>
    </div>
    <div class="form-group">
      <label for="angka2">Angka Kedua:</label>
      <input type="number" class="form-control" id="angka2" name="angka2" required>
    </div>
    <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
  </form>
</div>

</body>
</html>