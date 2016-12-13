<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->delete();

        DB::table('config')->insert([
            'config'    =>  'roundTime',
            'value'     =>  '30',
        ]);

        DB::table('config')->insert([
            'config'    =>  'speed',
            'value'     =>  '5',
        ]);

        DB::table('config')->insert([
            'config'    =>  'radius',
            'value'     =>  '16',
        ]);

        DB::table('config')->insert([
            'config'    =>  'turnSpeed',
            'value'     =>  '72',
        ]);

        DB::table('config')->insert([
            'config'    =>  'acceleration',
            'value'     =>  '1',
        ]);

        DB::table('config')->insert([
            'config'    =>  'deceleration',
            'value'     =>  '1',
        ]);

        DB::table('config')->insert([
            'config'    =>  '',
            'value'     =>  '',
        ]);

        DB::table('config')->insert([
            'config'    =>  '',
            'value'     =>  '',
        ]);

        DB::table('config')->insert([
            'config'    =>  'backgroud',
            'value'     =>  '',
        ]);
    }
}
