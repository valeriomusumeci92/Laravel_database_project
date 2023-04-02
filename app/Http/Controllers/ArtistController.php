<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistRequest;
use index;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index(){
        // Bisgona definire una nuova variabile che contenga del modello Artist tutti gli oggetti creati con la helper function all gli dico ''dalla classe ritornami tutti gli artisti creati 
        $artists = Artist::all();
        // dd($artists -> all()); questo dd mi mostra 1 QUANTI OGGETTI DI QUELLA CLASSE HO CREATO 2 LE LORO PROPRIETA 3A QUALE TIPO DI DB SONO CONNESSI E COME SONO COMESSI AD ESSO
        // nel compact passo i dati alla vista usando la helper function compact (passing data to views in Views section sulla documentazione ,il nome della variabile come stringa senza il dollaro
return view('artist.index' , compact('artists'));

    }
    public function create (){
        return view('artist.create');
    }

    // Mass Assign method for new object Declaration
public function store (ArtistRequest $request){

    $artist = Artist::create ([
        'name' => $request ->name,
        'genre' => $request ->genre,
        'band' => $request->band,
        // STORAGE AN IMAGE INSERT BY A USER ON ONE OF THE INPUT OF THE FROM IN CREATING AN ARTIST, PUBLIC FOLDER  SINCE THE IMG WILL NOT BE CONTROLLED BY VITE AND IT WILL APPEAR ON THE WEB SITE, SO EVERYTHING THAT WILL BE DESPLAYED ON THE WEB SITE BELONGS TO THE PUBLIC IMG
        'img' => $request->file('img')->store('/public/image'),
        // DEVO CREARE LA COLONNA ''img'' Nella tabella connessa al form nella sezione create artist
    ]);
    // richiamo il , message del with indicando 2 paramaetri la sessione 'successMessagge che richiamerò nella layout.blade (vai li a vedere come) e il messaggio da mostrare quando l'utente ha inserito con successo il suo artista preferito 
    return redirect((route ('artist.index')))->with ('successMessage' , "Artist created!" );
}
public function show($id){
    // il metodo find ed il metodo all mi consentono di richiamare i dati relativi di un oggetto di class Artist qua gli sto dicendo di tutti gli oggetti con classe Artist creati trova il parametro ID e dammelo dopo di che return la vista della pagina artist.show con tutti i dati del modello artist, compact ('modell') mi da tutti i dati del relativo modello.
    $artist = Artist::find($id);
   
    return view('artist.show' , compact('artist'));
    
    
}
}