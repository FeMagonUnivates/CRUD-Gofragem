<?php

class Servico {
    private $id;
    private $grafica;
    private $data;
    private $quantidade;
    private $tempo;

    public function __construct($grafica, $data, $quantidade, $tempo, $id = null) {
        $this->id           = $id;
        $this->grafica      = $grafica;
        $this->data         = $data;
        $this->quantidade   = $quantidade;
        $this->tempo        = $tempo;
    }

    public function getId()         { return $this->id; }
    public function getGrafica()    { return $this->grafica; }
    public function getData()       { return $this->data; }
    public function getQuantidade() { return $this->quantidade; }
    public function getTempo()      { return $this->tempo; }
}

?>