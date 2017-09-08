<?php

use Illuminate\Database\Seeder;

class SpaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spas')->insert([
            'name' => 'Spa Prueba 1',
            'contact' => 'Spa Contacto 1',
            'address' => 'Av Yucatan 20, Roma Norte, CDMX, México',
            'email' => 'contacto1@spa.com',
            'phone' => '55555555',
            'web_page' => 'www.spaweb.com',
            'latitude' => '19.4109417',
            'length' => '-99.1651793',
            'user_id' => '1',
        ]);
        DB::table('spas')->insert([
            'name' => 'Spa Prueba 2',
            'contact' => 'Spa Contacto 2',
            'address' => 'calzada de Guadalupe 1180, Vallejo, CDMX, México',
            'email' => 'contacto2@spa.com',
            'phone' => '55555555',
            'web_page' => 'www.spaweb.com',
            'latitude' => '19.4602643',
            'length' => '-99.1283296',
            'user_id' => '1',
        ]);
        DB::table('spas')->insert([
            'name' => 'Spa Prueba 3',
            'contact' => 'Spa Contacto 3',
            'address' => 'Calzada de la Virgen 154, Culhuacan, CDMX, México',
            'email' => 'contacto3@spa.com',
            'phone' => '55555555',
            'web_page' => 'www.spaweb.com',
            'latitude' => '19.32153',
            'length' => '-99.1229711',
            'user_id' => '1',
        ]);
        DB::table('spas')->insert([
            'name' => 'Spa Prueba 4',
            'contact' => 'Spa Contacto 4',
            'address' => 'Calle 4 154, Culhuacan, Zacatecas, México',
            'email' => 'contacto4@spa.com',
            'phone' => '55555555',
            'web_page' => 'www.spaweb.com',
            'latitude' => '23.9777878',
            'length' => '-102.9185856',
            'user_id' => '1',
        ]);
        DB::table('spas')->insert([
            'name' => 'Spa Prueba 5',
            'contact' => 'Spa Contacto 5',
            'address' => 'Calle la Virgen 154, Cancún, Quintana Roo, México',
            'email' => 'contacto5@spa.com',
            'phone' => '55555555',
            'web_page' => 'www.spaweb.com',
            'latitude' => '21.185184',
            'length' => '-86.8963499',
            'user_id' => '1',
        ]);
        DB::table('spas')->insert([
            'name' => 'Spa Prueba 6',
            'contact' => 'Spa Contacto 6',
            'address' => 'Avenida de la Virgen 154, Los cabos, Baja California Sur, México',
            'email' => 'contacto6@spa.com',
            'phone' => '55555555',
            'web_page' => 'www.spaweb.com',
            'latitude' => '22.8774725',
            'length' => '-109.9060104',
            'user_id' => '1',
        ]);
    }
}
