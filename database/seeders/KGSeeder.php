<?php

namespace Database\Seeders;

use App\Models\KG;
use App\Models\Primary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KG::create([
            'sec1_head' => 'Want to know more
            about Kindergarten !',
            'sec1_p' => 'Students in the Secondary section are being prepared for the International Baccalaureate Diploma Programme. At different points in the upper grades; students will start their journey into the IB with activities in ATL Skills, internal assessments, CAS and TOK.

            The IB Programme is known and recognized worldwide as the finest pre-university education available. As a result, students who graduate with IB credentials have the choice to enter Jordanian universities or most universities aboard.',
            'sec1_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec2_head' => 'Want to know more about ?',
            'sec2_p' => 'Cambridge High School started implementing the IB middle years programme (MYP) in September 2016. It has been announced an authorized MYP world school by the International Baccalaureate Organization in December. 13th. 2018.',
            'sec2_img' => 'assets/images/Website pix/MYP/5Q7C8615.jpg',
            'sec3_head' => 'Want to know more about !',
            'sec3_p' => 'Cambridge High School started',
            'sec3_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec4_head' => 'Want to know more about !',
            'sec4_p' => 'We try to provide a developmentally appropriate curriculum that enhances the social, emotional, intellectual, aesthetic and physical development of each child while nurturing autonomy, self-esteem and success.

            In the Kindergarten and international sections of the upper grades, the English language is focused on throughout the day. At the same time, Arabic is reinforced with daily lessons.

            On entering grade one, students are fluent orally in both English and Arabic. Class size is kept to a maximum of 25 with one main teacher and in Kindergarten with an',
            'sec4_img' => 'assets/images/Website pix/IBDP/5Q7C3512.jpg',
        ]);
        Primary::create([
            'sec1_head' => 'Want to know more
            about Kindergarten !',
            'sec1_p' => 'Students in the Secondary section are being prepared for the International Baccalaureate Diploma Programme. At different points in the upper grades; students will start their journey into the IB with activities in ATL Skills, internal assessments, CAS and TOK.

            The IB Programme is known and recognized worldwide as the finest pre-university education available. As a result, students who graduate with IB credentials have the choice to enter Jordanian universities or most universities aboard.',
            'sec1_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec2_head' => 'Want to know more about ?',
            'sec2_p' => 'Cambridge High School started implementing the IB middle years programme (MYP) in September 2016. It has been announced an authorized MYP world school by the International Baccalaureate Organization in December. 13th. 2018.',
            'sec2_img' => 'assets/images/Website pix/MYP/5Q7C8615.jpg',
            'sec3_head' => 'Want to know more about !',
            'sec3_p' => 'Cambridge High School started',
            'sec3_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec4_head' => 'Want to know more about !',
            'sec4_p' => 'We try to provide a developmentally appropriate curriculum that enhances the social, emotional, intellectual, aesthetic and physical development of each child while nurturing autonomy, self-esteem and success.

            In the Kindergarten and international sections of the upper grades, the English language is focused on throughout the day. At the same time, Arabic is reinforced with daily lessons.
            
            On entering grade one, students are fluent orally in both English and Arabic. Class size is kept to a maximum of 25 with one main teacher and in Kindergarten with an',
            'sec4_img' => 'assets/images/Website pix/IBDP/5Q7C3512.jpg',
        ]);
    }
}
