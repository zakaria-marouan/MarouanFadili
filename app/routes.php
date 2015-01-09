<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route permettant l'affichage des pages
Route::get('/home', 'HomeController@showWelcome1');
Route::get('/inscription', 'HomeController@showWelcome2');
Route::get('/ClassiqueCinema', 'HomeController@showWelcome4');
Route::get('/NouveauteCinema', 'HomeController@showWelcome3');

//Routes permettant la gestion des commentaires(ajout/edition/suppression
Route::get('/ArticleNouveauteCinema', 'CommentsController@getComments');
Route::get('/ArticleNouveauteCinema1', 'CommentsController@getComments1');
Route::get('/ArticleNouveauteCinema2', 'CommentsController@getComments2');
Route::get('/RepliquesClassiqueCinema', 'CommentsController@getComments3');
Route::get('/Top10', 'CommentsController@getComments4');
Route::post('comments', 'CommentsController@postComments');
Route::delete('critiques/delete', 'CommentsController@deleteComments');
Route::get('critiques/{id}/edit', array('as'=>'edit_critiques', 'uses'=>'CommentsController@get_edit'));
Route::put('critiques/update', array('uses'=>'CommentsController@put_update'));

//Tentative d'authentification
Route::get('login', array('as' => 'login', 'before' => '', function()
{
    return View::make('inscription');
}));


Route::post('connexion', function()
{
    $mail = Input::get('email');
    $passe = Input::get('password');
 
    if(Auth::attempt(array('email' => $mail, 'password' => $passe)))
        return Redirect::to('/home');
    else
        return Redirect::route('login');
});

//Route permettant l'enregistrement du formulaire des utilisateurs
Route::post('users', array('before' => '', function() 
{
    users::create(
        array(
            'nom' => Input::get('nom'),
      		'email' => Input::get('email'),
            'prenom' => Input::get('prenom'),
            'password' => Input::get('password'),
        )
    );
    return Redirect::to('/home');
}));



