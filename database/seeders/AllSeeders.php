<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AllSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin José',
            'nick' => 'capijose',
            'email' => 'admin@ucsp.edu.pe',
            'password' => Hash::make('admin'),
            'fullaccess' => 'yes',
        ]);
        $user1=User::create([
            'name' => 'usuario marcos',
            'nick' => 'marcos',
            'email' => 'marcos@ucsp.edu.pe',
            'password' => Hash::make('marcos'),
            'fullaccess' => 'no',
        ]);
        $user2=User::create([
            'name' => 'usuario1',
            'nick' => 'usuario1',
            'email' => 'usuario1@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        $user3=User::create([
            'name' => 'usuario2',
            'nick' => 'usuario2',
            'email' => 'usuario2@ejemplo.edu.pe',
            'password' => Hash::make('usuario2'),
            'fullaccess' => 'no',
        ]);
        $user4=User::create([
            'name' => 'usuario3',
            'nick' => 'usuario3',
            'email' => 'usuario3@ejemplo.edu.pe',
            'password' => Hash::make('usuario3'),
            'fullaccess' => 'no',
        ]);
        $user5=User::create([
            'name' => 'usuario4',
            'nick' => 'usuario4',
            'email' => 'usuario4@ejemplo.edu.pe',
            'password' => Hash::make('usuario'),
            'fullaccess' => 'no',
        ]);
        $user6=User::create([
            'name' => 'usuario5',
            'nick' => 'usuario5',
            'email' => 'usuario5@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        $user7=User::create([
            'name' => 'usuario6',
            'nick' => 'usuario6',
            'email' => 'usuario6@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        $user8=User::create([
            'name' => 'usuario7',
            'nick' => 'usuario7',
            'email' => 'usuario7@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        $user9=User::create([
            'name' => 'usuario8',
            'nick' => 'usuario8',
            'email' => 'usuario8@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        $user10=User::create([
            'name' => 'usuario9',
            'nick' => 'usuario9',
            'email' => 'usuario9@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        $user11=User::create([
            'name' => 'usuario10',
            'nick' => 'usuario10',
            'email' => 'usuario10@ejemplo.edu.pe',
            'password' => Hash::make('usuario1'),
            'fullaccess' => 'no',
        ]);
        
    }
}
