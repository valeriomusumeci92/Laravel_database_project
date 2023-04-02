<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            // la colonna name_artist corrisponde al valore che do alla proprietà ''name'' del modello Artist dichiarata in models qua creo solo la tabella, la collego alla proprietà name del Modello Artist su ArtistController dove creo il nuovo oggetto di classe Artist appunto che eredita tutte le proprietà del Modello padre Artist quello in models.
            $table->string('name');
            // qua creo la colonna artist_genre che corrisponderà alla proprietà ''genre'' dichiarata in models Artist con la $fillable soitamente li sfa uguale per non sbagliare ma per avere coscienza di cosa stiamo facendo ricorda che il valore assegnato qui a $table corrisponde a ciò che mettere in $request"qua" quando nel ArtistController creerai un nuovo oggetto col
            // MASS ASSIGN 
            $table->string('genre');
            // Aggiungo un ulteriore campo di inpunt nel form, gli do l'attributo name='artist_album'', creo la rotta con metodo post nella quale richiamo l'ArtistController e la sua funzione 'store' (per la logica me ne occuperò nel relativo controller)
            $table->string('band');
            
            $table->timestamps();
            
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
