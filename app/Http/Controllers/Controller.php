<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Palavras;
use App\Score;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get(Request $data)
    {
        $data2 = Palavras::query()->insert($data->all());
        return $data2;
    }

    public function geta()
    {
        return Palavras::all();
    }

    public function jogar()
    {
        return Palavras::all()->random()->paginate(25);
    }

    public function getPlaca()
    {
        return Score::orderBy('pontos', 'desc')->take(10)->get();
    }

    public function salvarPontos(Request $data)
    {
        return Score::query()->create($data->all());
    }
}
