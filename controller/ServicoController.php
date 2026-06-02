<?php

require_once __DIR__ . '/../dao/ServicoDao.php';

class ServicoController {

    public function listar() {
        $dao = new ServicoDao();
        return $dao->listar();
    }

    public function buscarPorId($id) {
        $dao = new ServicoDao();
        return $dao->buscarPorId($id);
    }

    public function atualizar() {
        $servico = new Servico(
            $_POST['grafica'],
            $_POST['data'],
            $_POST['quantidade'],
            $_POST['tempo'],
            $_POST['id'],
        );

        $dao = new ServicoDao();
        $dao->atualizar($servico);

        header("Location: listaservico.php");
    }

    public function deletar() {
        $dao = new ServicoDao();
        $dao->deletar($_POST['id']);

        header("Location: listaservico.php");
    }

    public function salvar() {
        $servico = new Servico(
            $_POST['grafica'],
            $_POST['data'],
            $_POST['quantidade'],
            $_POST['tempo'],
        );

        $dao = new ServicoDao();
        $dao->salvar($servico);

        header("Location: listaservico.php");
    }
}

?>