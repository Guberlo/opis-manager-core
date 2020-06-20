<?php

namespace Opis\Mocker; 

class PhpParser implements Parser 
{
    /**
     * Php array taken from an autogenerated file. 
     * 
     * @var array
     */
    protected $source; 

    /**
     * Try to open the source, expecting a valid php array 
     */
    public function __construct (string $sourcePath) 
    {
        $this->source = require($sourcePath);
    }

    /**
     * ritorna il dipartimento indicato nel file di mock
     * 
     * @override
     * @return array
     */
    public function getDipartimento(): array
    {
        return $this->source['dipartimento']; 
    }

    /**
     * ritorna il corso di studi indicato nel file di mock
     * 
     * @override
     * @return array
     */
    public function getCorsoDiStudi(): array
    {    
        return $this->source['corso_di_studi']; 
    } 

    /**
     * ritorna gli insegnamenti indicati nel file di mock
     * 
     * @override
     * @return array
     */
    public function getInsegnamenti(): array
    {
        return $this->source['insegnamenti']; 
    }

}