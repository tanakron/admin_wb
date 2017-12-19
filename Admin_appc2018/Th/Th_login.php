       <?php include 'head_dashboard.php'; ?>   <?php include 'nav.php'; ?>


      <body>
    <section id="wrapper" class="login-register">
         <div class="container-fluid">
          
                <!-- /.col-lg-12 -->
            </div>
        <div class="login-box login-sidebar">
            
            
            
            <div class="white-box">
                <form class="form-horizontal form-material" id="form1" action="Th_login_go.php" method="post">
                    <img src="img/webhead-959.png"  width="50%"alt="Home" />
                     
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                             เข้าสู่ระบบ
                             <input id="custUsername" type="text" class="form-control" placeholder=" Email"  name="email" smk-text="กรุณากรอก Email" required>
                          </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" placeholder="Password" name="custPassword" smk-text="กรุณากรอก Password" required> </div>
                    </div>
                  
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="Th_register.php" class="text-primary m-l-5"><b>สร้างบัญชี</b></a></p>
                        </div>
                    </div>
                </form>
             
            </div>
        </div>
    </section>
        
        
        
     

        <script src="./admin/bootstrap/js/smoke.min.js"></script>
        <script src="./admin/bootstrap/js/spin.min.js"></script>

        <script>
            $(document).ready(function () {

                $("#custUsername").focus();

                $('#form1').on("submit", function (e) {
                    if ($('#form1').smkValidate()) {
                        $.post("login_go.php", $("#form1").serialize())
                                .done(function (data) {
                                    if (data.status === "danger") {
                                        $.smkAlert({text: data.message, type: data.status});
                                        $('#form1').smkClear();
                                        $("#custUsername").focus();
                                    } else {
                                        $(location).attr('href', 'services.php');
                                    }
                                });
                        e.preventDefault();
                    }
                    e.preventDefault();
                });

            });
        </script>

    </body>
</html>