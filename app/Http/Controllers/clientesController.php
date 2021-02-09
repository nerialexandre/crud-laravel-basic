<?php

namespace App\Http\Controllers;

use App\DataTables\ClienteDataTable;
use Illuminate\Http\Request;
use App\Models\Cliente;


class clientesController extends Controller
{

    public function getClientes(ClienteDataTable $dataTable)
    {

        return $dataTable->render('cliente.cliente');
        // $clientes = Cliente::all();

        // return view('cliente.cliente-lista', ['clientes' => $clientes]);

    }

    public function create()
    {
        return view('cliente.cliente-form');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     ** @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
        Cliente::create([
            'name' => $request->name,
            'email' => $request->email,
            'cidade' => $request->cidade,
            'gender' => $request->gender,
            'uf' => $request->uf,
            'docNumber' => $request->docNumber,
            'phone' => $request->phone,
        ]);
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|confirmed|min:8',
        // ]);

        session()->flash('success', 'Cliente cadastrado com sucesso!');
        return view('cliente.cliente-form');
    }

    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('cliente');
    }
}
