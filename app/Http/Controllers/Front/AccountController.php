<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    private $userService;
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/')->with('loggedInNotification', 'User is already logged in!'); // Redirect to the home page or any other page
        }
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
//        $credentials = [
//            'email' => $request->email,
//            'password' => $request->password,
//            'level' => 2,
//        ];

//        var_dump($credentials);


        $user = User::where('email', $request->email)
            ->where('level', Constant::user_level_client)
            ->first();

//        var_dump($user);


        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->remember);
            return redirect()->intended(''); //Mặc định là trang chủ
//            return redirect('');
        } else {
            return back()->with('notification', 'Login failed. Check your entered information!');
//            return back()->with('notification', 'Đăng nhập không thành công, vui lòng kiểm tra lại thông tin đã nhập!');
        }

//        if (Auth::attempt($credentials, $savePassword)){
//            return 'Success!';
//        }else {
//            return 'Failed!';
//        }
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }

    public function register()
    {
        return view('front.account.register');
    }

    public function postRegister(Request $request)
    {
        if($request->password != $request->password_confirmation) {
            return back()->with('notification', 'Password confirmation does not match!');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => Constant::user_level_client, //Người dùng
        ];

        $this->userService->create($data);
        return redirect('account/login')->with('notification', 'Account registered! You can now login!');
    }
}
