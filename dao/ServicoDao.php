<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Servico.php';

class ServicoDao {
    private $tabela = 'servico';
    private $connection;

    public function __construct() {
        $db                 = new Database();
        $this->connection   = $db->connection;
    }

    public function salvar(Servico $servico) {
        $sql    = "INSERT INTO $this->tabela (grafica, data, quantidade, tempo) VALUES (?, ?, ?, ?)";
        $stmt   = $this->connection->prepare($sql);

        $stmt->execute([$servico->getGrafica(), $servico->getData(), $servico->getQuantidade(), $servico->getTempo()]);
    }

    public function listar() {
        $sql    = "SELECT * FROM $this->tabela";
        $stmt   = $this->connection->query($sql);
        $rows   = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $servicos = [];

        foreach ($rows as $row) {
            $servicos[] = new Servico(
                $row['grafica'],
                $row['data'],
                $row['quantidade'],
                $row['tempo'],
                $row['id'],
            );
        }

        return $servicos;
    }
}

?>