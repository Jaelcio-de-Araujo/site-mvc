<?php
class HomeController {
    public function index() {
        require 'views/home.php';
    }

    public function sobre() {
        require 'views/sobre.php';
    }

    public function projetos() {
        require 'views/projetos.php';
    }

    public function contato() {
        require 'views/contato.php';
    }
}

$controller = new HomeController();

// Decidir qual método chamar baseado na rota
if ($_SERVER['REQUEST_URI'] == '/') {
    $controller->index();
} elseif ($_SERVER['REQUEST_URI'] == '/sobre') {
    $controller->sobre();
} elseif ($_SERVER['REQUEST_URI'] == '/projetos') {
    $controller->projetos();
} elseif ($_SERVER['REQUEST_URI'] == '/contato') {
    $controller->contato();
}
