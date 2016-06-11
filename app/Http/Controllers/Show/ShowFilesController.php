<?php
namespace  App\Http\Controllers\Show;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Created by PhpStorm.
 * User: 98259
 * Date: 2016/6/11 0011
 * Time: 10:39
 */
class ShowFilesController extends Controller
{
    /*
     *展示文档文件夹
     * */
    public function showdocFolder( Request $request){
        if(Session::has('id')){
            $uid = Session::get('id');
            $filetype = DOC;
            $filegrade = $request->input('filegrade')? $request->input('filegrade'): "";
            if($uid && $filetype && $filegrade){
                $sql = "SELECT * from folders WHERE grade=? and uid=?";
                $res = DB::select($sql);
                return json_encode($res);
            }else{
                return response("-2");
            }
        }else{
            return response("-1");
        }
    }

    /*
    *展示文档文件夹
    * */
    public function showdoc( Request $request){
        if(Session::has('id')){
            $uid = Session::get('id');
            $filetype = DOC;
            $filegrade = $request->input('filegrade')? $request->input('filegrade'): "";
            if($uid && $filetype && $filegrade){
                $sql = "SELECT * from folders WHERE grade=? and uid=?";
                $res = DB::select($sql);
                return json_encode($res);
            }else{
                return response("-2");
            }
        }else{
            return response("-1");
        }
    }

}