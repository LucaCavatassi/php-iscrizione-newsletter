<!-- EMAIL CONTROLLER -->
<?php 
$user_email = $_POST["user_email"] ?? "Nessun email.";

if (str_contains($user_email, "@") && str_contains($user_email, ".")) {
    $valid = true;
};
?>