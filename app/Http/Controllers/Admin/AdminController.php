<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Incidencia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        $usuarios = User::all()->count();
        $incidencias_nuevas = Incidencia::whereIdEstado(1)->count();
        $incidencias_en_espera = Incidencia::whereIdEstado(2)->count();
        $incidencias_cerradas = Incidencia::whereIdEstado(4)->count();
        $operarios = User::select(DB::raw('users.id, users.name as user_name, roles.id, roles.name as role_name'))
            ->join('role_user', 'users.id', '=', 'role_user.user_id' )
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('role_user.role_id','=','2')
            ->get();
        return view('admin.index', compact('usuarios', 'incidencias_nuevas', 'incidencias_en_espera',
                                        'incidencias_cerradas', 'usuarios', 'operarios'));
    }
}
