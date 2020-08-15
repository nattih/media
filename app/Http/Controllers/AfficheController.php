<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualites;
use App\Categorie;
class AfficheController extends Controller
{ 
    public function accueil(){
        $actualites= Actualites::all();
        $categories= Actualites::all();
        return view('layout.test',compact('actualites', 'actual', 'categories'));
    }
    
    public function menu(){
        $categories= Categorie::all();
        return view('layout.list', compact( 'categories'));
    }
    public function affiche($categorie){
        $actual=Actualites::paginate(3);
        $categories= Categorie::all();
        $actualites=Actualites::where('categories_id', '=' , $categorie )->get();
        return view('pages.actualite', compact('actualites', 'actual', 'categories'));
    }

    
    
}