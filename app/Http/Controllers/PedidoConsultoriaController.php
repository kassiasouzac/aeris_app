<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\PedidoConsultoria;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;

class PedidoConsultoriaController extends Controller
{
    //use RegistersUsers;
    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\Models\PedidoConsultoria
     */
    public function salvar(Request $request)
    {
        $request->validate([
            'nome' =>'required|min:3|max:200',
            'email' =>'email|min:11|max:320|unique:pedido_consultorias',
            'senha' =>'required|min:6|max:50',
            'telefone' =>'required|size:11',
            'nomeEmpresa' =>'required|min:3|max:200',
            'descricao' =>'required|min:3|max:280',
         ]);

        $statusPedido = 0;
        $checkCurso = 0;

        if ($request->input('checkCurso')) {
            $checkCurso = $request->input('checkCurso');
        } else {
            $checkCurso = 0;
        }

        $hashed = Hash::make($request->input('senha'));

        PedidoConsultoria::create([
            'nome' => $request->input('nome'),
            'email' =>  $request->input('email'),
            'senha' => $hashed,
            'telefone' => $request->input('telefone'),
            'nomeEmpresa' =>  $request->input('nomeEmpresa'),
            'descricao' =>  $request->input('descricao'),
            'statusPedido' => $statusPedido,
            'checkCurso' => $checkCurso,
        ]);
        User::create([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => $hashed,
            'is_admin' => 0,
        ]);
        return redirect()->route('verification.notice');
    }
    
}
