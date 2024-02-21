<?php
class Evento {
    private $titulo;
    private $localizacao;
    private $dataInicio;
    private $horaInicio;
    private $dataTermino;
    private $horaTermino;
    private $fotoCapa;
    private $maxParticipantes;
    private $categoriaId;
    private $colaboradores;
    private $inscritos;
    private $criadorId;

    public function __construct(
        $titulo,
        $localizacao,
        $dataInicio,
        $horaInicio,
        $dataTermino,
        $horaTermino,
        $fotoCapa = null,
        $maxParticipantes,
        $categoriaId,
        $criadorId = null,
        $colaboradores,
        $inscritos = null,
    ) {
        $this->titulo = $titulo;
        $this->localizacao = $localizacao;
        $this->dataInicio = $dataInicio;
        $this->horaInicio = $horaInicio;
        $this->dataTermino = $dataTermino;
        $this->horaTermino = $horaTermino;
        $this->fotoCapa = $fotoCapa;
        $this->maxParticipantes = $maxParticipantes;
        $this->categoriaId = $categoriaId;
        $this->criadorId = $criadorId;
        $this->colaboradores = $colaboradores;
        $this->inscritos = $inscritos;
    }
    
    // Getters and se

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    public function getDataTermino()
    {
        return $this->dataTermino;
    }

    public function getHoraTermino()
    {
        return $this->horaTermino;
    }

    public function getFotoCapa()
    {
        return $this->fotoCapa;
    }

    public function getMaxParticipantes()
    {
        return $this->maxParticipantes;
    }

    public function getColaboradores()
    {
        return $this->colaboradores;
    }

    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    public function getInscritos()
    {
        return $this->inscritos;
    }

    public function getCriadorId()
    {
        return $this->criadorId;
    }

    // Setters

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
    }

    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;
    }

    public function setDataTermino($dataTermino)
    {
        $this->dataTermino = $dataTermino;
    }

    public function setHoraTermino($horaTermino)
    {
        $this->horaTermino = $horaTermino;
    }

    public function setFotoCapa($fotoCapa)
    {
        $this->fotoCapa = $fotoCapa;
    }

    public function setMaxParticipantes($maxParticipantes)
    {
        $this->maxParticipantes = $maxParticipantes;
    }

    public function setColaboradores($colaboradores)
    {
        $this->colaboradores = $colaboradores;
    }

    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;
    }

    public function setInscritos($inscritos)
    {
        $this->inscritos = $inscritos;
    }

    public function setCriadorId($criadorId)
    {
        $this->criadorId = $criadorId;
    }

}
?>