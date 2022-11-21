<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ContactBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_books')->insert([
            'name_contact' => 'Robertinho',
            'email_contact' => 'jubilei22' . '@gmail.com',
            'phone_contact' => '4420 1234 5678',
            'number' => '2152',
            'address' => 'Rua Ayrton Senna',
            'neighborhood' => 'Capim Macio',
            'city' => 'Natal',
            'state' => 'RN',
            'postcode' => '59021430',
        ]);

        DB::table('contact_books')->insert([
            'name_contact' => 'Levi',
            'email_contact' => 'levi21' . '@gmail.com',
            'phone_contact' => '1221 3421 6742',
            'number' => '3942',
            'address' => 'Rua Labrador Senna',
            'neighborhood' => 'Ponta Negra',
            'city' => 'Natal',
            'state' => 'RN',
            'postcode' => '59019210',
        ]);

        DB::table('contact_books')->insert([
            'name_contact' => 'Joao costa',
            'email_contact' => 'joaozin29' . '@gmail.com',
            'phone_contact' => '6453 4312 2124',
            'number' => '9051',
            'address' => 'Avenida Roberto Freire',
            'neighborhood' => 'Tirol',
            'city' => 'Natal',
            'state' => 'RN',
            'postcode' => '59012820',
        ]);
    }
}
