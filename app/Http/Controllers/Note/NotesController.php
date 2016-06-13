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

    private function getId($request)
    {
        return $request->session()->has('id') ? $request->session('id') : 1;
    }

    private function checkForm($request, $rule)
    {
        $arr = [];
        foreach($rule as $i)
        {
            if(!$request->has($i))
                $arr[] = $i;
        }
        return $arr;
    }

    public function getAllNoteBooks(Request $request)
    {
        $userId = $this->getId($request);
        $noteBooks = NoteBook::where('uid', $userId)->where('type', 1)->get();
        return $noteBooks;
    }

    public function newNoteBook(Request $request)
    {
        if($re = $this->checkForm($request, ['foldername', 'folderpreid', 'foldergrade', 'foldertype']))
        {
            $re = implode(',', $re);
            return '参数不完整: 缺少'.$re;
        }
        // $noteBook = new NoteBook($request->all());
        $f = new \App\Http\Controllers\FIle\OtherFilesController;
        return $f->createfolder($request);
        
    }

    public function newNote(Request $request, $folderId)
    {
        $userId = $this->getId($request);
        $note = new Note($request->all());
        $note->notefolder = $folderId;
        $note->uid = $userId;
        $note->createtime = date("Y-m-d H:i:s");;
        $note->save();
        return 0;
    }

    public function getAllNotes(Request $request, $folderId)
    {
        $userId = $this->getId($request);
        $notes = Note::where('notefolder', $folderId)->where('uid', $userId)->get();
        return $notes;
    }
}