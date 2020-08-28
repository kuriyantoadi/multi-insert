<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container">

    <h3 style="margin-bottom: 20px"><center>Tabel Siswa</h3>
    <form class="" action="input.php" method="post">
    <table class="table table-bordered">

      <tr>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Kehadiran</th>
      </tr>
      <?php include 'koneksi.php';
      $data = mysqli_query($koneksi, "SELECT * from siswa");
      while ($d = mysqli_fetch_array($data)) {
          ?>
      <tr>
        <td><?php echo $d['nama_siswa'] ?></td>
        <td><?php echo $d['kelas'] ?></td>
        <td>
          <input type="hidden" name="nama_siswa[]" value="<?php echo $d['nama_siswa'] ?>">
          <center><input type="checkbox" name="absen[]" value="hadir">
        </td>
      </tr>
    <?php
      } ?>
    </table>
    <center><input type="submit" name="" value="submit" class="btn btn-info">
  </form>

  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
