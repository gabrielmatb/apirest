<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index() {

        $clients = Client::all();

        return view('clients.index', compact('clients'));
      }
  
      public function store(Request $request) 
      {
        Client::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'dataNascimento' => $request->dataNascimento,
            'sexo' => $request->sexo,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);

        $clients = Client::all();

        return view('clients.index', compact('clients'));
      }
  
      public function show($id) {
        $client = Client::findOrFail($id);
        return view('clients.show', ['client' => $client]);
      }
  
      public function update(Request $request) {

        $id = $request->textoid;

        $client = Client::findOrFail($id);

        $client->update([
            'nome' => $request->textonome,
            'cpf' => $request->textocpf,
            'dataNascimento' => $request->textodataNascimento,
            'sexo' => $request->textosexo,
            'endereco' => $request->textoendereco,
            'cidade' => $request->textocidade,
            'estado' => $request->textoestado,
        ]);

        $clients = Client::all();

        return view('clients.index', compact('clients'));
      }
  
      public function destroy (Request $request) {
        $id = $request->textid;

        $client = Client::findOrFail($id);
        $client->delete();

        $clients = Client::all();

        return view('clients.index', compact('clients'));
      }
}
