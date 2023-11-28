<?php
enum Categoria {
    case PRAIA;
    case NEVE;
    case URBANO;
    case MONTANHA;
    case NATUREZA;
    case DESERTO;
    case HISTORIA;
    case AVENTURA;
    case MERGULHO;
    case ROMANCE;

    public static function getNome(self $valor): string {
        return match ($valor) {
            self::PRAIA => 'Praia',
            self::NEVE => 'Neve',
            self::URBANO => 'Urbano',
            self::MONTANHA => 'Montanha',
            self::NATUREZA => 'Natureza',
            self::DESERTO => 'Deserto',
            self::HISTORIA => 'História',
            self::AVENTURA => 'Aventura',
            self::MERGULHO => 'Mergulho',
            self::ROMANCE => 'Romance',
        };
    }
}
?>
