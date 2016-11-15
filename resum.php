<!-- Pablo González Rubio - 2016 -->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand">E106</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Index</a>
                            </li>
                            <li class="active">
                                <a href="#">Resum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron">
                <h2>Resum</h2>
                <div class="row">
                    <div class="col-md-4">Nom</div>
                    <div class="col-md-7">
                        <?php if(empty($_POST["name"])):?>
                        <span class="label label-danger">Valor no introduit</span>
                        <?php else: echo $_POST["name"]; endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Cognoms</div>
                    <div class="col-md-7">
                        <?php if(empty($_POST["surnames"])):?>
                            <span class="label label-danger">Valor no introduit</span>
                        <?php else: echo $_POST["surnames"]; endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">NIF</div>
                    <div class="col-md-7"><?php echo $_POST["nif"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Població</div>
                    <div class="col-md-7"><?php echo $_POST["pob"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Codi postal</div>
                    <div class="col-md-7"><?php echo $_POST["cp"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Data de naixement</div>
                    <div class="col-md-7"><?php echo $_POST["db"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Email</div>
                    <div class="col-md-7">
                        <?php if(empty($_POST["email"])):?>
                            <span class="label label-danger">Valor no introduit</span>
                        <?php else: echo $_POST["email"]; endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Telèfon</div>
                    <div class="col-md-7">
                        <?php if(empty($_POST["tf"])):?>
                            <span class="label label-danger">Valor no introduit</span>
                        <?php else: echo $_POST["tf"]; endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">Sexe</div>
                    <div class="col-md-7"><?php echo $_POST["sex"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Estat civil</div>
                    <div class="col-md-7"><?php echo $_POST["state"]?></div>
                </div>
                <p>
                    <a class="btn btn-danger" href="<?php echo 'formulari.php?name='.$_POST["name"];?>">Tornar al formulari</a>
                    <a type="submit" class="btn btn-success" name="form" href="index.php">Tornar al index</a>
                </p>
            </div>

            <footer class="fotter">
                <p>
                    Pablo González Rubio
                </p>
            </footer>
        </div>
    </body>
</html>