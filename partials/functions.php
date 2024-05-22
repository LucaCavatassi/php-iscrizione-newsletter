<!-- EMAIL CONTROLLER -->
<?php 
$user_email = $_POST["user_email"] ?? null;

if (isset($user_email) && str_contains($user_email, "@") && str_contains($user_email, ".")) {
    $valid = true;
} else if (isset($user_email)){
    $valid = false;
} else {
    $valid = null;
}
?>