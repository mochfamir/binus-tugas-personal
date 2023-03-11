<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Trainer([
            'first_name' => 'Asep',
            'last_name' => 'Bambang',
            'experience' => '2',
            'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDEwfHxwZW9wbGV8ZW58MHx8fHwxNjQzNzA1NTEx&ixlib=rb-1.2.1&w=300'
        ]);

        $b = new Trainer([
            'first_name' => 'Alicia',
            'last_name' => 'Kunci',
            'experience' => '5',
            'image_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHBlb3BsZXxlbnwwfHx8fDE2NDM3MDU1MTE&ixlib=rb-1.2.1&h=300'
        ]);

        $c = new Trainer([
            'first_name' => 'Lisa',
            'last_name' => 'Kutu',
            'experience' => '1',
            'image_url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDZ8fHBlb3BsZXxlbnwwfHx8fDE2NDM3MDU1MTE&ixlib=rb-1.2.1&h=300'
        ]);

        $d = new Trainer([
            'first_name' => 'Joko',
            'last_name' => 'Akbar',
            'experience' => '10',
            'image_url' => 'https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDI5fHxwZW9wbGV8ZW58MHx8fHwxNjQzNzA1NTEx&ixlib=rb-1.2.1&h=300'
        ]);

        $trainers = array($a, $b, $c, $d);

        foreach($trainers as $trainer) {
            $trainer->save();
        }
    }
}