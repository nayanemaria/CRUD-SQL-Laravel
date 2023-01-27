<?php

namespace App\Http\Controllers;

use DB;
use Redirect;
use App\Models\Cadastros;
use Illuminate\Http\Request;


class CadastrosController extends Controller
{

    public function create(Request $request) {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $data=array('nome'=>$nome, 'email'=>$email, 'cpf'=>$cpf, 'telefone'=>$telefone, );
        DB::table('cadastros')->insert($data);
        return Redirect::to('/');
    }

    public function show(){
        $cadastros = Cadastros::get();
        return view('index', compact("cadastros"));
    }

   public function update(Request $request, $id){
       $cadastros = Cadastros::find($id);
       $cadastros->nome =  $request->get('nome');
       $cadastros->email = $request->get('email');
       $cadastros->cpf = $request->get('cpf');
       $cadastros->telefone = $request->get('telefone');
       $cadastros->save();
       return Redirect::to('/');
    }

   public function destroy($id){
        Cadastros::findOrFail($id)->delete();
        return Redirect::to('/');
    }

    public function get(Request $request, $id){
        $cadastros = Cadastros::find($id);
        echo json_encode($cadastros);
        die();
    }

}
