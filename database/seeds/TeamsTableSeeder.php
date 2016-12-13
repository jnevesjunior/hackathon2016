<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();

        DB::table('teams')->insert([
            'id'        =>  1,
            'key'       =>  '9f49c31f21b9b03a89783e7ee2a0be34',
            'name'      =>  'Goku',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  2,
            'key'       =>  '6aa9df2ee5f5d7759d039c7c0d6dfaa0',
            'name'      =>  'Bulma',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  3,
            'key'       =>  '2f51ab5742614e6a708ded037ee27b8a',
            'name'      =>  'Vegeta',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  4,
            'key'       =>  'ef45c085a88a7a94c53e8af3a4b9df06',
            'name'      =>  'Gohan',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  5,
            'key'       =>  '993afc24119206d7c9b61ca0cf1b51a3',
            'name'      =>  'Trunks',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  6,
            'key'       =>  '45637e7f4bacaaf9f24d52a29f7b4a0d',
            'name'      =>  'Kuririn',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  7,
            'key'       =>  '3c02c9309b172ef0d52f46a2175bc90f',
            'name'      =>  'Yamcha',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  8,
            'key'       =>  'f6358cea86f86968089090fe6f9726d2',
            'name'      =>  'M.Kame',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  9,
            'key'       =>  '2ec24ad22f20be0c63066788ece2f1da',
            'name'      =>  'Piccolo',
            'active'    =>  1,
        ]);

        DB::table('teams')->insert([
            'id'        =>  10,
            'key'       =>  'JNJ1234567890',
            'name'      =>  'Doo',
            'active'    =>  1,
        ]);
    }
}
