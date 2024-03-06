<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
    {
        $alunos = Aluno::all();
        return view('listarAlunos')->with('alunos', $alunos);
    }

    public function listarID($id)
    {
        $aluno = Aluno::find($id);
        if ($aluno) {
            return view('visualizarAluno')->with('aluno', $aluno);
        } else {
            return redirect('/alunos')->withErrors(['erro' => 'Aluno não encontrado!']);
        }
    }

    public function store(Request $request)
    {
        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->email = $request->email;
        $aluno->curso = $request->curso;
        $aluno->save();

        return redirect()->route('alunos.listar');
    }


}
