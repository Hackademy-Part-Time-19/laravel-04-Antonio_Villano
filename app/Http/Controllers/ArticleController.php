<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articoli=[
        1=>['titolo'=>'articolo 1','descrizione'=>'descrizione di prova 1','autore'=>'Marco Rossi','categoria'=>'sport'],
        2=>['titolo'=>'articolo 2','descrizione'=>'descrizione di prova 2','autore'=>'Roberto Bianchi','categoria'=>'cultura'],
        3=>['titolo'=>'articolo 3','descrizione'=>'descrizione di prova 3','autore'=>'Carlo Neri','categoria'=>'film'],
        4=>['titolo'=>'articolo 4','descrizione'=>'descrizione di prova 4','autore'=>'Michele Verdi','categoria'=>'elettronica'],
    ];
    private $categories= ['sport','cultura','film','elettronica'];
    public function __construct(){
        foreach ($this->articoli as $articolo) {
            if(!in_array($articolo['categoria'],$this->categories)){
            $this->categories[] = $articolo['categoria'];
        }
        }
    }
    public function index() {
        $titolo='Articoli';
        return view('articoli',compact('titolo'),['categories'=>$this->categories,'articoli'=>$this->articoli]);
    }
    public function show($id=0) {

        return view('articolo',['articolo'=>$this->articoli[$id]]);
    }
    public function byCategory($category){
        $articlesByCategory=[];
        foreach($this->articoli as $articolo){
            if($articolo['categoria'] == $category ){
                $articlesByCategory[]=$articolo;
            }
        }
        return view('articoli-bycategory', ['articoli'=>$articlesByCategory]);

    }
}
