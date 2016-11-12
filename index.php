<!-- Pablo González Rubio - 2016 -->
<?php

$error = isset($_GET['error']);

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
                            <li class="active">
                                <a href="#">Index</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron">
                <h2>Index</h2>
                <form class="navbar-form" action="formulari.php" method="post">
                    <hr />
                    <div class="form-group">
                        <input class="form-control" placeholder="Nom client" type="text" name="name"/>
                        <?php if($error):?>
                        <span class="label label-danger">El camp no pot estar buit</span>
                        <?php endif; ?>
                    </div>
                    <p>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Introducció de dades</button>
                        </div>
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