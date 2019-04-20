<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PruebasController extends Controller
{
    //
    public function index(){
    	$titulo = 'Animales';
    	$animales = ['Perro', 'Gato', 'Tigre'];

    	return view('pruebas.index', array(
    		'titulo' => $titulo,
    		'animales' => $animales
    	));
    }

    public function testOrm(){

    	// $posts = Post::all(); //Es como hacer un selec*from de la BD
    	// var_dump($posts);
    	// foreach ($posts as $post){
    	// 	# code...
    	// 	echo "<h1>".$post->title."</h1>";
    	// 	echo "<span style='color:gray;'>{$post->user->name} - {$post->Category->name}</span>";
    	// 	echo "<p>".$post->content."</p>";
    	// 	echo "<hr>";
    	// }

    	$categories = Category::all(); //Haciendo una Consulta o una llamada a un método
    		foreach ($categories as $category) {
    			# code...
    			echo "<h1>".$category->name."</h1>";

    			foreach ($category->posts as $post) {
    				# code...
    				echo "<h3>".$post->title."</h3>";
		    		echo "<span style='color:gray;'>{$post->user->name} - {$post->Category->name}</span>";
		    		echo "<p>".$post->content."</p>";
		    		
    			}
    			
    			echo '<hr>';
    		
    		}
    	die();
    }
}
