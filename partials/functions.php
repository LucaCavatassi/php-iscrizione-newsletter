<!-- EMAIL CONTROLLER -->
<?php 
$user_email = $_GET["user_email"] ?? "Nessun email.";

$valid = false;

if (str_contains($user_email, "@") && str_contains($user_email, ".")) {
    $valid = true;
};
?>