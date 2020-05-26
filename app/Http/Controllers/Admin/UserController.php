<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        $users = User::paginate(5);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();

        return view('admin.users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        $user->roles()->attach($request->get('roles'));

        return redirect()->route('users.edit', $user)
                         ->with('info', 'Usuario Creado con éxito');

    }


    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }


    public function edit(User $user)
    {
        $roles = Role::get();
        return view('admin.users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        if ($request->has('password')){
            $user->fill([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
            ])->save();
        } else {
            $user->fill([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
            ])->save();
        }

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
                         ->with('info', 'Usuario actualizado con éxito');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'Se eliminó con éxito');
    }
}
