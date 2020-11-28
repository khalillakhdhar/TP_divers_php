<html>

<head>
    <title>Salaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form>
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
                One of three columns
            </div>

        </div>
    </div>




</body>

</html>