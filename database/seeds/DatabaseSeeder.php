<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CATEGORIES

  			DB::table('categories')->insert([
	  			[	'name' => 'Oficial',
	  				'description' => 'Comunicados y temas de gran importancia para la comunidad de TuForo.Net.',
	  				'url' => 'oficial'
	  			],
	  			[	'name' => 'General',
	  				'description' => 'Charlas, esparcimiento y temas que no tienen cabida en los otros subforos.',
	  				'url' => 'general'
	  			],
	  			[	'name' => 'Motor',
	  				'description' => 'Todo sobre motor: Coches, noticias, curiosidades ...',
	  				'url' => 'motor'
	  			],
	  			[	'name' => 'Noticias',
	  				'description' => 'Temas de actualidad y noticias de prensa.',
	  				'url' => 'noticias'
	  			],
	  			[	'name' => 'Electrónica',
	  				'description' => 'Temas relacionados con la tecnología, informática, telefonía ...',
	  				'url' => 'electronica'
	  			],
	  			[	'name' => 'Juegos',
	  				'description' => 'Temas sobre Videojuegos, independientemente de su plataforma.',
	  				'url' => 'juegos'
	  			],
	  			[	'name' => 'Música',
	  				'description' => 'Conciertos, festivales, lanzamientos y todo lo relacionado con el mundo de la música.',
	  				'url' => 'musica'
	  			],
	  			[	'name' => 'Política',
	  				'description' => 'Debates sobre ideologías, partidos políticos, campañas electorales ...',
	  				'url' => 'politica'
	  			],
	  			[	'name' => 'Fitness',
	  				'description' => 'Temas relacionados con el mundo del fitness, el gimnasio y las pesas.',
	  				'url' => 'fitness'
	  			],
	  			[	'name' => 'Deportes',
	  				'description' => 'Todo lo relacionado con temas deportivos como fútbol, baloncesto, tennis ...',
	  				'url' => 'deportes'
	  			],
	  			[	'name' => 'Criptomonedas',
	  				'description' => 'Todo lo relacionado con Bitcoin, Ethereum, Blockchain ...',
	  				'url' => 'criptomonedas'
	  			]
	  		]);  

	  	/*
	  	// USER

  			DB::table('users')->insert([
  				[	'name' => 'ViBoXx',
  					'email' => 'viboxx@gmail.com',
  					'password' => Hash::make('Supermarche666!'),
  					'remember_token' => str_random(60),
  					'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  					'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  					'last_activity' => Carbon::now()->format('Y-m-d H:i:s'),
  					'msg_count' => 1,
  					'thread_count' => 1,
  					'user_pic' => '/storage/src/profiles/ViBoXx.gif',
  					'user_title' => '⭐ Maestro del Foro ⭐'
  				]
  			]);
		
	  	// THREADS

  			DB::table('threads')->insert([
  				[	'category' => 1,
  					'thread' => 'Bienvenidos a TuForo.Net',
  					'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  					'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
  					'creator' => 'ViBoXx',
  					'last_reply_time' => Carbon::now()->format('Y-m-d H:i:s'),
  					'last_reply_user' => 'ViBoXx'
  				]
  			]);

  		// MESSAGES

  			DB::table('messages')->insert([
  				[	'thread_id' => 1,
  					'on_thread_id' => 1,
  					'creator' => 1,
  					'content' => '<b>Bienvenidos a TuForo.Net!!!</b><div>Que lo paséis Bien :D</div><div><br></div><div style="text-align: center;"><br></div><div style="text-align: center;"><img src="https://sayingimages.com/wp-content/uploads/bring-in-celebration-meme.jpg"><br>',
  					'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  					'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  				]
  			]);

  			// UPDATE CATEGORY

  			DB::table('categories')->where('id', '=', 1)->update([
			'last_msg_title' => 'Bienvenidos a TuForo.Net',
			'last_msg_time' => Carbon::now()->format('Y-m-d H:i:s')
			]);
			*/
    }
}
