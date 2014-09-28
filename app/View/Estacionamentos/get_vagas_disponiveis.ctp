<?php

$estacionamentos = $this->requestAction('estacionamentos/getvagasdisponiveis');
echo "<pre>";
print_r($estacionamentos);
echo "</pre>";

$estacionamentos2 = $this->requestAction('estacionamentos/entraCarro');
echo "<pre>";
print_r($estacionamentos2);
echo "</pre>";

$estacionamentos3 = $this->requestAction('estacionamentos/saiCarro');
echo "<pre>";
print_r($estacionamentos3);
echo "</pre>";