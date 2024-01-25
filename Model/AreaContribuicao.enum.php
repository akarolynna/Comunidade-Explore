<?php

    class AreaContribuicao {
        const TODOS = -1;
        const PONTOS_TURISTICOS = 0;
        const HOSPEDAGEM = 1;
        const RESTAURANTES = 2;
        const FESTIVAIS = 3;
        const ENTRETENIMENTO = 4;
        const TRANSPORTE = 5;
        const COMPRAS = 6;
        const RELAXAMENTO = 7;
        const DICAS_LOCAIS = 8;
        const FAMILIA = 9;
        const ESPORTES_AVENTURA = 10;

        public static function getNome(int $index): ?string {
            $valores = [
                self::TODOS => 'Todos',
                self::PONTOS_TURISTICOS => 'Pontos Turísticos',
                self::HOSPEDAGEM => 'Hospedagem',
                self::RESTAURANTES => 'Restaurantes',
                self::FESTIVAIS => 'Festivais',
                self::ENTRETENIMENTO => 'Entretenimento',
                self::TRANSPORTE => 'Transporte',
                self::RELAXAMENTO => 'Relaxamento',
                self::DICAS_LOCAIS => 'Dicas Locais',
                self::FAMILIA => 'Família',
                self::ESPORTES_AVENTURA => 'Esportes e Aventura',
            ];
            return $valores[$index] ?? null;
        }
    }

?>