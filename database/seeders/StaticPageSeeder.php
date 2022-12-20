<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\StaticPage::factory()->create([
             'urlname' => 'index',
             'view' => 'simple',
             'title' => 'Основная страница',
             'content' => file_get_contents(__DIR__.'/LR2/LR1index.html'),
         ]);

         \App\Models\StaticPage::factory()->create([
            'urlname' => 'MainPage',
            'view' => 'simple',
            'title' => 'вкладка главная',
            'content' => file_get_contents(__DIR__.'/LR2/LR1Main.html'),
        ]);

        \App\Models\StaticPage::factory()->create([
            'urlname' => 'santech',
            'view' => 'simple',
            'title' => 'Сантехническое оборудование',
            'content' => file_get_contents(__DIR__.'/LR2/LR1santxt.html'),
        ]);

        \App\Models\StaticPage::factory()->create([
            'urlname' => 'radiator',
            'view' => 'simple',
            'title' => 'Радиаторное оборудование',
            'content' => file_get_contents(__DIR__.'/LR2/LR1radtxt.html'),
        ]);

        \App\Models\StaticPage::factory()->create([
            'urlname' => 'kotel',
            'view' => 'simple',
            'title' => 'котельное оборудование',
            'content' => file_get_contents(__DIR__.'/LR2/LR1koteltxt.html'),
        ]);

        \App\Models\StaticPage::factory()->create([
            'urlname' => 'nasos',
            'view' => 'simple',
            'title' => 'Насосное оборудование',
            'content' => file_get_contents(__DIR__.'/LR2/LR1nastxt.html'),
        ]);

        \App\Models\StaticPage::factory()->create([
            'urlname' => 'map',
            'view' => 'simple',
            'title' => 'Карта с расположением',
            'content' => file_get_contents(__DIR__.'/LR2/LR2map.html'),
        ]);

        \App\Models\StaticPage::factory()->create([
            'urlname' => 'reg',
            'view' => 'simple',
            'title' => 'Регситрация',
            'content' => file_get_contents(__DIR__.'/LR2/LR2reg.html'),
        ]);

    }
}
