<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'title' => "Acara Misdinar",
            'date' => Carbon::now()->addDays(2),
            'place' => 'Ruang Midinar',
            'contact_person' => 'Margareth',
            'phone_number' => '081929302947',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce metus erat, feugiat eu hendrerit aliquet, pulvinar eu urna. Curabitur eu sagittis diam. Maecenas faucibus scelerisque.',
            'poster' => 'event.png',
            'rundown_image' => "rundown.png",
            'evaluation' => "Fusce metus erat, feugiat eu hendrerit aliquet, pulvinar eu urna. Curabitur eu sagittis diam. Maecenas faucibus scelerisque.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
