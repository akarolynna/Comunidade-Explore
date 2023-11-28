<?php
enum AreaContribuicao {
    case PONTOS_TURISTICOS;
    case HOSPEDAGEM;
    case RESTAURANTES;
    case FESTIVAIS;
    case ENTRETENIMENTO;
    case TRANSPORTE;
    case COMPRAS;
    case RELAXAMENTO;
    case DICAS_LOCAIS;
    case FAMILIA;
    case ESPORTES_AVENTURA;

    public static function getNome(self $valor): string {
        return match ($valor) {
            self::PONTOS_TURISTICOS => 'Pontos Turísticos',
            self::HOSPEDAGEM => 'Hospedagem',
            self::RESTAURANTES => 'Restaurantes',
            self::FESTIVAIS => 'Festivais',
            self::ENTRETENIMENTO => 'Entretenimento',
            self::TRANSPORTE => 'Transporte',
            self::COMPRAS => 'Compras',
            self::RELAXAMENTO => 'Relaxamento',
            self::DICAS_LOCAIS => 'Dicas Locais',
            self::FAMILIA => 'Família',
            self::ESPORTES_AVENTURA => 'Esportes e Aventura',
        };
    }
}
?>
