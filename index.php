<html>

<head>
    <title>Salaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php
    $taxes = 0;
    if (isset($_POST['salaire'])) {

        $s = $_POST['salaire'];
        if ($s < 500)
            $taxes = 0;
        else if ($s < 1500)
            $taxes = $s * 0.09;
        else
            $taxes = $s * 0.15;
    }
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="index.php" method="POST">
                    <table class="table table-borderless">
                        <tr>
                            <td align="center" colspan="2">
                                <h1>Calcule de salaire</h1>
                            </td>
                        </tr>
                        <tr>
                            <td>Nom:</td>
                            <td><input type="text" required placeholder="votre nom ici" class="form-control" name="nom"></td>
                        </tr>
                        <tr>
                            <td>Prenom:</td>
                            <td><input type="text" required placeholder="votre prenom ici" class="form-control" name="prenom"></td>
                        </tr>
                        <tr>
                            <td>Salaire Brute</td>
                            <td><input type="text" class="form-control" required placeholder="votre salaire ici" name="salaire"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2">
                                <input type="submit" class="btn btn-primary" value="calculer">
                            </td>
                        </tr>
                    </table>



                </form>
            </div>
            <div class="col-sm">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="2">
                            <h1>Détailles de paiement</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Nom complet</td>
                        <td><?php
                            if (isset($_POST['nom']))
                                echo $_POST['nom'] . " " . $_POST['prenom']; ?>

                        </td>

                    </tr>
                    <tr>
                        <td>Salaire originale</td>
                        <td>
                            <?php
                            if (isset($_POST['salaire']))
                                echo $_POST['salaire'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Taxe</td>
                        <td>

                            <?=
                                $taxes;
                            ?>
                        </td>

                    </tr>
                    <tr>
                        <td>Salaire nette</td>
                        <td>
                            <?php
                            if (isset($_POST["salaire"])) {
                                $nette = $_POST["salaire"] - $taxes;
                                echo $nette;
                            }
                            ?>
                        </td>

                    </tr>

                </table>
            </div>

        </div>
    </div>




</body>

</html>