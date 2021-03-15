<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HorariosRequest;
use App\Models\Horarios;

class HorariosController extends Controller
{

    
    public function crear(HorariosRequest $request){
        Horarios :: create([
            'entrada' => $request -> entrada,
            'salida' => $request -> salida,
            'turno' => $request -> turno
            ]);
            
            return back();
        }
        public function delete($id){
            Horarios :: destroy ($id);
            return back();
        }


        public function editar(Horarios $id){
            
            return view('editHorarios', compact ('id'));
        }
        
        public function update(HorariosRequest $request, Horarios $id){
            Horarios :: where ('id', $id->id)->update([
                'entrada' => $request -> entrada,
                'salida' => $request -> salida,
                'turno' => $request -> turno
                ]);
                return redirect('horarios');
            }


            public function horarios(){
                $target = Horarios::all();
                return view('horarios', compact ('target'));
            }
        
        
        }
        