<?php

use App\PersonalDetail;
use App\Education;
use App\Experience;
use App\Hobby;
use App\Project;
use App\Skills;
use App\Post;
use App\Http\Controllers\PostController;
use App\PostCategory;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Guest */
Route::get('/', function () {
    return view('introduction');
});

Route::get('/welcome', function() {
	return view('welcome');
});

Route::get('blog/fetch',function(){
	if(Request::ajax())
	{
		$posts = DB::table('posts')->leftJoin('post_categories','postCategory_id','=','post_categories.id')
		->select('posts.id','posts.postCategory_id','posts.title','posts.created_at','posts.content','post_categories.name as categoryName')->groupBy('posts.title')->get();
		return $posts;
	}
});
Route::get('/blog', 'BlogController@index');

Route::get('/portfolio', 'PortfolioController@index');
	
/* User */

Route::auth();

Route::get('/register','Auth\AuthController@register');

Route::get('/home', 'HomeController@index');

Route::get('/portfolioConfiguration', function(){
	$PersonalDetail = PersonalDetail::find(1);
	$Education = Education::find(1);
	$Experience = Experience::find(1);
	$Hobby = Hobby::find(1);
	$Project = Project::find(1);
	$Skill = Skills::find(1);
	
	return view('cms.portfolio',['personalDetail' => $PersonalDetail, 'education' => $Education,
			'experience' => $Experience, 'hobby' => $Hobby, 'project' => $Project, 'skill' => $Skill
	]);
});
Route::post('/editPersonalDetail/{id}', 'PortfolioController@editPersonalDetails');
Route::post('/editEducationContent/{id}', 'PortfolioController@editEducationContent');
Route::post('/editExperienceContent/{id}', 'PortfolioController@editExperienceContent');
Route::post('/editHobbyContent/{id}', 'PortfolioController@editHobbyContent');
Route::post('/editProjectContent/{id}', 'PortfolioController@editProjectContent');
Route::post('/editSkillContent/{id}', 'PortfolioController@editSkillContent');

Route::resource('posts','PostController');

Route::resource('postCategories', 'PostCategoriesController');

Route::get('/blogConfiguration', function(){
	
	$posts = DB::table('posts')->leftJoin('post_categories','postCategory_id','=','post_categories.id')
	->select('posts.id','posts.postCategory_id','posts.title','posts.created_at','posts.content','post_categories.name as categoryName')->groupBy('posts.title')->get();
	
	$postCategories = PostCategory::all();
	
	return view('cms.blog',['posts' => $posts, 'postCategories' => $postCategories]);
});
