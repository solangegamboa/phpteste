<?php
/**
 * Created by PhpStorm.
 * User: Solange Gamboa
 * Date: 28/09/2014
 * Time: 13:11
 */

App::uses('AppController', 'Controller');
App::uses('Controller','EstacionamentosController');
App::uses('EstacionamentosController','Controller');

class EstacionamentosControllerTest extends ControllerTestCase {

    public function setUp(){
        ControllerTestCase::setUp();
    }

    /*
     * Deve ter 500 vagas disponíveis
     * */
    public function testGetVagasDisponiveis(){
        $Estacionamentos = new EstacionamentosController();
        $this->assertEquals(500,$Estacionamentos->getVagasDisponiveis());
    }

    /*
     * Deve entrar um carro
     * */
    public function testEntraCarro(){
        $Estacionamentos = new EstacionamentosController();
        $this->assertEquals(499,$Estacionamentos->entraCarro());
    }

    /*
     * Deve sair um carro
     * */
    public function testSaiCarro(){
        $Estacionamentos = new EstacionamentosController();
        $this->assertEquals(499,$Estacionamentos->entraCarro());
        $this->assertEquals(500,$Estacionamentos->saiCarro());

    }
}
 