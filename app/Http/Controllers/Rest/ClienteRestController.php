<?php


namespace App\Http\Controllers\Rest;

use App\Http\Controllers\Controller;
use App\models\Cliente;
use App\models\Endereco;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Carbon\Carbon;
use Symfony\Component\Console\Output\ConsoleOutput;

//usado na api
class ClienteRestController extends Controller
{
    private $repository;
    protected $request;
    private $out;

    public function __construct(Request $request, Cliente $cliente, ConsoleOutput $out )
    {
        $this->repository = $cliente;
        $this->request = $request;
        $this->out = $out;
    }

    //retorna a pagina de listagem de clientes
    public function index(Request $request)
    {
       $this->out->writeln("Hello from terminal");
        $registros = $this->repository->paginate();

       return response()->json($registros);
    }

    //retorna a pagina para cadastrar um novo cliente
    public function new()
    {
        return view('cliente.incluir');
    }

    //salvar o registro de um novo cliente
    public function create(ClienteRequest $request)
    {
        
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('cliente.listar')->with('success','Registro Cadastrado com sucesso!');
        
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
    public function delete($id){
    
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
    public function save(ClienteRequest $request, $id)
    {
        $data = $request->all();

        $registro = $this->repository->find($id);
        
        $registro->update($data);
        
        return redirect()->route('cliente.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do autor
    public function excluir(Request $request, $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('cliente.listar');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('cliente.listar');
    }

    //buscar
    public function search(Request $request){
        
        $filters = $request->all();
        $registros = $this->repository->search($request->nome);
        return view('cliente.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('cliente.home');
    }
}
