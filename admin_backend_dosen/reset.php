<?php 
require_once "../database/config.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="wrapper" style="zoom:90%" !important>
    <?php 
      $peran = 'dosen';
      mysqli_query($con, "TRUNCATE TABLE tb_dosen") or die (mysqli_eror($con));
      mysqli_query($con, "DELETE FROM tb_pengguna WHERE peran ='$peran'") or die (mysqli_eror($con));
    ?>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Berhasil", "Data Dosen telah direset", "success");
  
  setTimeout(function(){ 
   window.location.href = "../admin_backend_dosen";

  }, 1000);
</script> 
</body>
</html>