<?php

use Illuminate\Database\Seeder;
use App\Card;
use App\Deck;

class CardsOfficialDeckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $deck = new Deck();
        $deck->name = 'official';
        $deck->save();
                        
        $file =__DIR__.'/../../public/images/cards/official/';
        
        foreach( new DirectoryIterator($file) as $file) {
            if( $file->isFile() === TRUE) {    
                $this->command->info($file->getFilename());            
                $card = new Card();
                $card->fk_decks = $deck->id;
                $card->name = htmlentities($file->getFilename());
                $card->save();
            }
        }
    }
}
