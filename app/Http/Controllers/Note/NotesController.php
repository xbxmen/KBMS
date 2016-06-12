<?php
/**
 * Created by PhpStorm.
 * User: 98259
 * Date: 2016/6/11 0011
 * Time: 17:36
 */
namespace App\Http\Controllers\Note;

use App\User;
use App\Note;
use App\NoteBook;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function getAllNoteBooks(Request $request)
    {
        $userId = 1;
        $noteBooks = NoteBook::where('uid', $userId)->where('type', 1)->get();
        return $noteBooks;
    }

    public function newNoteBook(Request $request)
    {
        return $request->session('id');
    }
}