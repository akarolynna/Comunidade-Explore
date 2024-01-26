<?php

    class AreaContribuicao {
        const PONTOS_TURISTICOS = 0;
        const HOSPEDAGEM = 1;
        const RESTAURANTES = 2;
        const FESTIVAIS = 3;
        const ENTRETENIMENTO = 4;
        const TRANSPORTE = 5;
        const RELAXAMENTO = 6;
        const DICAS_LOCAIS = 7;
        const FAMILIA = 8;
        const ESPORTES_AVENTURA = 9;

        public static function getNome(int $index): ?string {
            $valores = [
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

        public static function getValue(int $index): ?string {
            $valores = [
                self::PONTOS_TURISTICOS => 'PONTOS_TURISTICOS',
                self::HOSPEDAGEM => 'HOSPEDAGEM',
                self::RESTAURANTES => 'RESTAURANTES',
                self::FESTIVAIS => 'FESTIVAIS',
                self::ENTRETENIMENTO => 'ENTRETENIMENTO',
                self::TRANSPORTE => 'TRANSPORTE',
                self::RELAXAMENTO => 'RELAXAMENTO',
                self::DICAS_LOCAIS => 'DICAS_LOCAIS',
                self::FAMILIA => 'FAMILIA',
                self::ESPORTES_AVENTURA => 'ESPORTES_AVENTURA',
            ];
            return $valores[$index] ?? null;
        }
    }

?>