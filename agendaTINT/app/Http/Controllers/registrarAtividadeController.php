<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendaModelo;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = agendaModelo::all();//Todos os dados da tabela 
        return view('paginas.cadastrar')->With('dados',$dados);
    }//Fim do método - retornar dados

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');
        //Inserindo dados na tabela
        $model = new agendaModelo();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//Armazenar no Banco de Dados
        return redirect('/cadastrar');
    }//Fim do método de cadastro

    public function consultar(){
        $ids = agendaModelo::all();
        return view('paginas.consultar', compact('ids'));
    }//Fim do método

    public function editar($id){
        $dado = agendaModelo::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//Fim do método

    public function atualizar(Request $request, $id)
    {
        agendaModelo::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//Fim do método atualizar

    public function excluir(Request $request, $id){
        agendaModelo::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }//Fim do método
}//Todas as operações do banco de dados