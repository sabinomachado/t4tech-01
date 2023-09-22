<?php

namespace App\Enum;

enum NivelEnum: string
{
    //UTILIZADO PARA DEFINIR O NIVEL DE ACESSO DO USUARIO!
    case ADMINISTADOR = '1';
    case EDITOR = '2';
}
