<!-- Pablo González Rubio - 2016 -->
<?php

$back = true;

if(isset($_POST['form'])){
    $GLOBALS['errorNvalues'] = "";
    $GLOBALS['error'] = false;
    $back = false;

    addErrorNvalues("name", true);
    addErrorNvalues("surnames", true);
    addErrorNvalues("nif", true);
    addErrorNvalues("pob", false);
    addErrorNvalues("cp", false);
    addErrorNvalues("db", false);
    addErrorNvalues("email", true);
    addErrorNvalues("tf", true);
    addErrorNvalues("sex", false);
    addErrorNvalues("state", false);

    if($GLOBALS['error']){
        header('Location: formulari.php?error=1'.$GLOBALS['errorNvalues']);
    }
}

function addErrorNvalues($name, $obl){
    if(strlen($_POST[$name]) != 0 || !$obl){
        $GLOBALS['errorNvalues'] .= "&value_".$name."=".$_POST[$name];
    } else {
        $GLOBALS['error'] = true;
        $GLOBALS['errorNvalues'] .= "&error_".$name."=1";
    }
}

if($back){
    header('Location: index.php');
}

?>
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
                    <div class="col-md-7"><?php echo $_POST["name"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Cognoms</div>
                    <div class="col-md-7"><?php echo $_POST["surnames"]?></div>
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
                    <div class="col-md-7"><?php echo $_POST["email"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Telèfon</div>
                    <div class="col-md-7"><?php echo $_POST["tf"]?></div>
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
                    <a class="btn btn-danger" href="<?php echo 'formulari.php?error=1'.$GLOBALS['errorNvalues'];?>">Tornar al formulari</a>
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