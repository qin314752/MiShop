<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr = [];
    	for ($i=0; $i < 100; $i++) { 
    		$res['name'] = '商品'.$i;
    		$res['price'] = '1000'.$i;
    		$res['descri'] = '描述'.$i;
    		$arr[] = $res;
    	}
        DB::table('ms_goods')->insert($arr);
    }
}
