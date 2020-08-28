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

    <h3><center>Tampil Absen Siswa</h3>
    <a class="btn btn-sm btn-success" style="margin-bottom: 20px" href="index.php">Input Data Siswa</a>
    <table class="table table-bordered">
      <thead>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Tanggal</th>
        <th>Absen</th>
      </thead>

      <?php include 'koneksi.php';
      $no=1;
      $data = mysqli_query($koneksi, "SELECT * from absen");
      while ($d = mysqli_fetch_array($data)) {
          ?>
      <tr>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama_siswa'] ?></td>
          <td><?php echo $d['tgl'] ?></td>
          <td><?php echo $d['kondisi'] ?></td>
        </tr>
      </tr>
    <?php
      } ?>
    </table>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
