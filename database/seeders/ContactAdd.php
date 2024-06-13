<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactAdd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'message' => 'Hello, I have a question about the maintenance of my car. Can you help me with this?',
            'user_id' => '1',
        ]);
    }
}
