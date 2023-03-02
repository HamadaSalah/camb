<?php

namespace Database\Seeders;

use App\Models\HomeSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSlider::create([
            'img' => 'assets/images/Website pix/Home,About us/315012388_1267336400536114_875531598212375266_n.jpg',
            'head' => ['Cambridge High School is fully devoted to its
            students’ academic and future success. Through the
            implementation of the International Baccalaureate
            Programmes, a balanced learning environment is
            created to develop well-rounded, life-long learners.', 
            'Cambridge High School is fully devoted to its
            students’ academic and future success. Through the
            implementation of the International Baccalaureate
            Programmes, a balanced learning environment is
            created to develop well-rounded, life-long learners.']
        ]);
    }
}
