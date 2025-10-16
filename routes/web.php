<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/records", function() {

//     $listOfRecords=[
//            ["name"=>"1ST record", "id"=>"1"],
//            ["name"=>"2ND record", "id"=>"2"],
//            ["name"=>"3RD record", "id"=>"3"],
//         ];
    
//     return view('records.records', ["listOfRecords"=> $listOfRecords]);
// });
// Route :: get("/record/{id}", function($id){
//     return view ("records.record", ["id"=> $id]);
// });
// Route:: get('/students', function (){
//     $students=[
//         ["id"=> 1,"name"=>"VIKI", "email"=>"viki123@ex.com"],
//         ["id"=> 2,"name"=>"EMI", "email"=>"viki123@ex.com"],
//         ["id"=> 2,"name"=>"VIKTOR", "email"=>"viki123@ex.com"],
//     ];
//     return view ('students', ['students'=> $students]);
// });
Route::get('/',function(){
    return view ('jobs.index');

});
Route::get('/jobs', function () {
    return view('jobs.index');
    });
Route::get ('/webprogramming', function(){
    return"<h1>welcome</h1>";

})->name('exercises');

Route::get ('/testhtml', function(){
    $url=route('exercises');
    return"<a href='$url'>click here</a>";

});
//niza
Route::get('/api/users', function(){
    return[
    'name'=>'test user',
    'email'=>'testuser@gmail.com'
    ];
});
//terminal: php artisan route:list

Route::get ('/testhtml/{id}', function($id){ //id e input na f-ja
    return"<h1>welcome</h1>".$id;
});

// Route::get('/jobs', function(){
//     return view('jobs.index', ['title'='vrednost'])
// });

Route::get('/jobs', function () {
    $title = 'Available Jobs';
    $jobs = [
        'Software Engineer',
        'Web Developer',
        'Data Scientist',
    ];

    return view('jobs.index', compact('title', 'jobs'));
});

