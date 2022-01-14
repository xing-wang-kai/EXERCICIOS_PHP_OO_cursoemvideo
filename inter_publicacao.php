<?php

interface inter_publicacao{
    
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function proxpag();
    public function voltarpag();
}
