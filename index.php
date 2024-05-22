<?php 

$user_email = $_GET["user_email"] ?? "Nessun email.";
$valid = false;

if (str_contains($user_email, "@") && str_contains($user_email, ".")) {
    $valid = true;
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
                <h1>Iscriviti alla Newsletter!</h1>
                <form action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="user_email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    
                    <div class="mb-3">
                        <?php if (isset($valid) && $valid === true) {?>
                            <?php echo "<span class='alert alert-success'>Email valida!</span>" ?>
                        <?php } else {?>
                            <?php echo "<span class='alert alert-danger'>Email  non valida!</span>" ?>
                        <?php }?>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>