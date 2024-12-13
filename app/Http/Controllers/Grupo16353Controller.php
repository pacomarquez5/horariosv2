<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Grupo16353;
use App\Models\GrupoHorario16353;
use App\Models\Lugar;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Personal;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Monolog\Handler\SendGridHandler;

class Grupo16353Controller extends Controller
{
    public $grupos;
    public $val;

    public $materias;
    public $personals;
    public $periodos;

    function __construct()
    {
        $this->materias = Materia::get();
        $this->personals   = Personal::get();
        $this->periodos   = Periodo::get();

        if (request("txtBuscar")) {
            $txtBuscar = request("txtBuscar");
        } else {
            $txtBuscar = "";
        }

        $this->grupos = Grupo16353::paginate(5);
        $this->val = [
            'grupo'             => 'required',
            'descripcion'       => 'required',
            'maxAlumnos'        => 'required',
            'materia_id'        => 'required',
            'periodo_id'        => 'required',
            'personal_id'       => 'required'
        ];
    }

    public function index()
    {
        return view("grupos16353/index16353", ['grupos' => $this->grupos]);
    }

    public function create()
    {
        return view('grupos16353/frm16353', ['grupos' => $this->grupos, 'periodos' => $this->periodos, 'materias' => $this->materias, 'personals' =>  $this->personals, 'accion' => 'C', 'des' => '', 'btn' => 'INSERTAR', 'color' => 'btn-success']);
    }

    public function store(Request $request)
    {
        $validado = $request->validate($this->val);
        Grupo16353 ::create($validado);

        $lugars = Lugar::get();
        $grupos = Grupo16353::get();
        $grupo17126 = Grupo16353::where('grupo', $request->grupo)->first();
        //return $grupo17126->id;
        return view('grupos16353/frm16353', ['grupos' => $grupos, 'lugars' => $lugars, "grupo16353" => $grupo16353,'periodos' => $this->periodos, 'materias' => $this->materias, 'personals' =>  $this->personals, 'accion' => 'E', 'des' => '', 'btn' => 'EDITAR', 'color' => 'btn-warning']);
        
        //return redirect()->route("grupo17126s.index")->with('mensaje', 'El registro se inserto correctamente');
    }

    public function show(Grupo16353 $grupo16353)
    {
        return view('grupos16353/frm16353', ['grupos' => $this->grupos, 'grupo16353' => $grupo16353, 'periodos' => $this->periodos, 'materias' => $this->materias, 'personals' =>  $this->personals, 'accion' => 'S', 'des' => 'disabled', 'btn' => 'ELIMINAR', 'color' => 'btn-danger']);
    }

    public function edit(Grupo16353 $grupo16353)
    {
        $lugars = Lugar::get();

        return view('grupos16353/frm16353', ['grupos' => $this->grupos, 'lugars' => $lugars, "grupo16353" => $grupo16353,'periodos' => $this->periodos, 'materias' => $this->materias, 'personals' =>  $this->personals, 'accion' => 'E', 'des' => '', 'btn' => 'EDITAR', 'color' => 'btn-warning']);
    }

    public function update(Request $request, Grupo16353 $grupo16353)
    {
        $validado = $request->validate($this->val);
        $grupo16353->update($validado);
        

        $lugars = Lugar::get();
        $grupo16353 = Grupo16353::where('grupo', $request->grupo)->first();

        return view('grupos16353/frm16353', ['grupos' => $this->grupos, 'lugars' => $lugars,  "grupo16353" => $grupo16353,'periodos' => $this->periodos, 'materias' => $this->materias, 'personals' =>  $this->personals, 'accion' => 'E', 'des' => '', 'btn' => 'EDITAR', 'color' => 'btn-warning']);
        
        return redirect()->route("grupo16353s.index");
    }

    public function destroy(Grupo16353 $grupo16353)
    {
        $grupo16353->delete();
        return redirect()->route("grupo16353s.index");
    }
}
