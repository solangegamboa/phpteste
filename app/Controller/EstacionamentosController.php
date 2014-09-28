<?php
/**
 * Created by PhpStorm.
 * User: Solange Gamboa
 * Date: 28/09/2014
 * Time: 13:08
 */

App::uses('AppModel', 'Model');
App::uses('AppController', 'Controller');

class EstacionamentosController extends AppController {
    public  $name = 'Estacionamentos';

    public function cleanBase(){
        $this->Estacionamento->query("TRUNCATE estacionamentos");
    }

    public function getVagasDisponiveis(){
        return $this->Estacionamento->find('count');
    }

    public function entraCarro($placa){
        if($this->Estacionamento->find('first', array('conditions' => array('Estacionamento.placa' => $placa)))) throw new Exception();
        if($this->getVagasDisponiveis() == 2) throw new NotFoundException();
        $this->Estacionamento->save(array("placa" => $placa));
        return $this->getVagasDisponiveis();
    }

    public function saiCarro($placa){
        if(!$this->Estacionamento->find('first', array('conditions' => array('Estacionamento.placa' => $placa)))) throw new Exception();
        $this->Estacionamento->deleteAll(array('Estacionamento.placa' => $placa));
        return $this->getVagasDisponiveis();
    }
} 