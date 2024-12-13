<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Grupo16353;
use App\Models\GrupoHorario16353;
use App\Models\Lugar;
use App\Models\Materia;
use App\Models\Periodo;
use App\Models\Personal;
use Illuminate\Http\Request;

class GrupoHorario16353Controller extends Controller
{
    public $grupoHorarios;
    public $val;

    public $grupos;
    public $lugars;

    function __construct()
    {
        $this->grupos = Grupo16353::get();
        $this->lugars   = Lugar::get();

        if (request("txtBuscar")) {
            $txtBuscar = request("txtBuscar");
        } else {
            $txtBuscar = "";
        }

        $this->grupoHorarios = GrupoHorario16353::paginate(5);
        $this->val = [
            'grupo16353_id'        => 'required',
            'lugar_id'       => 'required',
            'dia'        => 'required',
            'hora'        => 'required'
        ];
    }

    public function index()
    {
        return view("gruposHorarios16353/index16353", ['grupoHorarios' => $this->grupoHorarios]);
    }

    public function create()
    {
        return view('gruposHorarios16353/frm16353', ['grupoHorarios' => $this->grupoHorarios, 'grupos' => $this->grupos, 'lugars' =>  $this->lugars, 'accion' => 'C', 'des' => '', 'btn' => 'INSERTAR', 'color' => 'btn-success']);
    }

    public function store(Request $request)
    {   
        
        $validado = $request->validate($this->val);
        GrupoHorario16353::create($validado);
        $grupo16353 = Grupo16353::where('id', $request->grupo16353_id)->first();
        //return $grupo17126->id;
        $periodos  = Periodo::get();
        $materias = Materia::get();
        $personals = Personal::get();
        return view('grupos16353/frm16353', ['grupos' => $this->grupos, 'lugars' => $this->lugars, "grupo16353" => $grupo16353,'periodos' => $periodos, 'materias' => $materias, 'personals' =>  $personals, 'accion' => 'E', 'des' => '', 'btn' => 'EDITAR', 'color' => 'btn-warning']);
        //return redirect()->route("grupoHorario17126s.index")->with('mensaje', 'El registro se inserto correctamente');
    }

    public function show(GrupoHorario16353 $grupoHorario16353)
    {
        return view('gruposHorarios16353/frm16353', ['grupoHorarios' => $this->grupoHorarios, 'grupoHorario16353' => $grupoHorario16353, 'grupos' => $this->grupos, 'lugars' =>  $this->lugars, 'accion' => 'S', 'des' => 'disabled', 'btn' => 'ELIMINAR', 'color' => 'btn-danger']);
    }

    public function edit(GrupoHorario1635 $grupoHorario1635)
    {
        return view('gruposHorarios16353/frm16353', ['grupoHorarios' => $this->grupoHorarios, "grupoHorario16353" => $grupoHorario16353, 'grupos' => $this->grupos, 'lugars' =>  $this->lugars, 'accion' => 'E', 'des' => '', 'btn' => 'EDITAR', 'color' => 'btn-warning']);
    }

    public function update(Request $request, GrupoHorario1635 $grupoHorario1635)
    {
        $validado = $request->validate($this->val);
        $grupoHorario16353->update($validado);
        return redirect()->route("grupoHorario16353s.index");
    }

    public function destroy(GrupoHorario1635 $grupoHorario1635)
    {
        $grupoHorario16353->delete();
        return redirect()->route("grupoHorario16353s.index");
    }
}
