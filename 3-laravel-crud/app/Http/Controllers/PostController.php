<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        /*
        1º opção
        $post = new Post(
            [
                "title" => "Post",
                "description" => "descricao",
                "author" => "author"
            ]
        );
        */
        //2º opção
        $post = new Post();
        $post->title = "Segundo Post";
        $post->description = "Aqui vem a descrição";
        $post->author = "Eliane Alencar";
        $post->save();

        dd($post);
    }

    public function read(Request $request)
    {
        //ler tudo
        $post = (new Post())->all();
        return $post;
    }

    public function find(Request $request)
    {
        //ler por id
        $post = Post::find($request['id']);
        return $post;
    }
    /**
     * UPDATE SOMENTE EM UM UNICO TIPO
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $post = Post::find($request['id']);
        $post->title = "Novo titulo";
        $post->description = "Nova Descrição"; //primeira forma
        $post['author'] = "Joab Torres"; //segunda  forma
        $post->save();

        return $post;
    }

    /**
     * UPDATE EM VARIOS REGISTRO DA TABELA, 
     *
     * @param Request $request
     * @return Post $posts retorna o numero de registros afetados
     */
    public function updates(Request $request)
    {
        $posts = Post::where('id', '>', 0)->update([
            'title' => "Titulo do post"
        ]);

        return $posts;
    }
    /**
     * removendo um unico registro
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {

        $post = (new Post)->find($request['id']);

        if ($post) {
            $post->delete();
        }

        return "id não encontrado";
    }

    /**
     * removendo vários registros
     *
     * @param Request $request
     * @return void
     */
    public function delete_all(Request $request)
    {
        $post = Post::where('id', '>', 0)->delete();

        return $post; //retorna a quantida de itens encontrados
    }
}
