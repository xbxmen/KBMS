<?php namespace  App\Http\Controllers\Upload;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;

    /**
     * Created by PhpStorm.
     * User: 98259
     * Date: 2016/6/5 0005
     * Time: 15:39
     */
    class UploadController extends Controller
    {
        /*
         * 上传文件
         * */
        public function upload(Request $request){
            $arr = array();
            $finalpath = "./uploads/";
            if($request->file()){
                $file = $request->file();
                for($i = 1;$i <= count($file) ;$i++){
                    $index = "file".$i;
                    $myfile = $file[$index];
                    $foldername = $myfile->getClientOriginalName();
                    $filesize = $myfile->getSize();
                    $filetype = $myfile->getClientMimeType();
                    $aa = $myfile->getMaxFilesize();
                    echo  $aa;
                }
            }else{
                return -2;
            }
        }

        /*
         *删除文件
         * */
        public function delete(Request $request){
            if(Session::has('id')){
                $uid = Session::get('id');
                $fileid= $request->input('fileid')? $request->input('fileid') : "";
                if($uid && $fileid){
                    $sql01 = "SELECT * FROM files WHERE  fileid=? and uid=?";
                    $res01 =  DB::select($sql01,[$fileid,$uid]);
                    if($res01){
                        $result  = @unlink($res01[0]->filepath);
                        if(!$result){
                            $sql02 = "DELETE FROM files WHERE fileid=? and uid=?";
                            $res02 = DB::delete($sql02,[$fileid,$uid]);
                            if ($res02){
                                return response("1");
                            }else{
                                return response("-5");
                            }
                        }else{
                            return response("-4");
                        }
                    }else{
                        return response("-3");
                    }
                }else{
                    return response("-2");
                }
            }else{
                return response("-1");
            }
        }

        /*
         * 创建文件夹
         * */
        public function createfolder(Request $request){
            if(Session::has('id')){
                $uid = Session::get('id');
                $foldername = $request->input('foldername')? $request->input('foldername') : "";
                $folderpreid = $request->input('folderpreid')? $request->input('folderpreid') : "";
                $foldergrade = $request->input('foldergrade')? $request->input('foldergrade') : "";
                if($uid && $foldername && $folderpreid && $foldergrade){
                    $sql01 = "SELECT * from folders WHERE folname=? and uid=? and grade=?";
                    $res01 = DB::select($sql01,[$foldername,$uid,$foldergrade]);
                    if($res01){
                        /*
                         * 查看最大的索引
                         * */
                        $sql02 = "SELECT MAX(folid) as max from folders";
                        $res02 = DB::select($sql02);
                        $folid = $res02[0]->max+1;
                        if($folderpreid == -1){
                            /** @var TYPE_NAME $sql */
                            $sql = "INSERT INTO folders(folid,folname,folpreid,grade,uid) VALUES (?,?,?,?,?)";
                            /** @var TYPE_NAME $res */
                            $res = DB::insert($sql,[$folid,$foldername,$folid,$foldergrade,$uid]);
                            return $res ? 1 : -4;
                        }else{
                            /**
                             * 插入到 folders 表格中
                             */
                            $sql = "INSERT INTO folders(folid,folname,folpreid,grade,uid) VALUES (?,?,?,?,?)";
                            /** @var TYPE_NAME $res */
                            $res = DB::insert($sql,[$folid,$foldername,$folderpreid,$foldergrade,$uid]);
                            return $res ? 1 : -4;
                        }
                    }else{
                        return response("-3");
                    }
                }else{
                    return response("-2");
                }
            }else{
                return response("-1");
            }
        }

        /*
         * 删除文件夹
         * */
        /**
         * @param Request $request
         * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
         */
        public function deletefolder( Request $request){
            $uid = Session::get('id');
            $foldername = $request->input('foldername')? $request->input('foldername') : "";
            $foldergrade = $request->input('foldergrade')? $request->input('foldergrade') : "";
            $folderid = $request->input('folderid')? $request->input('folderid') : "";
            if($uid && $foldername && $foldergrade && $folderid ){
                /*递归查找
                  * */
              /*  $arr = array();
                function digui($id, $arr,$index,$jijie){
                    $sql =  "select folid from folders where folpreid='$id'";
                    $res = DB::select($sql);
                    if($res) {
                        for($i = 0;$i < count($res);$i++){
                            $arr[$index]['id'] = $res[$i]->folid;
                            $arr[$index]['jijie'] = $jijie;
                            $index++;
                            digui($res[$i]->folid,$arr,$index,$jijie+1);
                        }
                    }else{
                        return $arr;
                    }
                }*/
                $sql01 = "select folid from folders where folpreid = ? and uid=? ";
                $res01 = DB::select($sql01,[$folderid.$uid]);
                if(count($res01) >= 2){
                    return response("-2");
                }else{
                    $sql = "DELETE FROM folders where folid=? and grade=? and uid=?";
                    $res = DB::delete($sql,[$folderid,$foldergrade,$uid]);
                    if($res){
                        return response("1");
                    }else{
                        return response("-3");
                    }
                }
            }else{
                return response("-1");
            }
        }
        /*
         * 保存到数据库里面
         * */
        public function saveToDB(){

        }
}