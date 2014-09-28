<?php
/**
 * Created by PhpStorm.
 * User: Solange Gamboa
 * Date: 28/09/2014
 * Time: 13:11
 */

App::uses('AppController', 'Controller');
App::uses('EstacionamentosController','Controller');

class EstacionamentosControllerTest extends ControllerTestCase {

    /**
     * @beforeClass
     */
    public static function setUpBeforeClass(){
        $VAGAS_DISPONIVEIS = 2;
    }

    public function testGetVagasDisponiveis(){
        $Estacionamentos = new EstacionamentosController();
        $this->assertEquals(2,$Estacionamentos->getVagasDisponiveis());
    }

    /**
     * @expectedException Exception
     */
    public function testEntraCarro(){
        $Estacionamentos = new EstacionamentosController();
        $Estacionamentos->entraCarro("AAA-9996");
    }

    public function testSaiCarro(){
        $Estacionamentos = new EstacionamentosController();
        $Estacionamentos->entraCarro("AAA-9999");
        $Estacionamentos->saiCarro('AAA-9999');
    }

    /**
     * @expectedException Exception
     */
    public function testNaoPodeEntrarCarroDuplicado(){
        $Estacionamento = new EstacionamentosController();
        $Estacionamento->entraCarro("BBB-7777");
        $Estacionamento->entraCarro("BBB-7777");
    }

    /**
     * @expectedException Exception
     */
    public function testeEstacionamentoLotado(){
        $Estacionamento = new EstacionamentosController();
        $Estacionamento->entraCarro("ABA-1010");
    }
}
 