<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tema;
use Exception;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index(){
        return Tema::all();
    }
    public function show($id){
        return Tema::find($id);
    }
    public function destroy($id){
        try{
            Tema::find($id)->delete();
        }catch(Exception $ex){
        }
    }

}
