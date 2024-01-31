<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function jogos()
    {
        $lista = $this->lista_jogos();
        return response()->json($lista);

    }

    public function store(Request $request)
    {

        $request["id"] = count($this->lista_jogos())+1;

        $validation = $request->validate([
            "id" => "numeric",
            "nome" => "required | min:3",
            "genero" => "required"
        ]);
        dd($request->all());
        $request->save();

    }

    public function jogos_id($id)
    {
        foreach($this->lista_jogos() as $jogo)
        {
            $escolhido = null;
            echo($jogo['id']);
            if($jogo["id"] == $id)
            {
                $escolhido = response()->json($jogo);
            }
        }
        return $escolhido ? $escolhido : abort(code:404);
    }

    public function jogos_genero($id)
    {
        foreach($this->lista_jogos() as $jogo)
        {
            if($jogo["id"] == $id)
            {
                $escolhido = response()->json($jogo["genero"]);
            }
        }

        return $escolhido ? $escolhido : abort(code:404);
    }

    public function lista_jogos()
    {
        return [
            [
                "id" => 1,
                "nome" => "shadow of the colosos",
                "genero" => "aventura",
            ],
            [
                "id" => 2,
                "nome" => "call of duty black ops 2",
                "genero" => "FPS",
            ],
            [
                "id" => 3,
                "nome" => "DMC Devil May Cry",
                "genero" => "hack and slash",
            ],
            [
                "id" => 4,
                "nome" => "Dota",
                "genero" => "moba",
            ],
        ];
    }
}
