<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        \App\User::create([
            'name' => 'Administador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);


        \App\Prioridad::create([
            'name' => 'Baja'
        ]);
        \App\Prioridad::create([
            'name' => 'Media'
        ]);
        \App\Prioridad::create([
            'name' => 'Alta'
        ]);
        \App\Prioridad::create([
            'name' => 'Urgente'
        ]);

        \App\TipoIncidencia::create([
            'name' => 'Plataforma'
        ]);
        \App\TipoIncidencia::create([
            'name' => 'Wi-Fi'
        ]);
        \App\TipoIncidencia::create([
            'name' => 'Teléfono'
        ]);
        \App\TipoIncidencia::create([
            'name' => 'Impresora'
        ]);
        \App\TipoIncidencia::create([
            'name' => 'Equipo de Computo'
        ]);
        \App\TipoIncidencia::create([
            'name' => 'Otro'
        ]);

        \App\Estado::create([
            'name' => 'Nueva',
            'color' => 'badge-primary'
        ]);
        \App\Estado::create([
            'name' => 'En espera',
            'color' => 'badge-warning'
        ]);
        \App\Estado::create([
            'name' => 'Resuelta',
            'color' => 'badge-success'
        ]);
        \App\Estado::create([
            'name' => 'Cerrada',
            'color' => 'badge-secondary'
        ]);
    }
}
