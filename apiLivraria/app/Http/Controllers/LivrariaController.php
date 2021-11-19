<?php

/**
 *
 * Unime - União Metropolitana de Educação e Cultura Curso: Bacharelado em
 * Sistemas de Informação Disciplina: Programação Web II
 * Professor(a): Pablo Ricardo Roxo Silva
 * Aluno(a): Jéssica Silva de Jesus
 *
 */


namespace App\Http\Controllers;

use App\Http\Requests\StoreLivrariaRequest;
use App\Http\Requests\UpdateLivrariaRequest;
use App\Models\Livraria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LivrariaController extends Controller
{

    public function index()
    {
      $livraria = Livraria::orderBy('ano_livro', 'asc')->get();
       return response()->json($livraria);
    }

    public function show($id)
    {
        $livraria = Livraria::findOrFail($id);
        return response()->json($livraria);
    }

    public function store(Request $request)
    {

        $dados = $request->all();
        $validator = Validator::make($dados, (new StoreLivrariaRequest())->rules());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $livraria = Livraria::create($dados);
        return response()->json($livraria,201);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $validator = Validator::make($dados, (new UpdateLivrariaRequest())->rules());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        Livraria::findOrFail($id)->update($dados);
        return $this->show($id);
        //$livraria = Livraria::findOrFail($id)->update($dados);
        //return response()->json($livraria);
    }

    public function destroy($id)
    {
        Livraria::findOrFail($id)->delete();
        return response()->json('', 204);
    }


}
