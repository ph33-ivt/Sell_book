<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Http\Requests\UserEditRequest;
use Auth;
use App\Traits\UploadTrait;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        
        $listUser=User::paginate(5);
        return view('user.list_user',compact('listUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $userID=User::find($id);
        return view('user.edit_user',compact('userID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUserImage(UserEditRequest $request, $id)
    {
        
        $user=User::find($id);
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->input('name');
        if ($request->has('user_image'))
        {
            $image = $request->file('user_image');
        $name = str_slug($request->input('name')).'_'.time();
        $folder = '/public/images/user/';
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        $this->uploadOne($image, $folder, 'public', $name);
        $user->user_image = $filePath;
        }
            $user->save();
            return redirect()->route('admin.listUser');

    }
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $data=$request->all();
        $user->update($data);
        if($data){
            return redirect()->route('admin.listUser')->with('success','Updated');
        }
        else{
            return redirect()->back()->with('fail','Fail to update. Please check again.');
        }
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        
      return redirect()->route('admin.listUser',compact('user'))->with('success','User deleted');
        
    }
    public function logout(Request $request)
    {
          Auth::logout();
          return view('welcome');
    }

    public function getSearch(Request $request)
    {
        $user=User::where('name','like','%'.$request->search.'%')
                    ->orWhere('email','like','%'.$request->search.'%')
                    ->get();
        return view('user.search',compact('user'));
    }
   
}
