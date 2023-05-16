<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motivation;
use Throwable;
use Illuminate\Support\Facades\DB;
use App\Models;
class MotivationController extends Controller
{
    //
    public function show()
    {
        $liste = Motivation::all();
        return view('listeMotivation', ["motivations" => $liste]);
    }

    public function delete($id)
    {
        $motivation = Motivation::find($id);
       $motivation->delete();
       $liste = Motivation::all();
       //return redirect('/listeMotivation')->with('success', "Account successfully registered.");
        return view('listeMotivation', ["motivations" => $liste]);
    }
    public function edit($id)
    {
        $motivation = Motivation::find($id);
       return view('save_motivation', ["motivation" => $motivation]);
        //return view('listeMotivation', ["motivations" => $liste]);
    }
    public function update(Request $validated)
    {
        $motivation = Motivation::find($validated->input('id'));
        $motivation->nom = $validated->input('nom');
        $motivation->tel = $validated->input('tel');
        $motivation->ville = $validated->input('ville');
        $liste = Motivation::all();
       $motivation->update();
       //return redirect('/listeMotivation')->with('success', "Account successfully registered.");
        return view('listeMotivation', ["motivations" => $liste]);
    }


    public function save(Request $validated)
    {
        try {
            DB::beginTransaction();
            Motivation::Create(["nom" => $validated->input('nom'),"tel" => $validated->input('tel'), "ville" => $validated->input('ville') ]);
            DB::commit();
            //$validated = $request->validated();
            /*$query = DB::table('motivation')->insert([
            'label' => $validated->input('label')
        ]);*/
        $liste = Motivation::all();
        //$motivation->update();
        //return redirect('/listeMotivation')->with('success', "Account successfully registered.");
         return view('listeMotivation', ["motivations" => $liste]);
            //return redirect('/client_liste')->with('success', "Account successfully registered.");
        } catch (Throwable $th) {
            return back()->withErrors("Echec lors de L'enregistrement");
        }
    }
}
