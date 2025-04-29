<?php
namespace Models;
use Interfcaces\Locavel;

// Classe que representa uma Moto

class Moto extends Veiculo implements Locavel{

    public function calcularAluguel(int $dias): float {
        return $dias * DIARIA_MOTO; // Preço fixo de
    }

    public function alugar(): string{
        if($this->disponivel) {
            $this->disponivel = false;
            return "Moto '{$this->modelo}' alugado com sucesso!";
        } 
            return "Moto {$this->modelo} já está alugado.";
    }

    // Para negação utilizasse o ! (exclamação) antes da variável booleana, que inverte o valor dela.
    public function devolver(): string{
        if(!$this->disponivel) {
            $this->disponivel = true;
            return "Moto '{$this->modelo}' devolvido com sucesso!";
        } 
            return "Moto {$this->modelo} já está disponível.";
    }
    
}