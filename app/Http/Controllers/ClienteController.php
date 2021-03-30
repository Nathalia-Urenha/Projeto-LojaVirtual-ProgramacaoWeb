<?php

namespace App\Http\Controllers;

use App\models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Cliente $cliente )
    {
        $this->repository = $cliente;
        $this->request = $request;
    }

    //retorna a pagina de listagem de clientes
    public function index(Request $request)
    {
        $registros = $this->repository->all();
        return view('cliente.index', [
            'registros' => $registros,
        ]);
    }

    //retorna a pagina para cadastrar um novo cliente
    public function new()
    {
        return view('cliente.incluir');
    }

    //salvar o registro de um novo cliente
    public function create(Request $request)
    {
        return view('cliente.index'); //aqui
    }

    //retorna o registro de um cliente para a alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('cliente.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de um cliente para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('cliente.excluir', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro para consultar - ver o registro na tela
    public function consult($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('cliente.consultar', [
            'registro' => $registro,
        ]);
    }

    //alterar no banco o registro do cliente que modificado pelo usuario - tela
    public function save(Request $request, $id)
    {
        return view('cliente.listar');
    }

    //excluir no banco o registro do autor
    public function excluir(Request $request, $id)
    {
        return view('cliente.listar');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('cliente.listar');
    }
}
