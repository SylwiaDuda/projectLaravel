<?php

use Illuminate\Database\Seeder;
use App\Pages;
class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = \Faker\Factory::create();

//        for($i=0; $i<100; $i++) {
            $page = new Pages();
            $page->title = 'Ciasko kokosowe';
            $page->skladniki =' exgrw, ceryn3er, chreny3, centh';
            $page->czas = '2h';
            $page->content = 'cwc t cwh wrt  xwcryhcernr hcerhberbe tevr hce ytn evtycnte';

            $page->save();
//        }
    }
}
