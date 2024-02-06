<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 123 Jadi Anime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pemasuk Data Guru</a>
        <a class="nav-link" href="index-siswa.php">Data Siswa</a>
        <a class="nav-link" href="data_upload.php">Data Upload</a>
        <a class="nav-link" href="login.php">Masuk</a>
      </div>
    </div>
  </div>
</nav>
      <div class="container mt-4">
        <h2>Data Upload</h2><br>
        <a class="btn btn-primary" href="form-upload.php" role="button">Upload</a>
        <br><br>
        <table class="table table-striped">
        <thead>
                <tr>
                    <th>Id </th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Tipe</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
$query ="SELECT * FROM gambar"; 
$sql = mysqli_query($db, $query);
$row = mysqli_num_rows($sql);

if($row > 0){
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['id_gambar']. "</td>";
        echo "<td><img src='image/".$data['nama']."' width='100' height='100'></td>";
        echo "<td>".$data['nama']. "</td>";
        echo "<td>".$data['ukuran']. "</td>";
        echo "<td>".$data['tipe']. "</td>";
        echo "<td>
        <a href='form-upload.php?edit=" .$data['id_gambar'] . "' class='btn-warning'>Edit</a>
        <a href='upload.php?hapus=" .$data['id_gambar'] . "' class='btn-info'>Delete</a>
           </td>";
        echo "</tr>";
    }

}else{
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</tbody>
     </table>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>