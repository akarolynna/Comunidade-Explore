<?php
class Guia {
    private $corPrincipal;
    private $nomeDestino;
    private $localizacao;
    private $descricao;
    private $clima;
    private $epocaVisita;
    private $areasContribuicao;
    private $desafios;
    private $publico;
    private $tags;
    private $criador;
    private $arquivado;

    public function __construct(
        $corPrincipal,
        $nomeDestino,
        $localizacao,
        $descricao,
        $clima,
        $epocaVisita,
        $areasContribuicao,
        $desafios,
        $publico,
        $tags,
        $criador,
        $arquivado
    ) {
        $this->corPrincipal = $corPrincipal;
        $this->nomeDestino = $nomeDestino;
        $this->localizacao = $localizacao;
        $this->descricao = $descricao;
        $this->clima = $clima;
        $this->epocaVisita = $epocaVisita;
        $this->areasContribuicao = $areasContribuicao;
        $this->desafios = $desafios;
        $this->publico = $publico;
        $this->tags = $tags;
        $this->criador = $criador;
        $this->arquivado = $arquivado;
    }

    // Métodos Set
    public function setCorPrincipal($corPrincipal) {
        $this->corPrincipal = $corPrincipal;
    }

    public function setNomeDestino($nomeDestino) {
        $this->nomeDestino = $nomeDestino;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
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

    public function setAreasContribuicao($areasContribuicao) {
        $this->areasContribuicao = $areasContribuicao;
    }

    public function setDesafios($desafios) {
        $this->desafios = $desafios;
    }

    public function setPublico($publico) {
        $this->publico = $publico;
    }

    public function setTags($tags) {
        $this->tags = $tags;
    }

    public function setCriador($criador) {
        $this->criador = $criador;
    }

    public function setArquivado($arquivado) {
        $this->arquivado = $arquivado;
    }

    // Métodos Get
    public function getCorPrincipal() {
        return $this->corPrincipal;
    }

    public function getNomeDestino() {
        return $this->nomeDestino;
    }

    public function getLocalizacao() {
        return $this->localizacao;
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

    public function getAreasContribuicao() {
        return $this->areasContribuicao;
    }

    public function getDesafios() {
        return $this->desafios;
    }

    public function getPublico() {
        return $this->publico;
    }

    public function getTags() {
        return $this->tags;
    }

    public function getCriador() {
        return $this->criador;
    }

    public function getArquivado() {
        return $this->arquivado;
    }
}
?>
