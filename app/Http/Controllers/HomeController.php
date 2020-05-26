<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Http\Requests\StoreIncidenciaRequest;
use App\Incidencia;
use App\Prioridad;
use App\TipoIncidencia;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prioridades = Prioridad::all()->pluck('name','id');
        $tipo_incidencias = TipoIncidencia::all()->pluck('name','id');

        $incidencias = Incidencia::with('estado')->byuser()->get();

        return view('home', compact('prioridades', 'tipo_incidencias', 'incidencias'));
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
        $usuarios = User::select('users.id', 'users.name')
                                ->join('role_user', 'users.id', '=', 'role_user.user_id' )
                                ->where('role_user.role_id','=','2')
                                ->get();

        return view('incidencia.ver', compact('incidencia','usuarios'));
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
