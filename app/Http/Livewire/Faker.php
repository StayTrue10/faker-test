<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\FakerTrait;

class Faker extends Component {
    use FakerTrait;
    public $cadena, $metodo, $res = '';
    public function render() {
        return view('livewire.faker');
    }
    public function convertir() {
        if ($this->cadena != null) {
            switch ($this->metodo) {
                case 1:
                    $this->res = $this->letterify($this->cadena);
                break;
                case 2:
                    $this->res = $this->numerify($this->cadena);
                break;
                case 3:
                    $this->res = $this->bothify($this->cadena);
                break;
                default:
                    $this->res = 'Seleccione una opción';
                break;
            }
        }
        else {
            $this->res = 'Ingrese una cadena';
        }
    }
}