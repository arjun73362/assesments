<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
    	return view('user_index', compact('user'));
    }
    public function create()
    {
    	return view('user_create');
    }
    public function store(Request $request)
    {
    	$user = new User();
        $user->name=$request->user_name;
        $user->age=$request->user_age;
        $user->gender=$request->user_gender;
        $user->education=$request->user_education;
        $user->department=$request->user_department;
        $user->save();
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user_edit', compact('user'));
    }
    public function update(Request $request,$id)
    {
    	if($id){
        $user = User::find($id);
        $user->name=$request->user_name;
        $user->age=$request->user_age;
        $user->gender=$request->user_gender;
        $user->education=$request->user_education;
        $user->department=$request->user_department;
        $user->save();
        return redirect()->route('user.index');
    	}
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function search(Request $request){
        $q=$request->get('q');
        if($q!=""){
         $user = User::where('gender','=',$q)->orWhere('education','=',$q)->orWhere('department','=',$q)->get();
         if(count($user)>0)
         {
             return view('welcome')->withDetails($user)->withQuery($q);
         }
         return view('welcome')->withMessage("No user found");
        }
    }

}