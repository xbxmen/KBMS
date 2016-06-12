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
    public function showFolders(Request $request){
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
    *展示文件
    * */
    public function showFiles( Request $request){
        if(session('id')){
            $uid = session('id');
            $filegrade = $request->input('filegrade')? $request->input('filegrade'): "";
            $filepreid = $request->input('filepreid')? $request->input('filepreid'): "";
            if($uid && $filegrade && $filepreid != ""){
                if($filepreid == -1){
                    $sql = "SELECT * from files WHERE filegrade=? and uid=?";
                    $res = DB::select($sql,[$filegrade,$uid]);
                    return json_encode($res);
                }else{
                    $sql = "SELECT * from files WHERE grade=? and filefolder=? and uid=?";
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
     *分页获取全部 文件
     * */
    public function showMyFiles(Request $request){
        if(session('id')){
            $uid = session('id');
            $filetype = $request->input('filetype')? $request->input('filetype'): "";
            $filegrade = $request->input('filegrade')? $request->input('filegrade'): "";
            $filepreid = $request->input('filepreid')? $request->input('filepreid'): "";
            $page = $request->input('page')? $request->input('page')-1: "";
            if($uid && $filetype && $filegrade && $filepreid != ""){
                if($filepreid == -1){
                    $sql = "SELECT * from files WHERE filegrade=? and filetype=? and uid=? limit $page,10";
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

    /*
     * 显示word内容
     * */
    public function MyDoc(Request $request){

    }
    /*
     * 显示ppt
     * */
    public function MyPpt(){

    }
    /*
     * 显示 txt
     * */
    public function MyTxt(){

    }




}