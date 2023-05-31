<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Szavak;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function index(){
        return Szavak::all();
    }
    public function show($id){
        return Szavak::find($id);
    }
    public function destroy($id){
        try{
            Szavak::find($id)->delete();
        }catch(Exception $ex){
        }
    }
    public function getByTema($temaId){
        return DB::table('szavaks')->where('temaId',$temaId)->get();
    }
}
