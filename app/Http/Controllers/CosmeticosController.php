<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cosmetico;
use App\Marca;
use Illuminate\Http\Request;
use App\Http\Requests\CosmeticoRequest;


class CosmeticosController extends Controller
{
            public function index(){
                $cosmeticos=Cosmetico::get();
                return view('sistema.cosmeticos.index', compact('cosmeticos'));

            }

            public function index2(){
                $cosmeticos=Cosmetico::get();
                return view('sistema.formulariocosmeticos', compact('cosmeticos'));


        }

        public function create(){
            $marcas = Marca::all();
            $categorias = Categoria::all();
            return view('sistema.cosmeticos.create', compact('marcas'),  compact('categorias'));
        }



        public function store(CosmeticoRequest $request){

            $cosmeticos=request()->except('_token');


       Cosmetico::insert($cosmeticos);



        return redirect('cosmeticos');



        }



        public function edit($id){
            $marcas = Marca::all();
        $categorias = Categoria::all();


            $cosmetico=Cosmetico::findOrFail($id);
            return view('sistema.cosmeticos.edit', compact('cosmetico'), compact('categorias','marcas'));

        }


        public function  update(Request $request, $id){
                $cosmetico=Cosmetico::find($id);
                $cosmetico->update($request->all());
                return redirect()->route('cosmeticos.index');


        }
        public function delete($id){
            $cosmetico=Cosmetico::destroy($id);
            return redirect('cosmeticos');
        }

        }

