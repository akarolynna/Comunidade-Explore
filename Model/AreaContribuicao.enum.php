<?php

    class AreaContribuicao {
        const PONTOS_TURISTICOS = "PONTOS_TURISTICOS";
        const HOSPEDAGEM = "HOSPEDAGEM";
        const RESTAURANTES = "RESTAURANTES";
        const FESTIVAIS = "FESTIVAIS";
        const ENTRETENIMENTO = "ENTRETENIMENTO";
        const TRANSPORTE = "TRANSPORTE";
        const RELAXAMENTO = "RELAXAMENTO";
        const DICAS_LOCAIS = "DICAS_LOCAIS";
        const FAMILIA = "FAMILIA";
        const ESPORTES_AVENTURA = "ESPORTES_AVENTURA";

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
    }

?>