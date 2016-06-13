<?php namespace  App\Http\Controllers\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: 98259
 * Date: 2016/6/2 0002
 * Time: 19:32
 */
class UsersController extends Controller
{
    /**
     * 用户登录方法
     * @param Request $request
     * @return int
     */
    public function login(Request $request){
        $account = $request->input('account');
        $password = $request->input('password');
        if(empty($account) || empty($password)){
            return -1;
        }else{
            $sql = "SELECT * FROM users WHERE account=? and password=?";
            $res = DB::select($sql, [$account,$password]);
            if($res){
                session(['id' => ($res[0]->uid)]);
                session(['username'=>$res[0]->username]);
                session(['icon'=>$res[0]->icon]);
                session(['preid'=>'-1']);
                session(['grade'=>'1']);
                return response("1")->withCookie(cookie('account',$res[0]->account,60))
                                    ->withCookie(cookie('password',$res[0]->password,60));
            }else{
                return -2;
            }
        }
    }

    public function register(Request $request){
        $account = $request->input('account') ? $request->input('account') : "";
        $password = $request->input('password') ? $request->input('password') : " " ;
        $repass = $request->input('repass') ? $request->input('repass') : " " ;
        $username = $request->input('username') ? $request->input('username') : " ";
        if(empty($account) || empty($password) || empty($repass)){
            return -1;
        }else if($repass != $password){
            return -2;
        }else{
            $sql = "SELECT * FROM users WHERE account=?";
            $res = DB::select($sql, [$account]);
            if(!$res){
                $sql = "INSERT INTO users(account,password,username) VALUES (?,?,?)";
                $res = DB::insert($sql,[$account,$password,$username]);
                return $res ? 1 : -4;
            }else{
                return -3;
            }
        }
    }
}