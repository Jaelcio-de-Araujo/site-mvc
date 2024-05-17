<?php

class UserModel {
    // Método para buscar todos os usuários
    public function getAllUsers() {
        // Obter a instância da conexão com o banco de dados
        $db = Database::getInstance();
        $connection = $db->getConnection();

        // Consulta SQL para buscar todos os usuários
        $query = "SELECT * FROM users";

        // Executar a consulta
        $result = $connection->query($query);

        // Verificar se houve algum erro na consulta
        if (!$result) {
            die('Erro na consulta: ' . $connection->error);
        }

        // Array para armazenar os usuários
        $users = [];

        // Loop através dos resultados da consulta
        while ($row = $result->fetch_assoc()) {
            // Adicionar usuário ao array
            $users[] = $row;
        }

        // Retornar os usuários encontrados
        return $users;
    }
}
