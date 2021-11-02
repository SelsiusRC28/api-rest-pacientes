<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
        	[
	        	'nombres' => 'Alex Oscar',
	        	'apellidos' => 'Gamarra Solis',
	        	'edad' => 28,
	        	'sexo' => 'Masculino',
	        	'dni' => 70218511,
	        	'tipo_sangre' => 'A+',
	        	'telefono' => 943124351,
	        	'correo' => 'alex@gmail.com',
	        	'direccion' => 'Jr. Ramón Castilla 110'
        	],
        	[
	        	'nombres' => 'María Perla',
	        	'apellidos' => 'Saruc Main',
	        	'edad' => 34,
	        	'sexo' => 'Femenino',
	        	'dni' => 80218522,
	        	'tipo_sangre' => 'A-',
	        	'telefono' => 952312435,
	        	'correo' => 'maria@gmail.com',
	        	'direccion' => 'Jr. Manuel Ruíz 230'
        	],
        	[
	        	'nombres' => 'Julio Ramón',
	        	'apellidos' => 'Quiroga Hasher',
	        	'edad' => 52,
	        	'sexo' => 'Masculino',
	        	'dni' => 23219913,
	        	'tipo_sangre' => 'A+',
	        	'telefono' => 977123331,
	        	'correo' => 'julio@gmail.com',
	        	'direccion' => 'Jr. Enrique Palacios 202'
        	],
        	[
        		'nombres' => 'Mario Idalgo',
				'apellidos' => 'Cuerbo Nieto',
				'edad' => 18,
				'sexo' => 'Masculino',
				'dni' => 80218511,
				'tipo_sangre' => 'B+',
				'telefono' => 932112351,
				'correo' => 'mario@gmail.com',
				'direccion' => 'Jr. Manuel Ruiz 800'
        	],
        	[
        		'nombres' => 'María Rosa',
        		'apellidos' => 'Jara Uri',
				'edad' => 40,
				'sexo' => 'Femenino',
				'dni' => 62215777,
				'tipo_sangre' => 'AB+',
				'telefono' => 951774351,
				'correo' => 'maría@gmail.com',
				'direccion' => 'Jr. Ramón Castilla 401'
        	],
        	[
        		'nombres' => 'Kevin Juan',
				'apellidos' => 'Rodriguez Ezquivel',
				'edad' => 49,
				'sexo' => 'Masculino',
				'dni' => 78218555,
				'tipo_sangre' => 'A+',
				'telefono' => 934994351,
				'correo' => 'kevin@gmail.com',
				'direccion' => 'Jr. Alfonso Ugarte 2020'
        	],
        	[
        		'nombres' => 'Cielo Celeste',
				'apellidos' => 'Lázaro Peterson',
				'edad' => 50,
				'sexo' => 'Femenino',
				'dni' => 23888591,
				'tipo_sangre' => 'A-',
				'telefono' => 971661152,
				'correo' => 'cielo@gmail.com',
				'direccion' => 'Jr. Francisco Bolognesi'
        	]
        ]);
    }
}
