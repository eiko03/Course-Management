<?php

use App\Models\Comment;
use App\Models\Rating2;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

Route::get('/', function () {
    //$cours = \App\Models\Course::find(21);
    //$cours->comments;
    return view('welcome');
});



Auth::routes(['register' => false]);

Route::get('/all-courses', function () {
    $courses = DB::table('courses')->orderBy('id', 'Desc')->paginate(7);
    return view('home-courses', with(compact('courses')));
});

Route::get('/all-courses/{id}', function ($id) {
    $course_single = DB::table('courses')->where('id', '=', $id)->first();
    $cours = \App\Models\Course::find($id);
    $comments = $cours->comments;
    $ratings = DB::select(DB::raw("SELECT AVG(rating) FROM rating2s WHERE course_id = '$id'"));
    $r = $ratings[0];
    return view('home-single-course', with(compact('course_single', 'comments', 'r')));
})->name('home-single-course');

Route::post('/all-courses', function (Request $request) {
    $request->created_at = NOW();
    $a = $request->toArray();
    Comment::create($a);
})->name('all-course');

Route::post('/', function (Request $request) {
    $request->created_at = NOW();
    $a = $request->toArray();
    Rating2::create($a);
})->name('all-course');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/', function () {
        if (Auth::check()) {
            return view('admin');
        }
        return redirect('/login');
    });


    Route::get('users', function () {
        $users = DB::table('users')->get();

        return view('users', with(compact('users')));
    })->name('users_get');


    Route::post('users', function (Request $request) {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ])->validate();

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back();
    })->name('users_post');


    Route::get('add-new-course', function () {
        return view('addnewcourse');
    })->name('add-new-course');

    Route::post('add-new-course', function (Request $request) {






        /*$data = request()->validate([
                'video' => 'file|video|max:20000'
            ]);*/
        //dd($request);
        $cover = $request->file('course_video');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));
        $cover->image = $cover->getFilename() . '.' . $extension;



        DB::table('courses')
            ->insert([
                'course_title' => $request->course_title,
                'course_details' => $request->course_details,
                'course_video' => $cover->image,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]);

        return redirect(route('all-courses'));
    })->name('add-new-course_post');

    Route::get('all-courses', function () {
        $courses = DB::table('courses')->orderBy('id', 'Desc')->paginate(7);
        return view('all-courses', with(compact('courses')));
    })->name('all-courses');

    Route::get('/all-courses/{id}', function ($id) {
        $course_single = DB::table('courses')->where('id', '=', $id)->first();
        $cours = \App\Models\Course::find($id);
        $comments = $cours->comments;
        $ratings = DB::select(DB::raw("SELECT AVG(rating) FROM rating2s WHERE course_id = '$id'"));
        $r = $ratings[0];
        return view('single-course', with(compact('course_single', 'comments', 'r')));
    })->name('single-course');

    Route::delete('/all-courses/delete/{id}', function (Request $request) {
        DB::table('courses')->delete($request->id);
        return redirect()->back();
    });

    Route::get('/dashboard', function () {
        $courses = DB::table('courses')->count();
        $comments = DB::table('comments')->count();
        $ratings = DB::table('rating2s')->count();
        return view('dashboard', with(compact('courses', 'comments', 'ratings')));
    });

    //////////////
});
