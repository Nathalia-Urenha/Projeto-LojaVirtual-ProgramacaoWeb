<?php

namespace App\Http\Controllers;

use App\models\Endereco;
use Illuminate\Http\Request;
use App\Http\Requests\EnderecoRequest;


class EnderecoController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Endereco $endereco )
    {
        $this->repository = $endereco;
        $this->request = $request;
    }

    //retorna a pagina de listagem de Enderecos
    public function index(Request $request)
    {
       $registros = $this->repository->paginate(10);

        return view('Endereco.index', [
            'registros' => $registros,
        ]);
    }

    //retorna a pagina para cadastrar um novo Endereco
    public function new()
    {
        return view('endereco.incluir');
    }

    //salvar o registro de um novo Endereco
    public function create(EnderecoRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('endereco.listar')->with('success','Registro Cadastrado com sucesso!');;
        
    }

    //retorna o registro de um Endereco para a alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('endereco.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de um Endereco para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('endereco.excluir', [
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

        return view('endereco.consultar', [
            'registro' => $registro,
        ]);
    }

    //alterar no banco o registro do Endereco que modificado pelo usuario - tela
    public function save(EnderecoRequest $request, $id)
    {
        $data = $request->all();

        $registro = $this->repository->find($id);
        
        $registro->update($data);
        
        return redirect()->route('endereco.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do autor
    public function excluir(Request $request, $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('endereco.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('endereco.listar');
    }

    //buscar
    public function search(Request $request){
        
        $filters = $request->all();
        $registros = $this->repository->search($request->nome);
        return view('endereco.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('endereco.home');
    }
}
