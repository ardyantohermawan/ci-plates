<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PGGK | Data Tables</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=$this->base_url('/assets').$this->asset('/css/bootstrap.min.css')?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=$this->base_url('/assets').$this->asset('/css/AdminLTE.css')?>" />
  <link rel="stylesheet" href="<?=$this->base_url('/assets').$this->asset('/css/skins/_all-skins.min.css')?>" />

  <?=$this->section('style')?>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <?=$this->insert('header')?>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->

    <?=$this->insert('sidebar')?>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?=$this->section('container')?>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <?=$this->insert('footer')?>

  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="<?=$this->base_url('/assets').$this->asset('/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<script src="<?=$this->base_url('/assets').$this->asset('/js/bootstrap.min.js')?>"></script>
<script src="<?=$this->base_url('/assets').$this->asset('/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?=$this->base_url('/assets').$this->asset('/plugins/fastclick/fastclick.js')?>"></script>
<script src="<?=$this->base_url('/assets').$this->asset('/js/app.min.js')?>"></script>
<script src="<?=$this->base_url('/assets').$this->asset('/js/demo.js')?>"></script>

<?=$this->section('javascript')?>

</body>
</html>
