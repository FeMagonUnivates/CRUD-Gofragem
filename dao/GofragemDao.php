<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Gofragem.php';

class GofragemDao {
    private $tabela = 'gofragem';
    private $connection;

    public function __construct() {
        $db                 = new Database();
        $this->connection   = $db->connection;
    }

    public function salvar(Gofragem $gofragem) {
        $sql    = "INSERT INTO $this->tabela (tipo, gramatura, tamanho, acabamento) VALUES (?, ?, ?, ?)";
        $stmt   = $this->connection->prepare($sql);

        $stmt->execute([
            $gofragem->getTipo(), 
            $gofragem->getGramatura(), 
            $gofragem->getTamanho(), 
            $gofragem->getAcabamento()
        ]);
    }

    public function buscarPorId($id) {
        $sql  = "SELECT * FROM $this->tabela WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $row  = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) return null;

        return new Gofragem(
            $row['tipo'],
            $row['gramatura'],
            $row['tamanho'],
            $row['acabamento'],
            $row['id'],
        );
    }

    public function atualizar(Gofragem $gofragem) {
        $sql  = "UPDATE $this->tabela SET tipo = ?, gramatura = ?, tamanho = ?, acabamento = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            $gofragem->getTipo(), 
            $gofragem->getGramatura(), 
            $gofragem->getTamanho(), 
            $gofragem->getAcabamento(),
            $gofragem->getId()
        ]);
    }

    public function deletar($id) {
        $sql  = "DELETE FROM $this->tabela WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    public function listar() {
        $sql    = "SELECT * FROM $this->tabela";
        $stmt   = $this->connection->query($sql);
        $rows   = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $gofragens = [];

        foreach ($rows as $row) {
            $gofragens[] = new Gofragem(
                $row['tipo'],
                $row['gramatura'],
                $row['tamanho'],
                $row['acabamento'],
                $row['id'],
            );
        }

        return $gofragens;
    }
}

?>