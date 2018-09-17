<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class AdminAccountController extends Controller
{
    public function getLogIn(Request $request){
        return view('admin.page.login');
    }

    /**
     * User LogIn
     *
     * @param Request $request
     * @return void
     */
    public function postLogIn(Request $request){
        try {
            //$remember = (bool) $request->get('remember', false);
            if (Sentinel::authenticate($request->all())) {
                return redirect()->intended('admin/index');
            } else {
                $err = "Tên đăng nhập hoặc mật khẩu không đúng!";
            }
        }catch (NotActivatedException $e) {
            $err = "Tài khoản của bạn chưa được kích hoạt";
        }catch (ThrottlingException $e) {
            $delay = $e->getDelay();
           $err = "Tài khoản của bạn bị block trong vòng {$delay} sec";
        }
        //dd(Sentinel::getUser());
        //dd($request->all());
        return redirect('admin/login')->withInput()->with('error', $err);
    }

    /**
     * User LogOut
     *
     * @return void
     */
    public function getLogOut(){
        Sentinel::logout();
        return redirect('admin/login');
    }
}
