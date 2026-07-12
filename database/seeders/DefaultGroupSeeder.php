<?php

namespace Database\Seeders;

use App\Models\DefaultGroup;
use Illuminate\Database\Seeder;

class DefaultGroupSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            ['key' => 'entertainment', 'name_en' => 'Entertainment', 'name_pt' => 'Entretenimento', 'name_es' => 'Entretenimiento', 'icon' => 'movie', 'color' => '#7C5CFC'],
            ['key' => 'streaming', 'name_en' => 'Streaming', 'name_pt' => 'Streaming', 'name_es' => 'Streaming', 'icon' => 'play', 'color' => '#8B7CFC'],
            ['key' => 'music', 'name_en' => 'Music', 'name_pt' => 'Música', 'name_es' => 'Música', 'icon' => 'music', 'color' => '#9C8CFD'],
            ['key' => 'games', 'name_en' => 'Games', 'name_pt' => 'Jogos', 'name_es' => 'Juegos', 'icon' => 'device-gamepad', 'color' => '#AD9DFE'],
            ['key' => 'work', 'name_en' => 'Work', 'name_pt' => 'Trabalho', 'name_es' => 'Trabajo', 'icon' => 'briefcase', 'color' => '#38BDF8'],
            ['key' => 'health', 'name_en' => 'Health', 'name_pt' => 'Saúde', 'name_es' => 'Salud', 'icon' => 'heart', 'color' => '#34D399'],
            ['key' => 'utilities', 'name_en' => 'Utilities', 'name_pt' => 'Utilidades', 'name_es' => 'Utilidades', 'icon' => 'bolt', 'color' => '#FBBF24'],
            ['key' => 'education', 'name_en' => 'Education', 'name_pt' => 'Educação', 'name_es' => 'Educación', 'icon' => 'book', 'color' => '#F472B6'],
            ['key' => 'dating', 'name_en' => 'Dating', 'name_pt' => 'Relacionamentos', 'name_es' => 'Citas', 'icon' => 'users', 'color' => '#FB7185'],
            ['key' => 'news', 'name_en' => 'News & Reading', 'name_pt' => 'Notícias e Leitura', 'name_es' => 'Noticias y Lectura', 'icon' => 'news', 'color' => '#94A3B8'],
        ];

        foreach ($groups as $sort => &$group) {
            $group['sort'] = $sort;
        }
        unset($group);

        DefaultGroup::query()->upsert($groups, ['key'], ['name_en', 'name_pt', 'name_es', 'icon', 'color', 'sort']);
    }
}
