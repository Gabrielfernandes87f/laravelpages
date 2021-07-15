
<?php 
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller {

    //login
    public function login(Request $request) {

        $credenciais = request (['email', 'password']);
        if(!Auth::attempt($credenciais)) {
            $erro = "Não autorizado";
            $resposta = [
                'erro' => $erro,
            ];
            return response()->json($resposta, 404);
        }

        $usuario = $request->user();
        $resposta['nome']= $usuario->name;
        $resposta['email']= $usuario->email;
        $resposta['token']= $usuario->createToken('token')->accessToken;
        return response()->json($resposta, 200);
    }
    
    // logout
    public function logout(Resquest $resquest) {

        $isUser = $resquest->user()->token()->revoke();
        if($isUser){
            $resposta['message'] = "logout efetuado com sucesso.";
            return response()->json($resposta, 200);
        }
        else {
            $resposta = "Algo deu errado";
            return response()->json($resposta, 404);
        }
    }
    
}

