<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['state' => 'Aguascalientes'],
            ['state' => 'Baja California'],
            ['state' => 'Baja California Sur'],
            ['state' => 'Campeche'],
            ['state' => 'Coahuila de Zaragoza'],
            ['state' => 'Colima'],
            ['state' => 'Chiapas'],
            ['state' => 'Chihuahua'],
            ['state' => 'Distrito Federal'],
            ['state' => 'Durango'],
            ['state' => 'Guanajuato'],
            ['state' => 'Guerrero'],
            ['state' => 'Hidalgo'],
            ['state' => 'Jalisco'],
            ['state' => 'México'],
            ['state' => 'Michoacán de Ocampo'],
            ['state' => 'Morelos'],
            ['state' => 'Nayarit'],
            ['state' => 'Nuevo León'],
            ['state' => 'Oaxaca de Juárez'],
            ['state' => 'Puebla'],
            ['state' => 'Querétaro'],
            ['state' => 'Quintana Roo'],
            ['state' => 'San Luis Potosí'],
            ['state' => 'Sinaloa'],
            ['state' => 'Sonora'],
            ['state' => 'Tabasco'],
            ['state' => 'Tamaulipas'],
            ['state' => 'Tlaxcala'],
            ['state' => 'Veracruz de Ignacio de la Llave'],
            ['state' => 'Yucatán'],
            ['state' => 'Zacatecas'],
        ];

        foreach($states as $state){
            DB::table('states')->insert([
                'state' => $state['state'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        
    }
}
