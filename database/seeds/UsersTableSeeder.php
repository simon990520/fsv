<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'rol' => 'Root'
        ]);
        DB::table('rols')->insert([
            'rol' => 'Profesional'
        ]);

        DB::table('rols')->insert([
            'rol' => 'Administrador'
        ]);

        DB::table('municipios')->insert([
            'municipio' => 'La jagua'
        ]);
        DB::table('municipios')->insert([
            'municipio' => 'Aguachica'
        ]);
        DB::table('municipios')->insert([
            'municipio' => 'San diego'
        ]);
        DB::table('municipios')->insert([
            'municipio' => 'Bosconia'
        ]);
        DB::table('municipios')->insert([
            'municipio' => 'Curumani'
        ]);
        DB::table('municipios')->insert([
            'municipio' => 'Rioacha'
        ]);

        DB::table('documentos')->insert([
            'documento' => 'CC'
        ]);
        DB::table('documentos')->insert([
            'documento' => 'TI'
        ]);
        DB::table('documentos')->insert([
            'documento' => 'CE'
        ]);
        DB::table('documentos')->insert([
            'documento' => 'PS'
        ]);

        DB::table('users')->insert([
            'name' => 'Root',
            'username' => 'root',
            'img' => 'root.png',
            'email' => 'root@gmail.com',
            'password' => md5('root'),
            'document' => '123456789',
            'phone' => '3022222222',
            'municipio_id' => '1',
            'rol_id' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Administrador',
            'username' => 'administrador',
            'img' => 'administrador.png',
            'email' => 'administrador@gmail.com',
            'password' =>  md5('administrador'),
            'document' => '0123456789',
            'phone' => '3022222222',
            'municipio_id' => '1',
            'rol_id' => '2',
        ]);

        DB::table('eps')->insert([
            'eps' => 'SALUD VIDA SA EPS',
            'pqr' => '484'
        ]);
        DB::table('eps')->insert([
            'eps' => 'CAJACOPI ATLANTICO CCF EPS',
            'pqr' => '424'
        ]);
        DB::table('eps')->insert([
            'eps' => 'COOPERATIVA DE SALUD COMUNITARIA - COMPARTA',
            'pqr' => '416'
        ]);
        DB::table('eps')->insert([
            'eps' => 'NUEVA EPS SA',
            'pqr' => '391'
        ]);
        DB::table('eps')->insert([
            'eps' => 'BARRIOS UNIDOS DE QUIBDO ESS AMBUQ',
            'pqr' => '330'
        ]);
        DB::table('eps')->insert([
            'eps' => 'ASMET SALUD EPS',
            'pqr' => '226'
        ]);
        DB::table('eps')->insert([
            'eps' => 'COMFACOR EPS CCF',
            'pqr' => '195'
        ]);
        DB::table('eps')->insert([
            'eps' => 'COOSALUD ESS EPS',
            'pqr' => '180'
        ]);
        DB::table('eps')->insert([
            'eps' => 'COOMEVA EPS SA',
            'pqr' => '150'
        ]);
        DB::table('eps')->insert([
            'eps' => 'DUSAKAWI EPSI',
            'pqr' => '75'
        ]);
        DB::table('eps')->insert([
            'eps' => 'EMDISALUD ESS EPS',
            'pqr' => '72'
        ]);
        DB::table('eps')->insert([
            'eps' => 'SALUD TOTAL SA EPS',
            'pqr' => '65'
        ]);
        DB::table('eps')->insert([
            'eps' => 'CAFESALUD EPS',
            'pqr' => '61'
        ]);
        DB::table('eps')->insert([
            'eps' => 'SANITAS EPS',
            'pqr' => '12'
        ]);
    }
}
