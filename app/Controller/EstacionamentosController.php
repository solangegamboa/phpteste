<?php
/**
 * Created by PhpStorm.
 * User: Solange Gamboa
 * Date: 28/09/2014
 * Time: 13:08
 */

App::uses('AppController', 'Controller');

class EstacionamentosController extends AppController {
    public  $name = 'Estacionamentos';

    public function criaArrayCarro(){
        for($i = 0; $i < 500; $i++){
            $carros[] = $i;
        }
        return $carros;
    }

    public function getVagasDisponiveis(){
        return count($this->criaArrayCarro());
    }

    public function entraCarro(){
        $arrayCarro = $this->criaArrayCarro();
        return array_pop($arrayCarro);
    }

    public function saiCarro(){
        $arrayCarro = $this->criaArrayCarro();
        return count($arrayCarro);
    }
} 