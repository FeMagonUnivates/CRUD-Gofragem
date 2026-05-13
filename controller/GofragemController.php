<?php

require_once __DIR__ . '/../dao/GofragemDao.php';

class GofragemController {
    public function listar() {
        $dao = new GofragemDao();
        return $dao->listar();
    }

    public function salvar() {
        $gofragem = new Gofragem(
            $_POST['tipo'],
            $_POST['gramatura'],
            $_POST['tamanho']
            $_POST['acabamento'],
        );

        $dao = new GofragemDao();
        $dao->salvar($gofragem);

        header("Location: lista.php");
    }
}

?>