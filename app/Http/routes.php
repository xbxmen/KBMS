<?php
use Illuminate\Support\Facades\Session;

define('BASE','/kbms/public/');
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('allHtml/index');
});
Route::get('test', function () {
    return view('main');
});
Route::get('index.html', function () {
    return view('allHtml/index');
});
Route::get('my.html', function () {
    return view('allHtml/my');
});
Route::get('photo.html', function () {
    return view('allHtml/photo');
});
Route::get('doc.html', function () {
    return view('allHtml/doc');
});
Route::get('audio.html', function () {
    return view('allHtml/audio');
});
Route::get('video.html', function () {
    return view('allHtml/video');
});
Route::get('video_show.html', function () {
    return view('allHtml/video_show');
});
Route::get('photo_show.html', function () {
    return view('allHtml/photo_show');
});
Route::get('search.html', function () {
    return view('allHtml/search');
});
Route::get('login.html', function () {
    return view('allHtml/login');
});
Route::get('note.html', function () {
    return view('allHtml/note');
});
Route::get('allfile.html', function () {
    return view('allHtml/allfile');
});
Route::get('resource.html', function () {
    return view('allHtml/resource');
});
Route::get('help.html', function () {
    return view('allHtml/help');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::post('account/login', 'Account\UsersController@login');
Route::post('account/register', 'Account\UsersController@register');
Route::post('account/checkSession', 'Account\UsersController@checksession');
/*文档
 * */
Route::post('show/files', 'File\ShowFilesController@showFiles');
Route::post('show/folders', 'File\ShowFilesController@showFolders');
Route::post('show/BackPre', 'File\ShowFilesController@BackPre');
Route::post('show/PhotoTimeArr', 'File\ShowFilesController@PhotoTimeArr');
Route::post('show/PhotoArr', 'File\ShowFilesController@PhotoArr');
Route::post('show/ShowMyFiles', 'File\ShowFilesController@showMyFiles');

Route::post('file/createfolder', 'File\OtherFilesController@createfolder');
Route::post('file/deletefolder', 'File\OtherFilesController@deletefolder');
Route::post('file/deletefile', 'File\OtherFilesController@delete');
Route::post('file/upload', 'File\OtherFilesController@upload');

Route::group(['namespace' => 'Note', 'prefix' => 'note', 'middleware' => 'login'], function(){
    Route::get('i/folder', 'NotesController@getAllNoteBooks');
    Route::post('i/folder', 'NotesController@newNoteBook');
    Route::post('i/folder/{folderId}', 'NotesController@optNoteBook');
    Route::post('i/folder/{folderId}/note', 'NotesController@newNote');
    Route::get('i/folder/{folderId}/note', 'NotesController@getAllNotes');
    Route::post('i/folder/{folderId}/note/{noteId}', 'NotesController@optNote');
    Route::get('i/search', 'NotesController@searchNote');
    Route::get('i/recentNote', 'NotesController@recentNote');
});


Route::get('view/test',function (){
    return view("test");
} );
