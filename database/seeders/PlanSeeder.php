<?php

namespace Database\Seeders;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'title'=>'BÁSICO',
            'description'=>'basic*Para campo particular*Solo 1 cancha*Panel de control*2 colaboradores*24/7 Soporte',
            'price'=>100,
            'limit'=>1,
            'discount'=>15,
            'discount_time'=>'2023-10-25 20:00:00',
            'discount_reason'=>'Inicio de Temporarda',
        ]);
        Plan::create([
            'title'=>'Estándar',
            'description'=>'standard*Para campos particulares*De 1 a 3 campos deportivos*Panel de control*5 colaboradores*24/7 Soporte',
            'limit'=>3,
            'price'=>300,
            'discount'=>15,
            'discount_time'=>'2023-10-25 20:00:00',
            'discount_reason'=>'Inicio de Temporarda',
        ]);
        Plan::create([
            'title'=>'Premium',
            'description'=>'premium*Para clubes*Más de 7 campos deportivos*Panel de control*Colaboradores Ilimitados *24/7 Soporte',
            'limit'=>7,
            'price'=>500,
            'discount'=>15,
            'discount_time'=>'2023-10-25 20:00:00',
            'discount_reason'=>'Inicio de Temporarda',
        ]);
    }
}
