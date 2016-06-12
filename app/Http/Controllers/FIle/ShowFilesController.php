<?php
namespace  App\Http\Controllers\File;
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
    public function showFolder(Request $request){
        if(session('id')){
            $uid = session('id');
            $filegrade = $request->input('filegrade')? $request->input('filegrade'): "";
            $filepreid = $request->input('filepreid')? $request->input('filepreid'): "";
            if($uid  && $filegrade && $filepreid != ""){
                if($filepreid == -1){
                    $sql = "SELECT * from folders WHERE grade=? and uid=?";
                    $res = DB::select($sql,[$filegrade,$uid]);
                    return json_encode($res);
                }else{
                    $sql = "SELECT * from folders WHERE grade=? and folpreid=? and uid=?";
                    $res = DB::select($sql,[$filegrade,$filepreid,$uid]);
                    return json_encode($res);
                }
            }else{
                return response("-2");
            }
        }else{
            return response("-1");
        }
    }

    /*
    *展示文档文件
    * */
    public function showfies( Request $request){
        if(session('id')){
            $uid = session('id');
            $filetype = $this->DOC;
            $filegrade = $request->input('filegrade')? $request->input('filegrade'): "";
            $filepreid = $request->input('filepreid')? $request->input('filepreid'): "";
            if($uid && $filetype && $filegrade && $filepreid != ""){
                if($filepreid == -1){
                    $sql = "SELECT * from files WHERE filegrade=? and filetype=? and uid=?";
                    $res = DB::select($sql,[$filegrade,$filetype,$uid]);
                    return json_encode($res);
                }else{
                    $sql = "SELECT * from files WHERE grade=? and filetype=? and filefolder=? and uid=?";
                    $res = DB::select($sql,[$filegrade,$filetype,$filepreid,$uid]);
                    return json_encode($res);
                }
            }else{
                return response("-2");
            }
        }else{
            return response("-1");
        }
    }
}