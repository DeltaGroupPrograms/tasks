<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Lang;
class UsersController extends Controller

{
    public function login_page()
    {
        return view('index');
    }
    public function register()
    {
        return view('register_user');
    }
    public function createuser(Request $request)
    {
//        dd($request->all());
        $data = ['name' => $request->name, 'family' => $request->family, 'email' => $request->email];
       $result=User::create($data);
        return view('final_register_user');
    }

    public function signin(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required'
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('login.page')->withErrors($validator);
        }
        $email = $request->username;
        $password = $request->password;
        // $password=md5($password);
        $result = User::where('password', '=', $password)->where('email', '=', $email)->where('status', '=', 1)->get();
        if(count($result)){

            session(['id' => $result->first()->id, 'permission' => $result->first()->permission]);
            $permission = session()->get('permission');
            return redirect()->route($permission . '.dashboard');
        }else{
            return redirect()->route('login.page')->withErrors(Lang::get('auth.failed'));
        }
    }
    public function dashboard()
    {
        return view('tasks');
    }
    public  function manage_users()
    {
        $user=User::all();
        return view('Manage_users' , ['user' => $user]);
    }
    public  function final_manage_users()
    {

        return view('Manage_users');
    }
    public function editusers()
    {
        $user = User::find(session()->get('id'));
        return view('edit_page', ['user' => $user]);
    }
    public function note()
    {
        return view('notes');
    }
    public function update_user(Request $request)
    {
        $user_id = session()->get('id');
        $Row = User::find($user_id);
        $data = ['name' => $request->fname, 'family' => $request->lname, 'email' => $request->email];
        $Row->update($data);
        return redirect()->route('edit_info');
    }
    public function change_pass_admin(Request $request)
    {
        $user = User::find(session()->get('id'));
        return view('change_pass', ['user' => $user]);
    }
    public  function update_pass(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'pass' => 'required',
                'repass' => 'required|same:pass'
            ]
        );
        $user_id = session()->get('id');
        $Row = User::find($user_id);
        $paas = $request->pass;
        $repass = $request->repass;
        if ($validator->fails())
        {
            return redirect()->route('change_pass')->withErrors($validator);
        } else
        {
            $data = ['password' => $repass];
            $Row->update($data);
            return 'true';
        }
    }
    public  function logout_user()
    {
        session()->forget('id');
        return redirect()->route('login.page');
    }
}
