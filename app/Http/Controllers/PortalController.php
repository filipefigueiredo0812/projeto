<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public $listaContactos =[
        'https://google.pt',
        'https://gmail.com',
        'https://sites.google.com/view/lethalarms',
        'https://sites.google.com/view/lethalmods'
    ];
    
    
    public function index () {
        return view('index');
        
    }
    public function noticias () {
        return view('noticias');
        
    }
    public function empresa () {
        return view('empresa');
        
    }
    public function ondeEstamos () {
        return view('onde-estamos');
        
    }
    public function contactos () {
        $a = count($this->listaContactos);
        return view('contactos',['sites' => $this->listaContactos, 'nsites'=> $a]);
        
    }
    public function processar (Request $r) {
        $nome = $r->nome;
        $morada = $r->morada;
        $automovel = $r->automovel;
        
        return view('processar', [
            'nome'=>$nome,
            'morada'=>$morada,
            'automovel'=>$automovel
        ]);
    }
}
