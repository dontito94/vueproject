<?php

use Illuminate\Database\Seeder;

class ToolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Tool= new \App\Tool([
         'imagePath' =>'https://www.google.com/search?q=kaspersky&client=ubuntu&hs=hm9&channel=fs&source=lnms&tbm=isch&sa=X&ved=0ahUKEwikwqSzgNzWAhXJYJoKHZhGDMwQ_AUICygC&biw=1309&bih=671#imgrc=GwDpWWrW05ZKGM:',
         'title'=>'Kaspersky',
         'description'=>'',
         'price' =>1000
        	]);
        $Tool->save();
    }
}
