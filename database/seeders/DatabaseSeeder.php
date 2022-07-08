<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'neutral',
            'accuracy'  => '100',
            'block_penetration' => '100',
            'critical' => '100',
            'evasion'   => '100',
            'block'     => '100',
            'critical_resistance'  => '100'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'jsr',
            'accuracy'  => '2203',
            'block_penetration' => '2203',
            'critical' => '2203',
            'evasion'   => '1880',
            'block'     => '0',
            'critical_resistance'  => '4300'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'wbr',
            'accuracy'  => '1057',
            'block_penetration' => '881',
            'critical' => '881',
            'evasion'   => '470',
            'block'     => '0',
            'critical_resistance'  => '4300'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'beast',
            'accuracy'  => '100',
            'block_penetration' => '100',
            'critical' => '120',
            'evasion'   => '100',
            'block'     => '100',
            'critical_resistance'  => '80'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'devil',
            'accuracy'  => '100',
            'block_penetration' => '100',
            'critical' => '120',
            'evasion'   => '100',
            'block'     => '100',
            'critical_resistance'  => '80'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'mutant',
            'accuracy'  => '130',
            'block_penetration' => '140',
            'critical' => '100',
            'evasion'   => '100',
            'block'     => '100',
            'critical_resistance'  => '100'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'plant',
            'accuracy'  => '180',
            'block_penetration' => '90',
            'critical' => '50',
            'evasion'   => '0',
            'block'     => '100',
            'critical_resistance'  => '150'
        ]);
        \App\Models\CalculatorStats::factory()->create([
            'type'      => 'insect',
            'accuracy'  => '70',
            'block_penetration' => '120',
            'critical' => '130',
            'evasion'   => '140',
            'block'     => '0',
            'critical_resistance'  => '70'
        ]);
    }
}
