<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application as ApplicationAlias;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ApplicationAlias|Factory|View
     */
    public function index(): View|Factory|ApplicationAlias
    {
        $users =User::all()->where('role','user');
        return view('users',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return ApplicationAlias|Factory|View
     */
    public function create(): View|Factory|ApplicationAlias
    {
        return view('create-users');
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
            return redirect('user');
        }else{
            $users = User::paginate($num);
            return view('users',[
                'users'=>$users
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
        $user = User::find($id);
        return view('edit-users',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return ApplicationAlias|Redirector|RedirectResponse
     */
    public function update(Request $request, $id): Redirector|RedirectResponse|ApplicationAlias
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
        Alert::error('Done', 'user deleted');
        return back();
    }

    /**
     * @param Request $request
     * @param $user
     * @param string $pathOf
     * @return ApplicationAlias|RedirectResponse|Redirector
     */
    public function saving(Request $request, $user, string $pathOf): RedirectResponse|ApplicationAlias|Redirector
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->img = $pathOf;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;
        $user->major = $request->major;
        $user->save();
        if ($user) {
            Alert::success('Success', 'You\'ve Successfully update on courses');
            return redirect('user');
        } else {
            Alert::error('Failed', 'update failed');
            return redirect('user');
        }
    }
}
