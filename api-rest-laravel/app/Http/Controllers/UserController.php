<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
    	
    	// Recoger los datos del usuario por POST

    	$json = $request->input('json', null);
    	$params = json_decode($json); // objeto
     	$params_array = json_decode($json, true); //array
 
    	//var_dump($params->name); die();
    	//var_dump($json);
    	//die();

    	// Validar datos

    	$validate = \Validator::make($params_array, [
    		'name' 		=> 'required|alpha',
    		'surname' 	=> 'required|alpha',
    		'email'		=> 'required|email',
    		'password'	=> 'required'
    	]);



    	if($validate->fails()){
    			$data = array(
		    		'status' 	=> 'error',
		    		'code' 		=> 404,
		    		'message' 	=> 'El usuario no se ha creado',
		    		'errors'	=> $validate->errors()
		    	);
		}else{
				$data = array(
		    		'status' 	=> 'success',
		    		'code' 		=> 200,
		    		'message' 	=> 'El usuario se ha creado correctamente'
		    	);

		}

    	//	Cifrar la contraseña

    	//	Comprobar si el usuario existe (duplicado)

    	//	Crear el usuario
    	

    
    	return response()->json($data, $data['code']);
    }

    public function login(Request$request){
    	return "Acción de login de Usuarios";
    }
}
