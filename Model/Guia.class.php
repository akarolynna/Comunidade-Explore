<?php
class Guia {
    private $nomeDestino;
    private $localizacao;
    private $corPrincipal;
    private $descricao;
    private $clima;
    private $epocaVisita;
    private $culturaHistoria;
    private $areasContribuicao;
    private $fotoCapa;
    private $fotosSecundarias;
    private $publico;
    // private $arquivado;
    private $categoria;
    private $criadorId;
    private $desafios;
    private $colaboradores;
    private $seguidores;

    public function __construct(
        $nomeDestino,
        $localizacao,
        $corPrincipal,
        $descricao,
        $clima,
        $epocaVisita,
        $culturaHistoria,
        $areasContribuicao,
        $fotoCapa,
        $fotosSecundarias,
        $publico,
        // $arquivado,
        $categoria,
        $criadorId,
        $desafios,
        $colaboradores,
        $seguidores,
    ) {
        $this->nomeDestino = $nomeDestino;
        $this->localizacao = $localizacao;
        $this->corPrincipal = $corPrincipal;
        $this->descricao = $descricao;
        $this->clima = $clima;
        $this->epocaVisita = $epocaVisita;
        $this->culturaHistoria = $culturaHistoria;
        $this->areasContribuicao = $areasContribuicao;
        $this->fotoCapa = $fotoCapa;
        $this->fotosSecundarias = $fotosSecundarias;
        $this->publico = $publico;
        // $this->arquivado = $arquivado;
        $this->categoria = $categoria;
        $this->criadorId = $criadorId;
        $this->desafios = $desafios; 
        $this->colaboradores = $colaboradores;
        $this->seguidores = $seguidores;
    }

     // Getters
     public function getNomeDestino() {
        return $this->nomeDestino;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function getCorPrincipal() {
        return $this->corPrincipal;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getClima() {
        return $this->clima;
    }

    public function getEpocaVisita() {
        return $this->epocaVisita;
    }

    public function getCulturaHistoria() {
        return $this->culturaHistoria;
    }

    public function getAreasContribuicao() {
        return $this->areasContribuicao;
    }

    public function getDesafios() {
        return $this->desafios;
    }

    public function getFotoCapa() {
        return $this->fotoCapa;
    }

    public function getFotosSecundarias() {
        return $this->fotosSecundarias;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getColaboradores() {
        return $this->colaboradores;
    }

    public function getSeguidores() {
        return $this->seguidores;
    }

    public function getCriadorId() {
        return $this->criadorId;
    }

    public function getPublico() {
        return $this->publico;
    }

    // public function getArquivado() {
    //     return $this->arquivado;
    // }

    // Setters
    public function setNomeDestino($nomeDestino) {
        $this->nomeDestino = $nomeDestino;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function setCorPrincipal($corPrincipal) {
        $this->corPrincipal = $corPrincipal;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setClima($clima) {
        $this->clima = $clima;
    }

    public function setEpocaVisita($epocaVisita) {
        $this->epocaVisita = $epocaVisita;
    }

    public function setCulturaHistoria($culturaHistoria) {
        $this->culturaHistoria = $culturaHistoria;
    }

    public function setAreasContribuicao($areasContribuicao) {
        $this->areasContribuicao = $areasContribuicao;
    }

    public function setDesafios($desafios) {
        $this->desafios = $desafios;
    }

    public function setFotoCapa($fotoCapa) {
        $this->fotoCapa = $fotoCapa;
    }

    public function setFotosSecundarias($fotosSecundarias) {
        $this->fotosSecundarias = $fotosSecundarias;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setColaboradores($colaboradores) {
        $this->colaboradores = $colaboradores;
    }

    public function setSeguidores($seguidores) {
        $this->seguidores = $seguidores;
    }

    public function setCriadorId($criadorId) {
        $this->criadorId = $criadorId;
    }

    public function setPublico($publico) {
        $this->publico = $publico;
    }

    // public function setArquivado($arquivado) {
    //     $this->arquivado = $arquivado;
    // }
}
?>
