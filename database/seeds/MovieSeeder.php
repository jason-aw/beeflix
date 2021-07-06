<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'The World Of the Married',
                'genre_id' => 1,
                'photo' => 'drama1.jpg',
                'description' => 'Ji Sun-woo (Kim Hee-ae) is a revered family medicine doctor and the associate director at Family Love Hospital. She is married to Lee Tae-oh (Park Hae-joon), with whom she has a teenage son, Lee Joon-young (Jeon Jin-seo). Sun-woo seems to have everything from a successful career to a happy family, but unbeknownst to her, she is betrayed by her husband and friends.

                Meanwhile, Tae-oh dreams of becoming a famous movie director. He runs a small entertainment and film company with the support of his wife. Even though he loves and cares for his wife, Tae-oh sets himself up in a dangerous position with an extramarital affair.
                ',
                'rating' => 4.5,
            ],
            [
                'title' => 'Descendants of The Sun',
                'genre_id' => 1,
                'photo' => 'drama2.jpg',
                'description' => 'Descendants of the Sun tells the story of a special forces captain (Song Joong Ki) and a doctor (Song Hye Kyo) who fall in love while providing aid in a country dealing with a natural disaster and civil strife.',
                'rating' => 4.8,
            ],
            [
                'title' => 'It\'s Okay to Not Be Okay',
                'genre_id' => 1,
                'photo' => 'drama3.jpg',
                'description' => 'Moon Gang-tae (Kim Soo-hyun) lives with his autistic older brother Moon Sang-tae (Oh Jung-se). They frequently moves from town to town, ever since Sang-tae witnessed their mother\'s murder. Gang-Tae takes up jobs as a caretaker in a psychiatric ward at every place they settle in. While working in a hospital, he meets a famous children\'s book writer Ko Moon-young (Seo Ye-ji), who some people suggest has antisocial personality disorder.

                Circumstances lead Gang-tae to work at the OK Psychiatric Hospital in Seongjin City, the same city where they all lived when young. Meanwhile, Ko Moon-young forms a romantic obsession for Moon Gang-tae after finding out their pasts overlapped. She follows him to Seongjin, where the trio slowly begins to heal each other\'s emotional wounds. As the story progresses, more is revealed of their intertwining pasts, which have been haunting them.
                ',
                'rating' => 4.0,
            ],
            [
                'title' => 'Boys Over Flower',
                'genre_id' => 1,
                'photo' => 'drama4.jpg',
                'description' => 'Set at a famous high school for the super-wealthy, this is a puppy love story centered on a poor girl and the F4 gang of rich kids headed by the rough and fearless Jun-pyo Koo.

                Geum Jan-Di (Hye-seon Ku) is a girl from a poor family but has an unrivaled sense of optimism and drive and is by chance admitted to a prestigious private high school.
                
                There she meets the infamous group of four astonishingly good looking and rich boys who are known as F4. The group\'s leader is Koo Jun-Pyo (Min-ho Lee), who is a spoiled heir to world-leading conglomerate Shinhwa. He is joined by mysterious and breathlessly handsome Yun Ji-Hu (Hyeon-jung Kim), So Lee-Jeong (Kim Beom), and Song Woo-Bin (Kim Jun). Their love story moves from Seoul to New Caledonia to Macau.',
                'rating' => 4.2,
            ],
            [
                'title' => 'SpongeBob SquarePants',
                'genre_id' => 2,
                'photo' => 'kids1.jpg',
                'description' => 'The character-driven cartoon chronicles the nautical and often nonsensical adventures of SpongeBob, an incurably optimistic and earnest sea sponge, and his underwater friends. Dwelling a few fathoms beneath the tropical isle of Bikini Atoll in the sub-surface city of Bikini Bottom, SpongeBob lives in a two-story pineapple. Instead of taking the logical approach to everyday challenges, SpongeBob approaches life in a wayward and unconventional way. Whether searching for the ultimate spatula to perfect his burger flipping technique at the Krusty Krab or just hanging out with his best friend Patrick (an amiable starfish), SpongeBob\'s good intentions and overzealous approach to life usually create chaos in his underwater world.',
                'rating' => 4.9,
            ],
            [
                'title' => 'Thomas & Friends',
                'genre_id' => 2,
                'photo' => 'kids2.jpg',
                'description' => 'The series is set in the fictional island of Sodor, located in the Irish Sea. Sodor is depicted as located in Cumbria, near the historical town of Barrow-in-Furness Thomas the Tank Engine is an anthropomorphic steam locomotive, with a design loosely based on the LB&SCR E2 class (1913-1963). Thomas and his associates work at the North Western Railway, the main standard gauge rail network of Sodor. The series focuses on their work relationship.',
                'rating' => 3.7,
            ],
            [
                'title' => 'Phineas and Ferb',
                'genre_id' => 2,
                'photo' => 'kids3.jpg',
                'description' => 'Phineas Flynn (Vincent Martella) and Ferb Fletcher\'s (Thomas Brodie-Sangster\'s) backyard is the neighborhood hotspot for all of their cool inventions. Meanwhile, their elder sister Candace (Ashley Tisdale) is obsessed with busting her brothers for all the inventions to her mom once and for all. Simultaneously, their secret-agent pet, Perry the Platypus (Dee Bradley Baker) fouls the "evil" schemes and plans of Dr. Heinz Doofenshmirtz (Dan Povenmire).',
                'rating' => 5.0,
            ],
            [
                'title' => 'Ben 10',
                'genre_id' => 2,
                'photo' => 'kids4.jpg',
                'description' => 'The story of Ben Tennyson, a typical kid who becomes very atypical after he discovers the Omnitrix, a mysterious alien device with the power to transform the wearer into ten different alien species.',
                'rating' => 4.5,
            ],
            [
                'title' => 'How I Met Your Mother',
                'genre_id' => 3,
                'photo' => 'tv1.jpg',
                'description' => 'Ted Mosby sits down with his kids, to tell them the story of how he met their mother. The story is told through memories of his friends Marshall, Lily, Robin, and Barney Stinson. All legendary 9 seasons lead up to the moment of Ted\'s final encounter with "the one."',
                'rating' => 4.7,
            ],
            [
                'title' => 'House M.D.',
                'genre_id' => 3,
                'photo' => 'tv2.jpg',
                'description' => 'The series follows the life of anti-social, pain killer addict, witty and arrogant medical doctor Gregory House (Hugh Laurie) with only half a muscle in his right leg. He and his team of medical doctors try to cure complex and rare diseases from very ill ordinary people in the United States of America.',
                'rating' => 5.0,
            ],
            [
                'title' => 'Friends',
                'genre_id' => 3,
                'photo' => 'tv3.jpg',
                'description' => 'Ross Geller, Rachel Green, Monica Geller, Joey Tribbiani, Chandler Bing, and Phoebe Buffay are six 20 something year olds living in New York City. Over the course of 10 years, these friends go through family, love, drama, friendship, and comedy.',
                'rating' => 4.5,
            ],
            [
                'title' => 'The Big Bang Theory',
                'genre_id' => 3,
                'photo' => 'tv4.jpg',
                'description' => 'Leonard Hofstadter and Sheldon Cooper are both brilliant physicists working at Cal Tech in Pasadena, California. They are colleagues, best friends, and roommates, although in all capacities their relationship is always tested primarily by Sheldon\'s regimented, deeply eccentric, and non-conventional ways. They are also friends with their Cal Tech colleagues mechanical engineer Howard Wolowitz and astrophysicist Rajesh Koothrappali. The foursome spend their time working on their individual work projects, playing video games, watching science-fiction movies, or reading comic books. As they are self-professed nerds, all have little or no luck with women. When Penny, a pretty woman and an aspiring actress from Omaha, moves into the apartment across the hall from Leonard and Sheldon\'s, Leonard has another aspiration in life, namely to get Penny to be his girlfriend.',
                'rating' => 4.0,
            ],
        ]);
    }
}
