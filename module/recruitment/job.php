<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HRIS Application | Recruitment Data</title>

    <!-- Bootstrap -->
    <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../assets/css/custom.min.css" rel="stylesheet">
  </head>

<?php
	include'sidebar.php';
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Lowongan Pekerjaan</h3>
              </div>
			</div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group" align="left">
										<label> Divisi </label>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
											<select name="Divisi" class="form-control" required>
												<option selected="selected" disabled="disabled">- Pilih Divisi -</option>
											<?php
												$Query	=	mysql_query("SELECT * FROM tbl_m_status_pernikahan");
												while($f=	mysql_fetch_array($Query)){
											?>
												<option value="<?php echo $f['id_status']; ?>"><?php echo $f['status']; ?></option>
											<?php
												}
											?>
											</select>
											</div>
										</div>
				</div>
				
				<div class="form-group" align="left">
										<label> Jabatan </label>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
											<select name="Divisi" class="form-control" required>
												<option selected="selected" disabled="disabled">- Pilih Jabatan -</option>
											<?php
												$Query	=	mysql_query("SELECT * FROM tbl_m_status_pernikahan");
												while($f=	mysql_fetch_array($Query)){
											?>
												<option value="<?php echo $f['id_status']; ?>"><?php echo $f['status']; ?></option>
											<?php
												}
											?>
											</select>
											</div>
										</div>
				</div>
				
				<div class="form-group" align="left">
										<label> Status </label>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
											<select name="Divisi" class="form-control" required>
												<option selected="selected" disabled="disabled">- Pilih Status -</option>
											<?php
												$Query	=	mysql_query("SELECT * FROM tbl_m_status_pernikahan");
												while($f=	mysql_fetch_array($Query)){
											?>
												<option value="<?php echo $f['id_status']; ?>"><?php echo $f['status']; ?></option>
											<?php
												}
											?>
											</select>
											</div>
										</div>
				</div>
				
				<div class="form-group" align="left">
										<label> Pendidikan </label>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
											<select name="Divisi" class="form-control" required>
												<option selected="selected" disabled="disabled">- Pilih Pendidikan -</option>
											<?php
												$Query	=	mysql_query("SELECT * FROM tbl_m_status_pernikahan");
												while($f=	mysql_fetch_array($Query)){
											?>
												<option value="<?php echo $f['id_status']; ?>"><?php echo $f['status']; ?></option>
											<?php
												}
											?>
											</select>
											</div>
										</div>
				</div>
				
				<div class="form-group" align="left">
										<label> Skill Requirement </label>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
											
											</div>
										</div>
				</div>
				
				<div class="form-group" align="left">
										<label>  Deskripsi Pekerjaan </label>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6">
											
											</div>
										</div>
				</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../assets/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/custom.min.js"></script>
  </body>
</html>
