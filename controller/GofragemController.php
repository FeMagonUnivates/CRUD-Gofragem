<?php

require_once __DIR__ . '/../dao/GofragemDao.php';

class GofragemController {

    public function listar() {
        $dao = new GofragemDao();
        return $dao->listar();
    }

    public function buscarPorId($id) {
        $dao = new GofragemDao();
        return $dao->buscarPorId($id);
    }

    public function atualizar() {
        $gofragem = new Gofragem(
            $_POST['tipo'],
            $_POST['gramatura'],
            $_POST['tamanho'],
            $_POST['acabamento'],
            $_POST['id'],
        );

        $dao = new GofragemDao();
        $dao->atualizar($gofragem);

        header("Location: listagofragem.php");
    }

    public function deletar() {
        $dao = new GofragemDao();
        $dao->deletar($_POST['id']);

        header("Location: listagofragem.php");
    }

    public function salvar() {
        $gofragem = new Gofragem(
            $_POST['tipo'],
            $_POST['gramatura'],
            $_POST['tamanho'],
            $_POST['acabamento'],
        );

        $dao = new GofragemDao();
        $dao->salvar($gofragem);

        header("Location: listagofragem.php");
    }
}

?>