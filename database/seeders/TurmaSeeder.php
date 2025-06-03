<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('turmas')->insert([
            ['id' => 1, 'nome' => 'Turma 1', 'curso_id' => 1, 'ano' => 2024],
            ['id' => 2, 'nome' => 'Turma 2', 'curso_id' => 2, 'ano' => 2024],
            ['id' => 3, 'nome' => 'Turma 3', 'curso_id' => 3, 'ano' => 2024],
            ['id' => 4, 'nome' => 'Turma 4', 'curso_id' => 4, 'ano' => 2024],
            ['id' => 5, 'nome' => 'Turma 5', 'curso_id' => 5, 'ano' => 2024],
            ['id' => 6, 'nome' => 'Turma 6', 'curso_id' => 6, 'ano' => 2024],
            ['id' => 7, 'nome' => 'Turma 7', 'curso_id' => 7, 'ano' => 2024],
            ['id' => 8, 'nome' => 'Turma 8', 'curso_id' => 8, 'ano' => 2024],
            ['id' => 9, 'nome' => 'Turma 9', 'curso_id' => 9, 'ano' => 2024],
            ['id' => 10, 'nome' => 'Turma 10', 'curso_id' => 10, 'ano' => 2024],
            ['id' => 11, 'nome' => 'Turma 11', 'curso_id' => 11, 'ano' => 2024],
            ['id' => 12, 'nome' => 'Turma 12', 'curso_id' => 12, 'ano' => 2024],
        ]);
    }
}