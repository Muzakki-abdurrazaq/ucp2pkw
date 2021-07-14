<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <title>Data Buku</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Buku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="create.php">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <?php
        include 'config.php';
        $id = $_GET['id'];
        $bookstore = mysqli_query($koneksi, "select * from bookstore where id='$id'");
        while ($data = mysqli_fetch_assoc($bookstore)){
        ?>
            <div class="container mt-5">
                <p><a href="index.php">Home</a> / Edit Buku / <?php echo $data['Nama buku'] ?></p>
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Data Buku</p>
                    </div>
                    <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Nama buku" class="form-label">Nama Buku</label>
                                <input type="text" class="form-control" id="Nama buku" placeholder="Masukkan Nama Buku" name="Nama buku" value="<?php echo $data['Nama buku']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Kategori buku" class="form-label">Kategori Buku</label>
                                <input type="text" class="form-control" id="Kategori buku" placeholder="Masukkan Kategori Buku" name="Kategoribuku" value="<?php echo $data['Kategori buku']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="Penerbit" placeholder="Masukkan Penerbit" name="Penerbit" value="<?php echo $data['Penerbit']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="Harga" placeholder="Masukkan Harga Buku" name="Harga" value="<?php echo $data['Harga']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Probabilitas diskon" class="form-label">Probabilitas Diskon</label>
                                <input type="text" class="form-control" id="Probabilitas diskon" placeholder="Masukkan Probabilitas Diskon" name="Probabilitas diskon" value="<?php echo $data['Probabilitas diskon']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>