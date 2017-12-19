

<?php 
include './db/database.php';
?>

  <?php include 'head_dashboard.php'; ?>
  <?php include 'nav.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Appc2018</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<div id="wrapper">



<body class="fix-sidebar">
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Starter Page</h4>

                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      
                        <ol class="breadcrumb">
                            <li><a href="ENG_dashboard.php">Dashboard</a></li>
                            <li class="active">Abstract</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                      <div class="col-md-12 col-sm-4 col-xs-6 ">
     <div class="col-md-6">  </div>
                   <div class="col-md-4">     
               
       First name:  <?php echo $row_cust['first_name_eg']; ?>
          <br> Last name:   <?php echo $row_cust['last_name_eg']; ?>
       <br>Email: <?php echo $row_cust['email']; ?>
          <br>Password:   <?php echo $row_cust['custPassword']; ?>  <br>
                        country:  <?php echo $row_cust['country']; ?>  <br>
                     
       <hr> 
                                </div>
                          </div>      
                </div>
           

                <div class="row">
                    <div class="col-md-12">
                 
                        <div class="white-box">
                        
        
            
             <form action="uplond_insert.php" method="post"  enctype="multipart/form-data">
                       <input type="file" name="image" value="image" > เลือกไฟล์ Abstract file(*.doc, *.docx)
                    
                 <input type="hidden" name="frmcontact_firstname"value="<?php echo $row_cust['first_name_eg']; ?>">
                 <input type="hidden" name="frmcontact_familyname"value="<?php echo $row_cust['custPassword']; ?>">
                 <input type="hidden" name="email"value="<?php echo $row_cust['email']; ?>">
                                <center>
                                      
                                        <input class="md-btn md-btn-primary " type="submit" value="Save"> </center>
                                     </form>
                            

                    </div>
                </div>
   
                               
                    </div>
                </div>
                </div>
        
          
         
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; APPC2018.COM </footer>
  
<!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

