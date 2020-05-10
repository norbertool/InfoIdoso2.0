<?php
//infoIdosoController
Route::get('/', function(){
    return redirect()->action('infoIdosoController@index');
});

Route::get('/pessoas', 'infoIdosoController@pessoas');
Route::get('/home', 'infoIdosoController@index');
Route::get('/login', 'infoIdosoController@login');
Route::get('/register','infoIdosoController@register');
Route::get('/idosos/cadastrar','infoIdosoController@registerIdoso');
Route::get('/remedios/cadastrar','infoIdosoController@registerRemedios');
Route::get('/tutorial','infoIdosoController@tutorial');
//Route::get('/idosos/remedios/adicionar/{{id}}', 'infoIdosoController@registerRemediosIdoso');

//funcController
Route::post('/func/login','funcController@entrar');
Route::post('/funcionarios/cadastro','funcController@cadastro');
Auth::routes();
Route::get('/user', 'funcController@index')->name('user');
Route::get('/func/logout', 'funcController@sair');

//IdosoController
Route::get('/idosos', 'IdosoController@lista');
Route::post('/idosos/cadastro', 'IdosoController@new');
Route::get('/idosos/remove/{id}', 'IdosoController@remove');
Route::get('/idosos/edit/{id}','IdosoController@edit')->name('auth.formedita');
route::get('/idosos/show/{id}','IdosoController@show');
Route::post('/idosos/update','IdosoController@update');

//RemedioController
Route::get('/remedios', 'RemedioController@lista');
Route::get('/remedios2/{id}', 'RemedioController@lista2');
Route::post('/remedios/cadastro', 'RemedioController@new');
Route::get('/remedios/remove/{id}', 'RemedioController@remove');

//remedio_idosoController
Route::get('/idosos/remedios/{id}', 'remedio_idosoController@lista');
Route::get('/idosos/remedios/remove/{id}/{id_idoso}', 'remedio_idosoController@remove');
Route::get('/idosos/descricao/remedios', 'remedio_idosoController@adicionar');
Route::post('/idosos/remedios/escolher', 'remedio_idosoController@escolher');




