<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'lavoro',
            'viaggi',
            'sport',
            'avventura'
        ];


        foreach($types as $elem){
            $new_type = new Type();
            $new_type->name = $elem;
            $new_type->slug = Str::slug($new_type->name);
            $new_type->save();
        };
        

    }
}
