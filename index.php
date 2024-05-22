<?php 
require_once __DIR__ . "/partials/functions.php";

// SE L'ARRAY ASSOCIATIVO SESSION NON ESISTE E QUINDI LA SESSIONE NON é INIZIATA, INIZIALA!
if (!isset($_SESSION)){
    session_start();
};


var_dump($_SESSION);

if (isset($valid) && $valid === true) {
    header("Location: ./thank_you.php");
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="py-3">Iscriviti alla Newsletter!</h1>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="user_email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non condivideremo mai la mail con nessuno.</div>
                    </div>
                    
                    <div class="py-3 mb-3">
                        <?php if (isset($valid) && $valid === true) {?>
                            <?php echo "<span class='alert alert-success'>Email valida!</span>"; ?>
                        <?php } else if ((isset($valid) && $valid === false)){?>
                            <?php echo "<span class='alert alert-danger'>Email  non valida!</span>" ?>
                        <?php } else {?>
                            <?php echo "<span class='alert alert-secondary'>Inserisci la tua mail qui sopra!</span>" ?>
                        <?php }?>    
                    </div>

                    <button type="submit" class="btn btn-primary">Iscriviti</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>