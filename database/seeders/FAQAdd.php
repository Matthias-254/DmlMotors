<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQAdd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FAQ::create([
            'question' => 'Does DML Motors do the maintenance on any make of car?',
            'answer' => 'Yes, we do maintenance on all makes of cars. Except electric cars.',
        ]);
        FAQ::create([
            'question' => 'What are the opening hours of DML Motors?',
            'answer' => 'We are open from Monday to Friday from 8:00 to 17:00.',
            'category' => 'hours',
        ]);
        FAQ::create([
            'question' => 'Do I have to go to the technical inspection myself after a service or does DML motors do that?',
            'answer' => 'You can choose this for yourself. You can go yourself if you want or we can go for you. If we go for you we charge a small "fee" of €20 for this.',
        ]);
    }
}