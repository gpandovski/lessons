<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = json_decode(Storage::get('events.json'));

        $events = collect($json)->flatten();

        $events->each(function($event) {
            Event::create([
                "title"=>$event->title,
                "time" => $event->time,
                "date" => $event->date
                ]);
        });
 
    }
}
