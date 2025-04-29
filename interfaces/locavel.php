<?php
namespace Interfcaces;

// Interface que define os metodo necessarios para um veicuo ser locavcel

interface Locavel
{
    public function alugar(): string;
    public function devolver(): string;
    public function isDisponivel(): bool;
    
}


?>