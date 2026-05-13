<?php

class ServicoGofragem {
    private $id;            // id gerado pelo banco
    private $tipo;      // tipo de gofragem
    private $gramatura;     // gramatura do papel
    private $tamanho;       // tamanho do papel
    private $acabamento;    // acabamento do papel

    public function __construct($tipo, $gramatura, $tamanho, $acabamento, $id = null) {
        $this->id           = $id;
        $this->tipo         = $tipo;
        $this->gramatura    = $gramatura;
        $this->tamanho      = $tamanho;
        $this->acabamento   = $acabamento;
    }

    public function getId()         { return $this->id; }
    public function getTipo()       { return $this->tipo; }
    public function getGramatura()  { return $this->gramatura; }
    public function getTamanho()    { return $this->tamanho; }
    public function getAcabamento() { return $this->acabamento; }
}

?>