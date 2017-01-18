<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PostsTableSeeder extends Seeder
{
    /**
      * Run the database seeds.
      */
     public function run()
     {
         DB::table('posts')->insert(
             [
                 [
                   'title' => 'Predator',
                   'blurb' => 'It came for the thrill of the hunt. It picked the wrong man to hunt.',
                   'description' => 'A team of commandos on a mission in a Central American jungle find themselves hunted by an extraterrestrial warrior.',
                   'rating' => '18',
                   'image' => '',

                 ],
                 [
                   'title' => 'Predestination',
                   'blurb' => 'To save the future he must reshape the past.',
                   'description' => 'PREDESTINATION chronicles the life of a Temporal Agent (Ethan Hawke) sent on an intricate series of time-travel journeys designed to prevent future killers from committing their crimes.',
                   'rating' => '15',
                   'image' => '',
                 ],
                 [
                   'title' => 'Alien',
                   'blurb' => 'In space no one can hear you scream...',
                   'description' => 'After a space merchant vessel perceives an unknown transmission as distress call, their landing on the source moon finds one of the crew attacked',
                   'rating' => '18',
                   'image' => '',
                 ],
                 [
                   'title' => 'Blade Runner',
                   'blurb' => 'Man Has Made His Match... Now It\'s His Problem',
                   'description' => 'A blade runner must pursue and try to terminate four replicants who stole a ship in space and have returned to Earth to find their creator',
                   'rating' => '12',
                   'image' => '',
                 ],
                 [
                   'title' => 'Equilibrium',
                   'blurb' => 'Two men. One battle. No compromise.',
                   'description' => 'In a fascist future where all forms of feeling are illegal, a man in charge of enforcing the law rises to overthrow the system.',
                   'rating' => '15',
                   'image' => '',
                 ],
                 [
                   'title' => 'Gattaca',
                   'blurb' => ' Only the strong succeed',
                   'description' => 'A genetically inferior man assumes the identity of a superior one in order to pursue his lifelong dream of space travel.',
                   'rating' => '15',
                   'image' => '',
                 ],
                 [
                   'title' => 'Total Recall',
                   'blurb' => 'They stole his mind, now he wants it back.',
                   'description' => 'When a man goes for virtual vacation memories of the planet Mars, an unexpected and harrowing series of events forces him to go to the planet for real - or does he?',
                   'rating' => '18',
                   'image' => '',
                 ],
                 [
                   'title' => 'Star Wars - The Force Awakens',
                   'blurb' => 'Coming to your galaxy this winter',
                   'description' => 'Three decades after the defeat of the Galactic Empire, a new threat arises. The First Order attempts to rule the galaxy and only a ragtag group of heroes can stop them.',
                   'rating' => '12',
                   'image' => '',
                 ],
                 [
                   'title' => 'The Running Man',
                   'blurb' => 'A game nobody survives. But Schwarzenegger has yet to play',
                   'description' => 'A wrongly convicted man must try to survive a public execution gauntlet staged as a game show.',
                   'rating' => '18',
                   'image' => '',
                 ],
                 [
                   'title' => 'Akira',
                   'blurb' => 'Neo-Tokyo is about to E.X.P.L.O.D.E',
                   'description' => 'A secret military project endangers Neo-Tokyo when it turns a biker gang member into a rampaging psychic psychopath that only two teenagers and a group of psychics can stop.',
                   'rating' => '12',
                   'image' => '',
                 ],
                 [
                   'title' => '2001: A Space Odyssey',
                   'blurb' => ' Let the Awe and Mystery of a Journey Unlike Any Other Begin',
                   'description' => 'Humanity finds a mysterious, obviously artificial object buried beneath the Lunar surface and, with the intelligent computer H.A.L. 9000, sets off on a quest.',
                   'rating' => '12',
                   'image' => '',
                 ],
                 [
                   'title' => 'Family Guy - Blue Harvest',
                   'blurb' => 'Family guy makes a Star Wars thing',
                   'description' => 'With the Griffins stuck at home during a blackout, Peter begins to tell a story, which leads to a Star Wars flashback.',
                   'rating' => '12',
                   'image' => '',
                 ],
             ]

         );
     }
}
