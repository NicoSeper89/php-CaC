<?php

class Pokemon
{

    public $name;
    private $type;
    private $health = 100;
    private $energy = 100;

    function __construct($name, $type = "normal")
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function performBasicAttack()
    {
        if (!$this->inBattle()) {
            return;
        }
        if ($this->energy > 15) {
            echo "ATAQUE BÁSICO de {$this->name}<br/>";
            $this->energy -= 15;
            echo "{$this->name} ahora tiene {$this->energy}p de energía<br/><br/>";
        } else {
            echo "{$this->name} no tiene energía suficiente para hacer ATAQUE BÁSICO. Para realizar este movimiento, antes debe cargar energía.<br/><br/>";
        }
    }

    public function performSpecialAttack()
    {
        if (!$this->inBattle()) {
            return;
        }
        if ($this->energy > 25) {
            echo "ATAQUE ESPECIAL de {$this->name}<br/>";
            $this->energy -= 25;
            echo "{$this->name} ahora tiene {$this->energy}p de energía<br/><br/>";
        } else {
            echo "{$this->name} no tiene energía suficiente para hacer ATAQUE ESPECIAL. Para realizar este movimiento, antes debe cargar energía.<br/><br/>";
        }
    }

    public function performCriticalAttack()
    {
        if (!$this->inBattle()) {
            return;
        }
        echo "ATAQUE CRÍTICO de {$this->name}<br/>";
        $this->health -= 60;

        if (!$this->inBattle()) {
        } else {
            echo "{$this->name} ahora tiene {$this->health}p de salud<br/><br/>";
        }
    }

    public function chargeEnergy()
    {
        if (!$this->inBattle()) {
            return;
        }
        if ($this->energy >= 100) {
            echo "{$this->name} no puede cargar energía, ya la tiene en 100p, su máximo<br/><br/>";
        } else {
            if ($this->energy >= 90) {
                echo "{$this->name} cargo " . (100 - $this->energy) . "p de energía y ahora tiene 100p<br/><br/>";
                $this->energy = 100;
            } else {
                $this->energy += 10;
                echo "{$this->name} cargo 10p de energía y ahora tiene {$this->energy}p<br/><br/>";
            }
        }
    }

    private function inBattle()
    {
        if ($this->health <= 0) {
            echo "{$this->name} está debilitado, su salud llego a 0 y no puede seguir luchando<br/><br/>";
            return false;
        } else {
            return true;
        }
    }

    public function getName()
    {
        return $this->name;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getHealth()
    {
        return $this->health;
    }
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}

$pikachu = new Pokemon("Pikachu", "Eléctrico");

echo "Nombre: " . $pikachu->getName() . "<br/>";
echo "Tipo: " . $pikachu->getType() . "<br/>";
echo "Energía: " . $pikachu->getEnergy() . " - ";
echo "Salud: " . $pikachu->getHealth() . "<br/><br/>";

$pikachu->performBasicAttack();
$pikachu->performSpecialAttack();
$pikachu->chargeEnergy();
$pikachu->performCriticalAttack();

$suirtle = new Pokemon("Suirtle", "Agua");
$charmander = new Pokemon("Charmander", "Fuego");
$bulbasaur = new Pokemon("Bulbasaur", "Planta");
$gengar = new Pokemon("Gengar", "Fantasma");
