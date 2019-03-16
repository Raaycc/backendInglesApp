<?php

namespace App\Services;

use App\Palavras;

class PalavrasService
{
    public function adicionar(array $data){
        Palavras::query()->create($data);
    }

    public function adicionara(array $data){
        
        foreach($data as $da){
            Palavras::query()->create($da);
        }
    }
}