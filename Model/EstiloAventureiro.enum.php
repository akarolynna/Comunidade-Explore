<?php
enum EstiloAventureiro {
    case EXPLORADOR_NOVATO;
    case VIAJANTE_AVENTUREIRO;
    case MOCHILEIRO_EXPERIENTE;
    case AVENTUREIRO_GLOBAL;

    public static function getNome(self $valor): string {
        return match ($valor) {
            self::EXPLORADOR_NOVATO => 'Explorador Novato',
            self::VIAJANTE_AVENTUREIRO => 'Viajante Aventureiro',
            self::MOCHILEIRO_EXPERIENTE => 'Mochileiro Experiente',
            self::AVENTUREIRO_GLOBAL => 'Aventureiro Global',
        };
    }
}
?>
