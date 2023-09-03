<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html>
    <head>
        <title>Login </title>
        <link rel="stylesheet" href="assets/css/bootstrap.css?v=<?=time();?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body style="background:#a2c31b;">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 pt-5 mx-auto">
                    <div id="logout">
                        <?php if(isset($_GET['signout'])){?>
                            <div class="alert alert-success">
                                <strong>Vous vous êtes déconnecté avec succès</strong>
                            </div>
                        <?php }?>
                    </div>
                    <div id="notifikasi">
                        <div class="alert alert-danger">
                            <strong>Votre connexion a échoué, vérifiez le nom d'utilisateur et le mot de passe</strong>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                            <img src="assets/img/ENYS.png" style="height: 50px;
    display: block;">
                                <i class="fa fa-sign-in pt-2"></i> S'identifier
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- form berfungsi mengirimkan data input 
                            dengan method post ke proses login dengan paramater get aksi login -->
                            <form method="post" action="proses.php?aksi=login" id="formlogin">
                                <div class="form-group">
                                    <label>Nom d'utilisateur</label>
                                    <input name="user" 
                                        class="form-control" autofocus 
                                        placeholder="Entrez le nom d'utilisateur" type="text" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group -->
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input name="pass" 
                                        class="form-control" 
                                        placeholder="Tapez votre mot de passe" 
                                        type="password" 
                                        required="required" autocomplete="off">
                                </div> 
                                <!-- form-group --> 
                                <div class="form-group">
                                    <button type="submit" name="proses_login" 
                                        class="btn btn-primary btn-block"> Connexion  
                                    </button>
                                </div> 
                                <!-- form-group -->                                                           
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <script>
        // notifikasi gagal di hide
        <?php if(empty($_GET['get'])){?>
            $("#notifikasi").hide();
        <?php }?>
            var logingagal = function(){
                $("#logout").fadeOut('slow');
                $("#notifikasi").fadeOut('slow');
            };
            setTimeout(logingagal, 4000);
        </script> 
    </body>
</html>