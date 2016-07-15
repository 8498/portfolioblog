<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('personal_details')->insert([
    			'firstname' => 'Test',
    			'lastname' => 'Test',
    			'email' => 'test@test.com',
    			'phone' => '600600600',
    	]);
    	DB::table('education')->insert([
    		'content' => 'Test',	
    	]);
    	DB::table('experiences')->insert([
    			'content' => 'Test',
    	]);
    	DB::table('skills')->insert([
    			'content' => 'Test',
    	]);
    	DB::table('projects')->insert([
    			'content' => 'Test',
    	]);
    	DB::table('hobbies')->insert([
    			'content' => 'Test',
    	]);
    }
}
