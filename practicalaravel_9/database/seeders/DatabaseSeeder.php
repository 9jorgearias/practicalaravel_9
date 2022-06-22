<?php

namespace Database\Seeders;

use App\Models\Empleado\Cargo;
use Illuminate\Database\Seeder;
use App\Models\Empleado\Empleado;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // se eliminan las llaves FK
        Cargo::truncate();; // se borra la tabla
        Empleado::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // se activan las Fk
        $this->call(Cargos_Seeder::class); // Se crea la tabla y se llena
        $this->call(Empleados_Seeder::class);
    }
}
