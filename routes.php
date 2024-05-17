<?php
// Função simples para gerenciar rotas
function route($uri, $controller) {
    if ($_SERVER['REQUEST_URI'] == $uri) {
        require $controller;
        exit();
    }
}

// Definindo as rotas
route('/', 'controllers/HomeController.php');
route('/about', 'controllers/HomeController.php');
