<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all()->where('role','admin');
        return view('admins',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * Show the form for creating a new resource.
     *
     * @return ApplicationAlias|Factory|View
     */
    public function create(): View|Factory|ApplicationAlias
    {
        return view('create-admins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector|ApplicationAlias
     */
    public function store(Request $request): ApplicationAlias|RedirectResponse|Redirector
    {
        $file = $request->img;
        $new_file = time().$file->getClientOriginalName();
        $file->move('assets/images/users', $new_file);
        $pathOf = 'assets/images/users/'.$new_file;
        $user = new User();
        return $this->saving($request, $user, $pathOf);
    }

    /**
     * Display the specified resource.
     *
     * @param $num
     */
    public function show($num)
    {
        if($num=='all'){
            return redirect('admin');
        }else{
            $admins = User::paginate($num)->where('role','admin');
            return view('admins',[
                'admins'=>$admins
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return ApplicationAlias|Factory|View
     */
    public function edit($id)
    {
        $admin = User::find($id);
        return view('edit-admins',[
            'admin'=>$admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $file = $request->img;
        $new_file = time().$file->getClientOriginalName();
        $file->move('assets/images/users',$new_file);
        $pathOf = 'assets/images/users/'.$new_file;
        $user = User::find($id);
        return $this->saving($request, $user, $pathOf);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);
        $user->delete();
        Alert::error('Done', 'Admin deleted');
        return back();
    }

    /**
     * @param Request $request
     * @param $user
     * @param string $pathOf
    
     */
    public function saving(Request $request, $user, string $pathOf)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->img = $pathOf;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;
        $user->major = $request->major;
        $user->role = 'admin';
        $user->save();
        if ($user) {
            Alert::success('Success', 'You\'ve Successfully update on User');
            return redirect('admin');
        } else {
            Alert::error('Failed', 'update failed');
            return redirect('admin');
        }
    }
}


