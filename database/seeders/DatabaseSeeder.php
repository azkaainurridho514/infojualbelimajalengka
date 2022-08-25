<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Categories_childs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'azka ainuridho',
        'email' => 'azkaainurridho514@gmail.com',
        'password' => bcrypt('azkaazka'),
        'remember_token' => 0
      ]);

      Categories::create([
       'name' => 'Rumah',
       'slug' => 'rumah'
     ]);
      Categories::create([ 
        'name' => 'Mobil',
        'slug' => 'mobil'
      ]);
      Categories::create([ 
        'name' => 'Lahan',
        'slug' => 'lahan'
      ]);

      Categories_childs::create([
        'category_id' => 1,
        'name' => 'Majalengka'
      ]);

      Categories_childs::create([
        'category_id' => 2,
        'name' => 'Avanza'
      ]);

      Categories_childs::create([
        'category_id' => 3,
        'name' => 'Majalengka'
      ]);
      Products::factory(20)->create();
    }
}
