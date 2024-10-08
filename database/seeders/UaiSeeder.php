<?php

namespace Database\Seeders;

use App\Models\Uai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departaments = 
        [
            [
                'name' => 'Despacho', 
                'level' => 1, // * 1 
            ],
            [
                'name' => 'Control Posterior', 
                'level' => 2, // * 2 
            ],
            [
                'name' => 'Determinacion de Responsabilidades', 
                'level' => 2, // * 3 
            ],
            [
                'name' => 'Auditoria de Sitemas', 
                'level' => 3, // * 4 
            ],
            [
                'name' => 'Auditoria de Gestion', 
                'level' => 3, // * 5 
            ],
            [
                'name' => 'Auditoria de Seguimiento', 
                'level' => 3, // * 6 
            ],
            [
                'name' => 'Auditoria Financiera', 
                'level' => 3, // * 7 
            ],
            [
                'name' => 'Potestad Investigativa', 
                'level' => 3, // * 8 
            ],
            [
                'name' => 'Planificacion y Control', 
                'level' => 3, // * 9 
            ]
        ];

        foreach($departaments as $departament)
        {
            $uai = new Uai();
            $uai->name = $departament['name'];
            $uai->level = $departament['level'];
            $uai->save();
        }
    }
}
