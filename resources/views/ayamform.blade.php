<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bejan's Chicken</title>
    <link rel="icon" type="text/css" href="upload/images/room.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper" class="toggled">

        @include('menu')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Form Add Ayam</h1>
                <a href='agen' class="btn btn-secondary">Kembali</a>
                <hr>


                <form class="form-vertical" method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="idlogin" value="">                            
                    
                    <div class="form-group">
                        <label class="control-label" for="email">Jenis</label>
                        <input value="" name="password" placeholder="jenis" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Umur</label>
                        <input value="" name="password" placeholder="umur ..." type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">berat ...</label>
                        <input value="" name="password" placeholder="no telepon ..." type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Tempat</label>
                        <input value="" name="password" placeholder="tempat ..." type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="btnaddmembers">Save Ayam</button>
                    </div>
                </form><!-- /form -->
        
            </div>
        </div>

        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#choosePegawai").hide();
        $("#chooseMahasiswa").hide();

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>
