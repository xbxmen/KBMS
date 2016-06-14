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
use App\Folder;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{

    private function getId($request)
    {
        return $request->session()->has('id') ? $request->session()->get('id') : 1;
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
        $userId = $this->getId($request);
        if($re = $this->checkForm($request, ['folname']))
        {
            $re = implode(',', $re);
            return '参数不完整: 缺少'.$re;
        }
        $book = new NoteBook($request->all());
        $book->folpreid = -1;
        $book->grade = 1;
        $book->type = 1;
        $book->updatetime = date("Y-m-d H:i:s");
        $book->uid = $userId;
        $book->save();
        return 0;
        // $arr = [];
        // $arr['foldername'] = $request->input('foldername');
        // $arr['folderpreid'] = -1;
        // $arr['foldergrade'] = 1;
        // $arr['foldertype'] = 1;
        // $request->replace($arr);
        // $f = new \App\Http\Controllers\FIle\OtherFilesController;
        // return $f->createfolder($request);
        
    }

    public function optNoteBook(Request $request, $folderId)
    {
        if($request->input('opt') == 'del')
        {
            Folder::where('folid', $folderId)->delete();
            Note::where('notefolder', $folderId)->delete();
            return 0;
        }
        if($request->input('opt') == 'mdf')
        {
            Folder::where('folid', $folderId)->update($request->except('opt'));
            return 0;
        }
    }

    public function newNote(Request $request, $folderId)
    {
        $userId = $this->getId($request);
        $note = new Note($request->all());
        $note->notefolder = $folderId;
        $note->uid = $userId;
        $note->createtime = date("Y-m-d H:i:s");
        $note->updatetime = date("Y-m-d H:i:s");
        $note->save();
        return 0;
    }

    public function getAllNotes(Request $request, $folderId)
    {
        $userId = $this->getId($request);
        $notes = Note::where('notefolder', $folderId)->where('uid', $userId)->get();
        return $notes;
    }

    public function optNote(Request $request, $folderId, $noteId)
    {
        $userId = $this->getId($request);
        $noteSet = Note::where('nid', $noteId)->where('uid', $userId)->where('notefolder', $folderId);
        if($noteSet->count() < 1)
            return '笔记不存在';
        if($request->input('opt') == 'mdf')
        {
            $noteSet->update($request->except('opt'));
            $noteSet->update(['updatetime' => date("Y-m-d H:i:s")]);
        }
        if($request->input('opt') == 'del')
        {
            $noteSet->delete();
        }
        return 0;
    }

    public function searchNote(Request $request)
    {
        $userId = $this->getId($request);
        $keyword = $request->input('keyword');
        $note = Note::where('notebody', 'like', "%{$keyword}%")->where('uid', $userId)->get();
        return $note;
    }

    public function recentNote(Request $request)
    {
        $userId = $this->getId($request);
        $note = Note::where('uid', $userId)->orderBy('updatetime')->take(10)->get();
        return $note;
    }
}