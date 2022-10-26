 
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->

<html lang="en">
  <head>
    <!-- <base href="./"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>src/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>src/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>src/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>src/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>src/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>src/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>src/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>src/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>src/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url();?>src/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>src/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>src/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>src/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>src/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>src/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>src/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>src/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url();?>src/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="<?php echo base_url();?>src/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="<?php echo base_url();?>src/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="<?php echo base_url();?>src/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="<?php echo base_url();?>src/assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
     
        <li class="nav-title">Post</li>
        
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>src/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> Post</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>home/index"><span class="nav-icon"></span> All post</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>home/add_post"><span class="nav-icon"></span> Add New</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>home/preview "><span class="nav-icon"></span>Preview</a></li>
          </ul>
        </li>
        
     
      
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
       
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Preview</span></li>
            </ol>
          </nav>
        </div>
      </header>        
      <?php foreach($isi as $data):?>  

      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          
        <div class="card mb-4">
            <div class="card-header">Preview</div>
            <div class="card-body">
          <center>  <dt class="col-sm-3"><?php echo $data['Title'] ?></dt></center>
              <div class="bd-example">
                <dl class="row">
                  
                    <p><?php echo $data['Content'];?></p>
                    <p><?php echo $data['Category'];?></p>
                    <p><?php echo $data['Status'];?></p>
                    </p>
                  </dd>
                 
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
           <?php endforeach;?>
           
           <center><p style="	border: 1px solid silver;
	border-radius: 8px;
	color: black;
	padding: 0.5em;
	margin-right: 0.5em;
	text-decoration: none;border: 1px solid #008cba;
	background-color: #008cba;
	color: white;">  <?=  $this->pagination->create_links(); ?>  </center>

               
              
          </div>
          <!-- /.row-->
        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url();?>src/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="<?php echo base_url();?>src/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url();?>src/vendors/chart.js/js/chart.min.js"></script>
    <script src="<?php echo base_url();?>src/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="<?php echo base_url();?>src/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="<?php echo base_url();?>src/js/main.js"></script>
    <script>
    </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
      
      $('#tabeluser2').DataTable();
      $('#tabeluser3').DataTable();

  });
  </script>
  
  </body>
</html>