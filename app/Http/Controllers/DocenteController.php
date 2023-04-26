<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Collection;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        $e = DB::table('matdocentes')->count();
       
        return view('home.inicio', ['e' => $e]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Mpromediodoc($id)
    {
       
        $dat = array();
       $docs =DB::table('matdocentes')
       ->select('id_d')
       ->where('matdocentes.id_s', '=', $id)
       ->groupby('id_d')
       ->get();
       for($i = 0; $i < count($docs); $i++) {
       
        $dat[$i]=$this->promsDocente($docs[$i]->id_d);
          $d = $this->extraeDocente($docs[$i]->id_d);
        $d=  $d->first()->nombre;
        $doc[$i]= $d;
        $r[$i] = array_sum($dat[$i]);
        $r[$i] = intval($r[$i] /10);
        
    }
    //dd($r);
    
    return view('docentes.mejordelaMateria',
    [ 
      'doc' => $doc,  
      'dat' => $dat,
      'r' => $r
                  ]);
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function showDocentes(Docente $docente)
    {
        $docentes = DB::table('docentes')->get();
        //dd($docentes);
        return view('docentes.show', ['docentes' => $docentes]);
    }
    public function DocentesMateria($id)
    {
        $d = DB::table('docentes')
       
        ->join('matdocentes', 'docentes.id', '=', 'matdocentes.id_d')
        ->join('materias','materias.id','=','matdocentes.id_s')
        ->select('docentes.ID','docentes.nombre','materias.sigla')->where('docentes.id', '=', $id)
        ->groupBy('docentes.ID','docentes.nombre','materias.sigla')
        ->get();
        
       $doc = $this->extraeDocente($id);
       
       return view('docentes.verDocMat',['DocMat' => $d,
                                        'doc' => $doc
                                                      ]);
    }
    public function extraeDocente($id)
    {

        $doc = DB::table('docentes')
        ->select('docentes.nombre')->where('docentes.id', '=', $id)
        ->get();
        return $doc;
    }
    public function MatDocentes($id)
    {
        $d = DB::table('matdocentes')
       
        ->join('docentes', 'docentes.id', '=', 'matdocentes.id_d')
        ->join('materias','materias.id','=','matdocentes.id_s')
        ->select('docentes.ID','docentes.nombre','materias.sigla')->where('materias.ID', '=', $id)
        ->groupBy('docentes.ID','docentes.nombre','materias.sigla')
        ->get();
        $m = DB::table('materias')
        ->select('materias.sigla')->where('materias.ID', '=', $id)
        
        ->get();


       

       return view('materias.verMatDoc',['DocMat' => $d,
                                        'm' => $m
                                                      ]);

    }

    public function ShowMaterias()
    {
        $mat = DB::table('materias')->get();
        //dd($docentes);
        return view('materias.show', ['mat' => $mat]);
    }
    public function ShowEncuestas()
        {

           return view('encuestas.resultado');
        }

        public function promsDocente($id)
        {
            $p = array();

            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p1'));
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p2')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p3')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p4')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p5')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p6'));           
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p7')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p8')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p9')); 
            $p[] = intval(DB::table('matdocentes')->where('id_d', '=', $id)->avg('p10')); 
            return $p;
        }   
        public function verDoc($n)
        {
           
            $docSem = array();
             $dat = DB::table('materias')->where('sigla', 'like', '%'.$n.'%')->get();
             for($i = 0; $i < count($dat); $i++) {
                        $docSem[]= $p = $this->extraeDocentes($dat[$i]->ID);
            }  
          //dd($docSem);
            // dd(count($docSem[0]));
             return view('materias.docentesporsemestre', 
             [
                'docentes' => $docSem,
                'materias' => $dat
            ]);
             
        }   
        public function  extraeDocentes ($id)
        {
            $d = DB::table('matdocentes')
        
            ->join('docentes', 'docentes.id', '=', 'matdocentes.id_d')
            ->join('materias','materias.id','=','matdocentes.id_s')
            ->select('docentes.ID','docentes.nombre')->where('materias.ID', '=', $id)
            ->groupBy('docentes.ID','docentes.nombre')
            ->get();
           
            
           
            return $d;
        }   
        public function ExtraeMateria($id)
        {

            $d = DB::table('materias')->where('ID', '=', $id)->get();
           
            
            return $d;
            
        }   
        public function ShowDocSemestre()
        {

            
            //$dat = DB::table('materias')->where('name', 'like', '%'.$n.'%')->get();
            return view('materias.materiasporsemestre');
            
}   
    public function ResultadoDocente($id)
    {
        
       
        
            
        $p = $this->promsDocente($id);
        
        $r = array_sum($p);
        $r = intval($r/10);
       

        switch($r)
            {
            case 1:
                $re= 'Totalmente en desacuerdo';
                break;
            case 2:
                $re= 'Desacuerdo';
                break;
            case 3:
                $re= 'Ni de acuerdo ni en desacuerdo';
                break;
            case 4:
                $re= 'De acuerdo';
                break;
            case 5:
                $re= 'Totalmente de acuerdo';
                break;
                

            }
        
        $res = array();
        for($i = 0; $i < count($p); $i++) {
          
            switch($p[$i])
            {
            case 1:
                $res[$i]= 'Totalmente en desacuerdo';
                break;
            case 2:
                $res[$i]= 'Desacuerdo';
                break;
            case 3:
                $res[$i]= 'Ni de acuerdo ni en desacuerdo';
                break;
            case 4:
                $res[$i]= 'De acuerdo';
                break;
            case 5:
                $res[$i]= 'Totalmente de acuerdo';
                break;
                

            }
        }
        
        
  
         $doc = DB::table('docentes')
        ->select('docentes.nombre')->where(
            
            'docentes.id', '=', $id)
        ->get();

        return view('encuestas.resultadoDocente',[
            'p' => $p,
            'r'=> $res,
            're'=>$re,
            'res' => $r,
            'doc' => $doc
                      ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
    }
}
