<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Member;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
         Member::truncate();
       
        $this->call('MemberTableSeeder');

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

?>
