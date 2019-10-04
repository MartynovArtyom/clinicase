<?php

use Illuminate\Database\Seeder;

class SpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialty')->insert([
	        array('name' => 'Anatomo-pathologie'),
	        array('name' => 'Anesthésie-réanimation'),
	        array('name' => 'Biologie médicale'),
	        array('name' => 'Cardiologie'),
	        array('name' => 'Chirurgie'),
	        array('name' => 'Chirurgie orthopédique'),
	        array('name' => 'Chirurgie plastique, reconstructrice et esthétique'),
	        array('name' => 'Dermatologie-Vénérologie'),
	        array('name' => 'Gastroentérologie'),
	        array('name' => 'Gériatrie'),
	        array('name' => 'Gynécologie-obstétrique'),
	        array('name' => 'Médecine légale'),
	        array('name' => "Médecine d'expertise et d'évaluation du dommage corporel"),
	        array('name' => 'Médecine générale'),
	        array('name' => 'Médecine aiguë'),
	        array('name' => 'Médecine d’urgence'),
	        array('name' => 'Médecine interne'),
	        array('name' => 'Médecine nucléaire'),
	        array('name' => 'Médecine physique et réadaptation'),
	        array('name' => 'Neurochirurgie'),
	        array('name' => 'Neurologie'),
	        array('name' => 'Ophtalmologie'),
	        array('name' => 'Oncologie'),
	        array('name' => 'Oto-rhino-laryngologie'),
	        array('name' => 'Pédiatrie'),
	        array('name' => 'Pneumologie'),
	        array('name' => 'Psychiatrie adulte'),
	        array('name' => 'Psychiatrie infanto-juvénile'),
	        array('name' => 'Radiothérapie'),
	        array('name' => 'Radiologie'),
	        array('name' => 'Rhumatologie'),
	        array('name' => 'Stomatologie'),
	        array('name' => 'Urologie')
	    ]);
    }
}
