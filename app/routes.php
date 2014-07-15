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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('welcome', function()
{
	return View::make('welcome');
});


Route::get('loremipsum-generator', function()
{
	return View::make('loremipsum-generator');
});

Route::post('loremipsum-generator', function()
{
    $num_paras = Input::get("how_many", 1);
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($num_paras);

	return View::make('loremipsum-generator')->with('paras',$paragraphs);
});

Route::get('user-generator', function()
{
	return View::make('user-generator');
});

Route::post('user-generator', function()
{
    $num_users = Input::get("how_many", 1);
    $needs_bday = Input::get("needs_birthdate", false);
    $needs_profile = Input::get("needs_profile", false);

    $faker = Faker\Factory::create();
    $users = array();
    for ($i=0; $i < $num_users; ++$i) {
        $user = array();
        $user = array_add($user, "name", $faker->name);
        if($needs_bday){
            $user = array_add($user, "bday", $faker->dateTimeThisCentury->format('Y-m-d'));
        }
        if($needs_profile){
            $user = array_add($user, "profile", $faker->text);
        }
        $users[] = $user;
    }

    return View::make('user-generator')->with('users',$users);
});

