<?php namespace  App\Http\Controllers\Upload;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
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
                    $filename = $myfile->getClientOriginalName();
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
        public function delete(){

        }

        /*
         * 创建文件夹
         * */
        public function createfolder(){

        }

        /*
         * 删除文件夹
         * */
        public function deletefolder(){

        }

        /*
         * 保存到数据库里面
         * */
        public function saveToDB(){

        }


}