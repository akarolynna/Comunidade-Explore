<?php
include_once './Categoria.enum.php';
include_once './MembroModel.class.php';

class DiarioViagem {
    private $foto;
    private $titulo;
    private $descricao;
    private $categoria;
    private $arquivado;
    private $criador;
    private $tags = []; 
    private $posts = []; 

    public function __construct($foto, $titulo, $categoria, $descricao, array $tags, MembroModel $criador, $arquivado = false, array $posts = []) {
        $this->foto = $foto;
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
        $this->tags = $tags;
        $this->criador = $criador;
        $this->arquivado = $arquivado;
        $this->posts = $posts;
    }

    //Getters and Setters
        public function getFoto()
        {
            return $this->foto;
        }
    
        public function setFoto($foto)
        {
            $this->foto = $foto;
            return $this;
        }
    
        public function getTitulo()
        {
            return $this->titulo;
        }
    
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
            return $this;
        }
    
        public function getDescricao()
        {
            return $this->descricao;
        }
    
        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
            return $this;
        }
    
        public function getCategoria()
        {
            return $this->categoria;
        }
    
        public function setCategoria($categoria)
        {
            $this->categoria = $categoria;
            return $this;
        }
    
        public function getArquivado()
        {
            return $this->arquivado;
        }
    
        public function setArquivado($arquivado)
        {
            $this->arquivado = $arquivado;
            return $this;
        }
    
        public function getPosts()
        {
            return $this->posts;
        }
    
        public function setPosts(array $posts)
        {
            $this->posts = $posts;
            return $this;
        }
    
        public function getCriador()
        {
            return $this->criador;
        }
    
        public function setCriador(MembroModel $criador)
        {
            $this->criador = $criador;
            return $this;
        }
    
        public function getTags()
        {
            return $this->tags;
        }
    
        public function setTags(array $tags)
        {
            $this->tags = $tags;
            return $this;
        }
    }
    
