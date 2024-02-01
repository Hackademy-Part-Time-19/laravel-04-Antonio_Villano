<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $articoli=[
        ['titolo'=>'articolo 1','descrizione'=>'descrizione di prova 1','autore'=>'Marco Rossi','categoria'=>'categoria 1'],
        ['titolo'=>'articolo 2','descrizione'=>'descrizione di prova 2','autore'=>'Roberto Bianchi','categoria'=>'categoria 2'],
        ['titolo'=>'articolo 3','descrizione'=>'descrizione di prova 3','autore'=>'Carlo Neri','categoria'=>'categoria 3'],
        ['titolo'=>'articolo 4','descrizione'=>'descrizione di prova 4','autore'=>'Michele Verdi','categoria'=>'categoria 4'],
    ];
    private $categories= [];
    public function __construct(){
        foreach ($this->articoli as $articolo) {
            if(!in_array($articolo['categoria'],$this->categories)){
            $this->categories[] = $articolo['categoria'];
        }
        }
    }
    public function getArticles(){
        return $this->articoli;
    }
    public function setArticles($valore){
        $this->articoli =$valore;
    }
    public function homepage(){
        $titolo='Homepage';
        return view('home',['categories'=>$this->categories, 'nome_blog'=>$titolo]);

    }
    public function contacts(){

            return view('contatti');

    }
}
