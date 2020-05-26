<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(5);

        return view('admin.roles.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all();

        return view('admin.roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol Guardado con éxito');
    }


    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }


    public function edit(Role $role)
    {
        $permissions = Permission::get();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $role->fill($request->all())->save();

        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol se actualizó con éxito');
    }


    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('info', 'Rol eliminado satisfactoriamente');
    }
}
