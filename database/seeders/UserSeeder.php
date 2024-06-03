<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'name'=>'Jarred Ondricka',
            'email'=>'cordie.ohara@example.org',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'cyb11D9qAi',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>2,
            'name'=>'Kristina Predovic',
            'email' => 'little.roderick@example.org',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'XjyhdoF4K5',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>3,
            'name'=>'Mr. Brady Kassulke',
            'email'=>'schmidt.mina@example.net',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'gxlhqTWf11',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>4,
            'name'=>'Dr. Maryse Hickle III',
            'email'=>'wkuvalis@example.com',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'Wow4Zy2010',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>5,
            'name'=>'Nella Pagac',
            'email'=>'fgleichner@example.net',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'XWVxl4fKZG',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>6,
            'name'=>'Mr. Jaron Littel',
            'email'=>'noel.goyette@example.com',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'c3dRg6eR7u',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>7,
            'name'=>'Alanis Barton',
            'email'=>'dominique03@example.net',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'ZWnPLadPBN',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>8,
            'name'=>'Ms. Maribel Kuvalis',
            'email'=>'jerde.aurelio@example.net',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'AQMt9EhgBB',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>9,
            'name'=>'Dr. Malcolm Mraz',
            'email'=>'kaci61@example.org',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'2EtJoO2aeY',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);

        User::create([
            'id'=>10,
            'name'=>'Dr. Hermann Schiller',
            'email'=>'jerod07@example.com',
            'email_verified_at'=>'2024-05-31 06:25:52',
            'password'=>'$2y$12$26qHUAGLaqvdYr5ytIukfuxBrwbchlKW2GkwSIxer4Rq2t4cKGgMu',
            'remember_token'=>'ezPV78QkFv',
            'created_at'=>'2024-05-31 06:25:52',
            'updated_at'=>'2024-05-31 06:25:52'
        ]);
    }
}
