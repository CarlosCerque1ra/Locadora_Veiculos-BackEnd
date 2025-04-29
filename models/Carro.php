<?php
namespace Models;
use Interfcaces\Locavel;

// Classe que representa um carro

class Carro extends Veiculo implements Locavel{

    public function calcularAluguel(int $dias): float
    {
        return $dias * DIARIA_CARRO; // Preço fixo de
    }

    public function alugar(): string{
        if($this->disponivel) {
            $this->disponivel = false;
            return "Carro '{$this->modelo}' alugado com sucesso!";
        } 
            return "Carro {$this->modelo} já está alugado.";
    }

    // Para negação utilizasse o ! (exclamação) antes da variável booleana, que inverte o valor dela.
    public function devolver(): string{
        if(!$this->disponivel) {
            $this->disponivel = true;
            return "Carro '{$this->modelo}' devolvido com sucesso!";
        } 
            return "Carro {$this->modelo} já está disponível.";
    }
    
}