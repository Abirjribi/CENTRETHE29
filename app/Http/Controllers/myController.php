<?php

namespace App\Http\Controllers;

use App\Models\activites;
use Illuminate\Http\Request;

class myController extends Controller
{
    public function index(){
        $act1='dessin'; $act2='peinture'; $act3='bricolage';$act3='gravure';$act4='Céramique';$act5='Aquarelle';
        $act6='Bricolage';$act7='Origami';$act8='Art Culinaire';$act9='Story Boarding';$act10='Dande Dessinée';
        $act11='Développement Humain';$act12='Entreprenariat';$act12='Création dentreprise'; $act13='Théâtre';
        $act14='Création de bijoux'; $act15='Informatique'; $act16='Robotique'; $act17='Jeu dechec'; $act18='Français(Lecture/Ecriture)';
        $act19='Anglais(Lecture/Ecriture)';$act20=' Arabe(Lecture/Ecriture)'; $act21='Musique'; $act22='Soft Skills'; 
    return view('activite',compact('act1','act2','act3','act4','act5','act6','act7','act8','act9','act10','act11','act12','act13','act14','act15','act16','act17','act18','act19','act20','act21','act22'));
    function getData ()
    {
        return activites:: all();
    }
}


}

    
