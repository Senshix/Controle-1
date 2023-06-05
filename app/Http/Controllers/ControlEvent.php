<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ControlEvent extends Controller
{
    // selection de page Creatae comme page Home 
    public function homePage() 
    {
        return view('Event.create');
    }
    // L'ajout de prduit
    public function addProduit(Request $request)
    {
        $request->validate([
            'title'=>'required|min:4',
            'description'=>'required',
            'Start_date'=>'required',
            'End_date'=>'required', 
            'Price'=>'required'
        ]);

        $produit = new  event();
        $produit->title = $request->title;
        $produit->description = $request->description;
        $produit->Start_date = $request->Start_date;
        $produit->End_date = $request->End_date;
        $produit->Price = $request->Price;

        $produit->save();
        return redirect()->route('route-all-liste');

    }
    // tous les produits va etre selecter pour la recherche 
    public function allProduit(){
        $produit = event::all();

        return view('event.liste' , compact('produit'));
    }
    // pour trouver le produit de id souhaiter
    public function editProduit($id)
    {
        $produit = event::find($id);
        return view('Event.edit' , compact('produit'));

    }
    //  Mise a jour de produit
    public function updateProduit(Request $request , $id){

        $produit = event::find($id);
        $produit->title = $request->title;
        $produit->description = $request->description;
        $produit->Start_date = $request->Start_date;
        $produit->End_date = $request->End_date;
        $produit->Price = $request->Price;
        $produit->save();
       


        return redirect()->route('route-all-liste');
        
    }
    // Supprimer l item 
    public function deleteProduit($id){
        event::destroy($id);
        return redirect()->route('route-all-liste');
    }
}
