<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
 
    public $alumnos;
    public $val;

    function __construct()
    {
        $this->alumnos = Alumno::paginate(5);
        $this->val = [
            'nombre'    => ['required', 'min:3', 'max:50', 'regex:/^[a-zA-Z\s]+$/'],
            'apellidoP' => 'required',
            'email'     => 'required'
        ];
    }

    public function index()
    {
       // $alumnos = DB::table('alumnos')->get();
       
        return view("alumnosV2/index", ['alumnos'=> $this->alumnos]);
    }

    public function create()
    {
        //otra forma
        //$alumnos = Alumno::get();
        return view('alumnosV2/frm', ['alumnos'=> $this->alumnos, 'accion'=>'C', 'des'=>'', 'btn'=>'INSERTAR', 'color'=>'btn-success']);
    }

    public function store(Request $request)
    {
        $validado = $request->validate($this->val);
        Alumno::create($validado);
        return redirect()->route("alumnos.index");
    }

    public function show(Alumno $alumno)
    {
        return view('alumnosV2/frm', ['alumnos'=> $this->alumnos, "alumno"=>$alumno, 'accion'=>'S', 'des'=>'disabled', 'btn'=>'ELIMINAR', 'color'=>'btn-danger']);
    }

    public function edit(Alumno $alumno)
    {
        return view('alumnosV2/frm', ['alumnos'=> $this->alumnos, "alumno"=>$alumno, 'accion'=>'E', 'des'=>'', 'btn'=>'EDITAR', 'color'=>'btn-warning']);
    }

    public function update(Request $request, Alumno $alumno)
    {
        $validado=$request->validate($this->val);
        $alumno->update($request->all());
        return redirect()->route("alumnos.index");
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route("alumnos.index");
    }
}
