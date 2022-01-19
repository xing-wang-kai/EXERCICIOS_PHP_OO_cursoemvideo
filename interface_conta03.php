<?php

interface interconta{
    
    public function sacar($valor);
    public function depositar($valor);
    public function transferir($valor, $remetente);
    public function imprimir();
    
}
