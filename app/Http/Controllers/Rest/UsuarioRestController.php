<?php

namespace App\Http\Controllers\Rest;

use App\User;
use Illuminate\Http\Request;


//usado na api
class UsuarioRestController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, User $usuario )
    {
        $this->repository = $usuario;
        $this->request = $request;
    }

    //retorna a pagina de listagem de usuarios
    public function index(Request $request)
    {
       $registros = $this->repository->paginate(10);
       return response()->json($registros);
    }

    //retorna a pagina para cadastrar um novo usuario
    public function new()
    {
        return view('usuario.incluir');
    }

    //salvar o registro de um novo usuario
    public function create(Request $request)
    {
        
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('usuario.listar')->with('success','Registro Cadastrado com sucesso!');
        
    }

    //retorna o registro de um usuario para a alteração dos dados
    public function update($id)
    {

        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de um usuario para excluir do banco de dados
    public function delete($id){
    
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.excluir', [
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

        return view('usuario.consultar', [
            'registro' => $registro,
        ]);
    }

    //alterar no banco o registro do usuario que modificado pelo usuario - tela
    public function save(Request $request, $id)
    {
        $data = $request->all();

        $registro = $this->repository->find($id);
        
        $registro->update($data);
        
        return redirect()->route('usuario.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do autor
    public function excluir(Request $request, $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('usuario.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('usuario.listar');
    }

    //buscar
    public function search(Request $request){
        
        $filters = $request->all();
        $registros = $this->repository->search($request->nome);
        return view('usuario.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('usuario.home');
    }
}
