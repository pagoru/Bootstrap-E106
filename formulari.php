<!-- Pablo González Rubio - 2016 -->
<?php
if(empty($_GET['name'])){
    header('Location: index.php?error=1');
}

$name = isset($_GET['name']) ? $_GET['name'] : "";
$surnames = isset($_GET['surnames']) ? $_GET['surnames'] : "";
$nif = isset($_GET['nif']) ? $_GET['nif'] : "";
$pob = isset($_GET['pob']) ? $_GET['pob'] : "";
$cp = isset($_GET['cp']) ? $_GET['cp'] : "";
$db = isset($_GET['db']) ? $_GET['db'] : "";
$email = isset($_GET['email']) ? $_GET['email'] : "";
$tf = isset($_GET['tf']) ? $_GET['tf'] : "";
$sex = isset($_GET['sex']) ? $_GET['sex'] : "";
$state = isset($_GET['state']) ? $_GET['state'] : "";

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
                        </p>
                        <p>
                            <input class="form-control" placeholder="NIF" type="text" value="<?php echo $nif;?>" name="nif"/>

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
                        </p>
                        <p>
                            <input class="form-control" placeholder="Telèfon" type="text" value="<?php echo $tf;?>" name="tf"/>
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