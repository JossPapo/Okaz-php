<?php
require_once 'templates/header.php';

function getCategories()
{
    return[
        ["name" => "Jeux Vidéos", "icon" => "joystick"],
    ["name" => "Vêtements", "icon" => "tag"],
    ["name" => "Meubles", "icon" => "house"],
    ]
}
?>




<?php
require_once 'templates/footer.php'
?>