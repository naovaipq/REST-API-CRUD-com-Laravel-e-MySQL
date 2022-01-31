<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Exception;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function findAll() {
        $pessoa = Pessoa::all();
        
        return $pessoa;
    }
    
    public function findById($id) {
        $pessoa = Pessoa::find($id);
        
        return $pessoa;
    }

    public function create(Request $request)
    {
        try{
            $pessoa = Pessoa::create([
                'nome' => $request->nome,
                'sobrenome' => $request->sobrenome,
                'nascimento' => $request->nascimento,
                'naturalidade' => $request->naturalidade,
                'hobby' => $request->hobby
            ]);

            return ['return'=>'ok', 'create'=>$pessoa];

        } catch(\Exception $error){
            return ['return'=>'error', 'details'=>$error];
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $pessoa = Pessoa::find($id);
            
            $pessoa->update([
                'nome' => $request->nome,
                'sobrenome' => $request->sobrenome,
                'nascimento' => $request->nascimento,
                'naturalidade' => $request->naturalidade,
                'hobby' => $request->hobby,
            ]);

            return ['return'=>'ok', 'update'=>$pessoa];

        }catch(\Exception $error){
            return ['return' => 'error', 'details' => $error];
        }
    }

    public function delete($id){
        try{
            $pessoa = Pessoa::find($id);
    
            $pessoa->delete();
    
            return ['return'=>'ok', 'delete'=>$pessoa];

        } catch(\Exception $error){
            return ['return'=>'error', 'details'=>$error];
        }

    }


}