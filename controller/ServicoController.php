<?php

require_once __DIR__ . '/../dao/ServicoDao.php';

class ServicoController {
    public function listar() {
        $dao = new ServicoDao();
        return $dao->listar();
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