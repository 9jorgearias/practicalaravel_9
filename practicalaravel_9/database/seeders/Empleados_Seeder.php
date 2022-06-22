<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado\Empleado;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

        Empleado::create([
        'nombre'=> 'Dony Cardenas',
        'email' => 'cardenasdonny@gmail.com',
        'direccion' => 'calle 123456',
        'edad' => 36,
        'idCargo' => $cargo
    ]);

    Empleado::create([
        'nombre'=> 'Jorge Arias',
        'email' => 'jorge@gmail.com',
        'direccion' => 'calle 7890',
        'edad' => 41,
        'idCargo' => 2
    ]);

    Empleado::create([
        'nombre'=> 'Emanuel Ospina',
        'email' => 'Eospina@gmail.com',
        'direccion' => 'calle 35647',
        'edad' => 19,
        'idCargo' => 3
    ]);
    }
}
