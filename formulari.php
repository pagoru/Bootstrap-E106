<!-- Pablo González Rubio - 2016 -->
<?php

if(empty($_POST['name']) && empty($_GET['error'])){
    header('Location: index.php?error=1');
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $surnames = $nif = $pob = $cp = $db = $email = $tf = $sex = $state = "";
}
if(isset($_GET['error'])){
    $name = isset($_GET['value_name']) ? $_GET['value_name'] : "";
    $surnames = isset($_GET['value_surnames']) ? $_GET['value_surnames'] : "";
    $nif = isset($_GET['value_nif']) ? $_GET['value_nif'] : "";
    $pob = isset($_GET['value_pob']) ? $_GET['value_pob'] : "";
    $cp = isset($_GET['value_cp']) ? $_GET['value_cp'] : "";
    $db = isset($_GET['value_db']) ? $_GET['value_db'] : "";
    $email = isset($_GET['value_email']) ? $_GET['value_email'] : "";
    $tf = isset($_GET['value_tf']) ? $_GET['value_tf'] : "";
    $sex = isset($_GET['value_sex']) ? $_GET['value_sex'] : "";
    $state = isset($_GET['value_state']) ? $_GET['value_state'] : "";
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
                                <a href="#">Formulari</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron">
                <h2>Fomulari</h2>
                <form class="navbar-form" action="resum.php" method="post">
                    <hr />
                    <div class="form-group">
                        <p>
                            <input class="form-control" type="text" value="<?php echo $name;?>" disabled/>
                            <input style="display: none;" type="text" value="<?php echo $name;?>" name="name"/>
                        </p>
                        <p>
                            <input class="form-control" placeholder="Cognoms" type="text" value="<?php echo $surnames;?>" name="surnames"/>
                            <?php if(isset($_GET['error_surnames'])):?>
                                <h5><span class="label label-danger">El camp no pot estar buit</span></h5>
                            <?php endif; ?>
                        </p>
                        <p>
                            <input class="form-control" placeholder="NIF" type="text" value="<?php echo $nif;?>" name="nif"/>
                            <?php if(isset($_GET['error_nif'])):?>
                                <h5><span class="label label-danger">El camp no pot estar buit</span></h5>
                            <?php endif; ?>
                        </p>
                        <p>
                            <input class="form-control" placeholder="Població" type="text" value="<?php echo $pob;?>" name="pob"/>
                        </p>
                        <p>
                            <input class="form-control" placeholder="Codi postal" type="text" value="<?php echo $cp;?>" name="cp"/>
                        </p>
                        <p>
                            <input class="form-control" placeholder="Data de naixement" type="text" value="<?php echo $db;?>" name="db"/>
                        </p>
                        <p>
                            <input class="form-control" placeholder="Email" type="text" value="<?php echo $email;?>" name="email"/>
                            <?php if(isset($_GET['error_email'])):?>
                                <h5><span class="label label-danger">El camp no pot estar buit</span></h5>
                            <?php endif; ?>
                        </p>
                        <p>
                            <input class="form-control" placeholder="Telèfon" type="text" value="<?php echo $tf;?>" name="tf"/>
                            <?php if(isset($_GET['error_tf'])):?>
                                <h5><span class="label label-danger">El camp no pot estar buit</span></h5>
                            <?php endif; ?>
                        </p>
                        <p>
                            <select class="form-control" name="sex">
                                <option vlaue="Home" <?php echo $sex == "Home" ? "selected" : "";?> >Home</option>
                                <option vlaue="Dona" <?php echo $sex == "Dona" ? "selected" : "";?> >Dona</option>
                            </select>
                        </p>
                        <p>
                            <select class="form-control" name="state">
                                <option vlaue="Casat" <?php echo $state == "Casat" ? "selected" : "";?> >Casat</option>
                                <option vlaue="Solter" <?php echo $state == "Solter" ? "selected" : "";?> >Solter</option>
                                <option vlaue="Vidu" <?php echo $state == "Vidu" ? "selected" : "";?> >Vidu</option>
                                <option vlaue="Separat" <?php echo $state == "Separat" ? "selected" : "";?> >Separat</option>
                                <option vlaue="Altres" <?php echo $state == "Altres" ? "selected" : "";?> >Altres</option>
                            </select>
                        </p>
                    </div>
                    <p>
                        <button class="btn btn-danger">Tornar enrere</button>
                        <button type="submit" class="btn btn-success" name="form">Introducció de dades</button>
                    </p>
                </form>
            </div>

            <footer class="fotter">
                <p>
                    Pablo González Rubio
                </p>
            </footer>
        </div>
    </body>
</html>