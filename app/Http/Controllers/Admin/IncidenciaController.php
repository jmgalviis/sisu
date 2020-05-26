<?php

namespace App\Http\Controllers\Admin;

use App\Comentario;
use App\Estado;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIncidenciaRequest;
use App\Incidencia;
use App\Prioridad;
use App\TipoIncidencia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidencias = Incidencia::with([
            'estado' => function ($q) {
                $q->select('id', 'name','color');
            },
            'tipo_incidencia' => function ($q) {
                $q->select('id', 'name');
            },
            'user',
            'comentarios'
        ])->get();

        return view('admin.incidencia.index', compact('incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('incidencia.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidenciaRequest $request)
    {

        $incidencia = Incidencia::create([
            'title' => $request->input('titulo'),
            'description' => $request->input('descripcion'),
            'id_user' => Auth::user()->id,
            'id_tipo_incidencia' => $request->input('tipo_incidencia'),
            'id_prioridad' => $request->input('prioridad'),
        ]);
        if ($request->file('file')){
            $path = Storage::disk('public')->put('archivos', $request->file('file'));
            $incidencia->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        $incidencia->load('comentarios')->get();
        return view('incidencia.ver', compact('incidencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        $incidencia->load('comentarios','user')->get();
        $usuarios = User::select('users.id', 'users.name')
            ->join('role_user', 'users.id', '=', 'role_user.user_id' )
            ->where('role_user.role_id','=','2')
            ->get();

        return view('incidencia.ver', compact('incidencia','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencium)
    {
        $incidencium->id_prioridad = $request->input('id_prioridad');
        $incidencium->id_estado = $request->input('id_estado');
        $incidencium->id_user_asignado = $request->input('id_user_asignado');

        $incidencium->save();


        return redirect()->route('incidencia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function agregarcomentario()
    {
        Comentario::create([
            'id_user' => auth()->user()->id,
            'comentario' => request('comentario'),
            'id_incidencia' => request('id_incidencia'),
        ]);

        return  back();
    }
}
