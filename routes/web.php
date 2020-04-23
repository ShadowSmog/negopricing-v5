    <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Simple routes linked to the views about basic pages (without fonctionalities)
Route::get('/', 'WelcomeController@index');
Route::get('about', 'AboutController@index');
Route::get('domains', 'DomainsController@index');
Route::get('activities', 'ActivitiesController@index');

//Routes linked to the articles' gestion
// Route::get('articles','ArticleController@index');
// Route::get('articles/create','ArticleController@create');
// Route::post('articles', 'ArticleController@store');
// Route::get('articles/{article}', 'ArticleController@show');
// Route::get('articles/{article}/edit', 'ArticleController@edit');
// Route::patch('articles/{article}', 'ArticleController@update');
// Route::delete('articles/{article}', 'ArticleController@destroy');
Route::resource('articles','ArticleController');

//Routes linked to the articles displayed by categorie
Route::get('category/{category}/articles','ArticleController@category');

//Routes linked to the form contact
Route::get('contact', 'ContactController@index');
Route::get('prospect', 'ProspectController@index');
Route::post('prospect', 'ProspectController@store' );
Route::get('candidate', 'CandidateController@index');
Route::post('candidate', 'CandidateController@store');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
