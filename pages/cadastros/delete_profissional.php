<?php
    require_once ('../../config.php');
    require_once ('../../dao/profissional_dao.php');
    
    if (isset($_GET['id'])) {
        delete($_GET['id']);
    } else {
        die("Erro: ID não definido!");
    }
?>

