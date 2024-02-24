<?php

class Categoria
{
    const TODOS = 'Todos';
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

    public static function getNome(int $index): ?string
    { //não funciona
        $valores = [
            self::TODOS,
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

    public static function getValor(string $nomeCategoria)
    {
        $valores = [
            self::TODOS,
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
        $indice = array_search($nomeCategoria, $valores);
        return $indice !== false ? $indice : null;
    }
}
