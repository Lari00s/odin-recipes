<?php 
    include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Larissa de Alencar Silva">
    <meta name="description" content="Receitaria é o maior site de receitas do Brasil!">
    <link rel="stylesheet" href="css/style.css">
    <title>Receitaria</title>
</head>
<body>
    <h1>Receitaria</h1>
    <nav class="navbar">
        <ul>
            <li>
                <a href="<?=$BASE_URL?>" target="_self" rel="noreferrer">Início</a>
            </li>
            <li>
                <a href="<?=$BASE_URL?>/macarrao.php" target="_self" rel="noreferrer">Spaghetti Carbonara</a>
            </li>
            <li>
                <a href="<?=$BASE_URL?>/potato-soup.php" target="_self" rel="noreferrer">Cheesy Potato Soup with Ham</a>
            </li>
            <li>
                <a href="<?=$BASE_URL?>/fried-chicken.php" target="_self" rel="noreferrer">Fried Chicken</a>
            </li>
        </ul>
    </nav>