<?php

class Categoria {
    const PRAIA = 'Praia';
    const NEVE = 'Neve';
    const URBANO = 'Urbano';
    const MONTANHA = 'Montanha';
    const NATUREZA = 'Natureza';
    const DESERTO = 'Deserto';
    const HISTORIA = 'História';
    const AVENTURA = 'Aventura';
    const MERGULHO = 'Mergulho';
    const ROMANCE = 'Romance';

    public static function getCategoria(int $index): ?string {
        $valores = [
            self::PRAIA,
            self::NEVE,
            self::URBANO,
            self::MONTANHA,
            self::NATUREZA,
            self::DESERTO,
            self::HISTORIA,
            self::AVENTURA,
            self::MERGULHO,
            self::ROMANCE,
        ];
        return $valores[$index] ?? null;
    }
}