<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// use App\Http\Middleware\ValidateDataMiddleware;
use App\Models\Author;
use App\Models\ImageNews;
use App\Models\News;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// --------------------------- ROTAS AUTOR ---------------------------
$router->group(['prefix' => 'api', 'namespace' => 'Author', 'as' => Author::class], function () use ($router) {
    // Criar autor
    $router->post('/author', [
        'uses' => 'AuthorController@create'
        //    'middleware' => 'ValidateDataMiddleware'
    ]);
    // Listar autores
    $router->get('/author', [
        'uses' => 'AuthorController@findAll'
    ]);
    // Recuperar autor por id
    $router->get('/author/{id}', [
        'uses' => 'AuthorController@findOneBy'
    ]);
    // Atualizar autor
    $router->put('/author/{param}', [
        'uses' => 'AuthorController@editBy'
        //    'middleware' => 'ValidateDataMiddleware'
    ]);
    $router->patch('/author/{param}', [
        'uses' => 'AuthorController@editBy'
        //    'middleware' => 'ValidateDataMiddleware'
    ]);
    // Remover autor
    $router->delete('/author/{id}', [
        'uses' => 'AuthorController@delete'
    ]);
});

// --------------------------- ROTAS NOTICIAS ---------------------------
$router->group(['prefix' => 'api', 'namespace' => 'News', 'as' => News::class], function () use ($router) {
    // Criar noticia
    $router->post('/news', [
        'uses' => 'NewsController@create'
        // 'middleware' => 'ValidateDataMiddleware'
    ]);
    // Listar noticias
    $router->get('/news', [
        'uses' => 'NewsController@findAll'
    ]);
    // Encontrar noticias pelo ID do autor
    $router->get('/news/author/{author_id}', [
        'uses' => 'NewsController@findByAuthor'
    ]);
    // Encontrar noticias por parametro
    $router->get('/news/{param}', [
        'uses' => 'NewsController@findBy'
    ]);
    // Atualizar noticia
    $router->put('/news/{param}', [
        'uses' => 'NewsController@editBy'
        // 'middleware' => 'ValidateDataMiddleware'
    ]);
    $router->patch('/news/{param}', [
        'uses' => 'NewsController@editBy'
        // 'middleware' => 'ValidateDataMiddleware'
    ]);
    // Remover noticia por parametro
    $router->delete('/news/{param}', [
        'uses' => 'NewsController@deleteBy'
    ]);
    // Remover noticia por ID do autor
    $router->delete('/news/author/{author_id}', [
        'uses' => 'NewsController@deleteByAuthor'
    ]);
});

// --------------------------- ROTAS IMAGEM ---------------------------
$router->group(['prefix' => 'api', 'namespace' => 'ImageNews', 'as' => ImageNews::class], function () use ($router) {
    // Criar imagem da noticia
    $router->post('/image-news', [
        'uses' => 'ImageNewsController@create'
        // 'middleware' => 'ValidateDataMiddleware'
    ]);
    // Listar todas as imagens
    $router->get('/image-news', [
        'uses' => 'ImageNewsController@findAll'
    ]);
    // Recuperar imagens pelo ID da noticia
    $router->get('/image-news/news/{news_id}', [
        'uses' => 'ImageNewsController@findByNews'
    ]);
    // Recuperar imagem pelo ID
    $router->get('/image-news/{id}', [
        'uses' => 'ImageNewsController@findOneBy'
    ]);
    // Atualizar imagem
    $router->put('/image-news/{param}', [
        'uses' => 'ImageNewsController@editBy'
        // 'middleware' => 'ValidateDataMiddleware'
    ]);
    $router->patch('/image-news/{param}', [
        'uses' => 'ImageNewsController@editBy'
        // 'middleware' => 'ValidateDataMiddleware'
    ]);
    // Remover imagem pelo ID da noticia
    $router->delete('/image-news/news/{news_id}', [
        'uses' => 'ImageNewsController@deleteByNews'
    ]);
    // Remover imagem por ID
    $router->delete('/image-news/{id}', [
        'uses' => 'ImageNewsController@delete'
    ]);
});
