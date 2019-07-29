<?php
/*
|---------------------------------------------
| importing the controller class Post
|---------------------------------------------
*/

use App\Post ;

/*
|--------------------------------------------------------------------------
| Web Routes to insert,read,update and delete data in posts table with raw sql queries(PDO)
|--------------------------------------------------------------------------
|
|
|
*/
// Route::get('/insert',function(){
// 	DB::insert('insert into posts (title,contents) values(?, ?)', ['PHP with Laravel', 'Laravel is the best PHP framework till date.']);
// 	$results = DB::select('select * from posts');
// 	echo query($results); 
// });


// Route::get('/read',function(){
// 	$result = DB::select('select * from posts where id = ?',[1]);
// 	var_dump($result);
// 	// foreach($result as $post){
// 	// 	echo  $post->title."<br>";
// 	// 	echo $post->contents;
// 	// }
// });


// Route::get('/update',function(){
// 	$updated = DB::update('update posts set title="Laravel" where id >= ?',[1]);
// 	if($updated > 0){
// 		$result = DB::select('select title from posts');
// 		foreach ($result as $post) {
// 			echo  $post->title."<br>";
// 		}
// 	} 
// 	//return $result;
// });


// Route::get('/delete',function(){
// 	$deleted = DB::delete('delete from posts where id = ?',[1]);
// 	//return $deleted;
// 	if($deleted > 0){
// 		$result = DB::select('select * from posts');
		
// 		// foreach ($result as $post) {
// 		// 	echo  $post->title."<br>";
// 		// }
// 		return $result;
// 	} 
	
// });
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

// Route::get('/', function () {
//     return view('welcome');
    
// });
// Route::get('/about', function () {
//     return "hi about page";
    
// });
// Route::get('/contact', function () {
//     return "hi contact";
    
// });

/*
|--------------------------------------------------------------------------
| How we pass data through Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can pass data within the get method's second parameter within a method or function. 
|
*/

// Route::get('/post/{id}/{name}',function($id,$name){
// 	return "This is post number".$id."".$name;
// });

/*
|--------------------------------------------------------------------------
| How we pass data through Web Routes
|--------------------------------------------------------------------------
|
| Here is how we can work with a long url easily by addressing it with a short name as admin.home. Now whenever we want |   to  go to that perticular url we can call admin.home within the <a href="admin.home"></a>
|
*/
// Route::get('/admin/post/example',array('as'=>'admin.home',function(){
// 	$url = route('admin.home');
// 	return $url;
// }));

/*
|--------------------------------------------------------------------------
| How we pass data through Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can pass data through web routes to the controller's respective method.
*/
Route::get('posts/{id}','PostsController@index');

/*
|--------------------------------------------------------------------------
| How we pass data through Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can pass data through web routes to the controller's respective method.
*/
Route::get('contact','PostsController@contact');
Route::get('post','PostsController@posts');

/*
|--------------------------------------------------------------------------
| Eloquent/ORM(reading data from posts table)
|--------------------------------------------------------------------------
|
| 
*/

// Route::get('/read',function(){
// 	$posts = Post::all();
// 	foreach ($posts as $post) {
// 		# code...
// 		return $post->title;
// 	}
// });


/*
|--------------------------------------------------------------------------
| Eloquent/ORM(finding data from posts table)
|--------------------------------------------------------------------------
|
| 
*/


// Route::get('/find',function(){
// 	$posts = Post::find(4);
// 	return $posts->title;
// 	// foreach($posts as $post){
// 	// 	return $post->title;
// 	// 	//echo $post->contents;
// 	// }
// });

/*
|--------------------------------------------------------------------------
| Eloquent/ORM(finding data from posts table with conditions)
|--------------------------------------------------------------------------
|
| 
*/

Route::get('/findwhere',function(){
	$posts = Post::where('id',4)->orderBy('id','desc')->take(1)->get();
	return $posts;
});


/*
|--------------------------------------------------------------------------
| Eloquent/ORM(more ways to retrive data)
|--------------------------------------------------------------------------
|
| 
*/



/*-----------------------------*/