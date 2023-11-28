<?php
    include_once './Categoria.enum.php';
    include_once './MembroModel.class.php';

    class DiarioViagem {
        private $foto;
        private $titulo;
        private $descricao;
        private $categoria;
        private $criador;
        private $arquivado;
        private $posts;

        public function __construct($foto, $titulo, $descricao, $tags, Membro $criador, $arquivado = false, $posts = []) {
            $this->foto = $foto;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->tags = $tags;
            $this->criador = $criador;
            $this->arquivado = $arquivado;
            $this->posts = $posts;
        }

        public function getFoto() {
            return $this->foto;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getTags() {
            return $this->tags;
        }

        public function setTags($tags) {
            $this->tags = $tags;
        }

        public function getCriador() {
            return $this->criador;
        }

        public function setCriador(Membro $criador) {
            $this->criador = $criador;
        }

        public function isArquivado() {
            return $this->arquivado;
        }

        public function setArquivado($arquivado) {
            $this->arquivado = $arquivado;
        }

        public function getPosts() {
            return $this->posts;
        }

        public function setPosts($posts) {
            $this->posts = $posts;
        }
    }

?>