<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();

        $movies = [
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/30/6b/306b96c9c52b891cffda94af67c617ee/306b96c9c52b891cffda94af67c617ee.jpg',
                'movieTitle' => "Black Widow",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Drama, Thriller, Action, Adventure',
                'movieDuration' => '134',
                'movieRelDate' => '2021-07-07',
                'movieDirector' => 'Cate Shortland',
                'movieActors' => "Scarlett Johansson, Florence Pugh, Rachel Weisz",
                'movieDes' => "A film about Natasha Romanoff in her quests between the films Civil War and Infinity War.",
                'movieTrailer' => "https://www.youtube.com/embed/Fp9pNPdNwjI",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/69/da/69daeeaabc72389010331464e8cda51e/69daeeaabc72389010331464e8cda51e.jpg',
                'movieTitle' => 'The Conjuring: The Devil Made Me Do It',
                'movieCurrent' => 'upcoming',
                'movieGenre' => 'Thriller, Mystery, Horror',
                'movieDuration' => '112',
                'movieRelDate' => '2021-05-26',
                'movieDirector' => 'Michael Chaves',
                'movieActors' => "Patrick Wilson, Vera Farmiga, 1Ruairi O'Connor",
                'movieDes' => "The Warrens investigate a murder that may be linked to a demonic possession.",
                'movieTrailer' => "https://www.youtube.com/embed/h9Q4zZS2v1k",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/29/0e/290e230d1fb3a7f54fa3793694fc1de6/290e230d1fb3a7f54fa3793694fc1de6.jpg',
                'movieTitle' => 'Mortal Kombat',
                'movieCurrent' => 'showing',
                'movieGenre' => 'Thriller, Sci-Fi, Adventure, Action, Fantasy',
                'movieDuration' => '110',
                'movieRelDate' => '2021-04-01',
                'movieDirector' => 'Simon McQuoid',
                'movieActors' => "Tadanobu Asano, Hiroyuki Sanada, Josh Lawson, Nathan Jones, Mehcad Brooks",
                'movieDes' => "MMA fighter Cole Young seeks out Earth's greatest champions in order to stand against the enemies of Outworld in a high stakes battle for the universe.",
                'movieTrailer' => "https://youtube.com/embed/QJHY4ggYCk4",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/13/8f/138f5c660b1fe4699b81284e636a9bbb/138f5c660b1fe4699b81284e636a9bbb.jpg',
                'movieTitle' => 'Cruella',
                'movieCurrent' => 'upcoming',
                'movieGenre' => 'Comedy, Crime',
                'movieDuration' => '134',
                'movieRelDate' => '2021-05-18',
                'movieDirector' => 'Craig Gillespie',
                'movieActors' => "Emma Stone, Mark Strong, Emma Thompson, Joel Fry",
                'movieDes' => "A live-action prequel feature film following a young Cruella de Vil.",
                'movieTrailer' => "https://www.youtube.com/embed/gmRKv7n2If8",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/d0/ec/d0ec7ef079bd599580f21ed88b81eff3/d0ec7ef079bd599580f21ed88b81eff3.jpg',
                'movieTitle' => 'F9 (Fast & Furious 9)',
                'movieCurrent' => 'upcoming',
                'movieGenre' => 'Thriller, Adventure, Action, Crime',
                'movieDuration' => '145',
                'movieRelDate' => '2021-05-19',
                'movieDirector' => 'Justin Lin',
                'movieActors' => "Kurt Russell, Charlize Theron, Shad Moss, Helen Mirren, Vin Diesel",
                'movieDes' => "Cipher enlists the help of Jakob, Dom's younger brother to take revenge on Dom and his team.",
                'movieTrailer' => "https://www.youtube.com/embed/fEE4RO-_jug",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/e0/8b/e08b2ec5e7744801c6d30ec52649d9b1/e08b2ec5e7744801c6d30ec52649d9b1.jpg',
                'movieTitle' => 'Edge of the World',
                'movieCurrent' => 'upcoming',
                'movieGenre' => 'Drama, Adventure',
                'movieDuration' => '104',
                'movieRelDate' => '2021-06-04',
                'movieDirector' => 'Michael Haussman',
                'movieActors' => "Jonathan Rhys Meyers, Dominic Monaghan, Hannah New, Josie Ho",
                'movieDes' => "The adventures of Sir James Brooke, who defied the British Empire to rule a jungle kingdom in 1840s Borneo, embarked on a lifelong crusade to end piracy, slavery and head-hunting, and inspired LORD JIM and THE MAN WHO WOULD BE KING.",
                'movieTrailer' => "https://www.youtube.com/embed/ycgW26bzjq0",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/2b/f1/2bf17ca971ca38f02ae132706249ced7/2bf17ca971ca38f02ae132706249ced7.jpg',
                'movieTitle' => 'Flashback',
                'movieCurrent' => 'showing',
                'movieGenre' => 'Drama, Thriller',
                'movieDuration' => '97',
                'movieRelDate' => '2020-10-08',
                'movieDirector' => 'Christopher MacBride',
                'movieActors' => "Keir Gilchrist, Emory Cohen, Dylan Obrien, Maika Monroe, Landon Norris",
                'movieDes' => "After a chance encounter with a man forgotten from his youth, Fred literally and metaphorically journeys into his past.",
                'movieTrailer' => "https://www.youtube.com/embed/JMvJtpz4Bbk",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/3a/3f/3a3f01aa34f423c47ae504c9865a08f0/3a3f01aa34f423c47ae504c9865a08f0.jpg',
                'movieTitle' => "Tom Clancy's Without Remorse",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Thriller, Adventure, Action, War',
                'movieDuration' => '109',
                'movieRelDate' => '2021-04-30',
                'movieDirector' => 'Stefano Sollima',
                'movieActors' => "Jamie Bell, Cam Gigandet, Guy Pearce, Todd Lasance, Michael B Jordan",
                'movieDes' => "An elite Navy SEAL, goes on a path to avenge his wife's murder only to find himself inside of a larger conspiracy.",
                'movieTrailer' => "https://www.youtube.com/embed/e-rw2cxFVLg",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/09/18/09181cd4682cb40a50bc539d4ef25379/09181cd4682cb40a50bc539d4ef25379.jpg',
                'movieTitle' => "Loki",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Sci-Fi, Adventure, Action, Fantasy',
                'movieDuration' => '45',
                'movieRelDate' => '2021-06-09',
                'movieDirector' => 'Marvel Studios',
                'movieActors' => "Owen Wilson, Richard E Grant, Gugu Mbatha Raw, Tom Hiddleston",
                'movieDes' => "The mercurial villain Loki resumes his role as the God of Mischief in a new series that takes place after the events of “Avengers: Endgame.”",
                'movieTrailer' => "https://www.youtube.com/embed/nW948Va-l10",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/19/a0/19a0151c6d89f82c3ec5adb1d8d5100e/19a0151c6d89f82c3ec5adb1d8d5100e.jpg',
                'movieTitle' => "Occupation: Rainfall",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Action',
                'movieDuration' => '128',
                'movieRelDate' => '2021-10-30',
                'movieDirector' => 'Luke Sparke',
                'movieActors' => "Jason Isaacs, Mark Coles Smith, Ken Jeong, Temuera Morrison, Daniel Gillies",
                'movieDes' => "Two years after aliens land on Earth, survivors from Sydney, Australia, fight in a desperate war as the number of casualties continue to grow.",
                'movieTrailer' => "https://www.youtube.com/embed/Os0gnI19So8",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/95/8b/958bed872e34bce798c05f7d4a566eeb/958bed872e34bce798c05f7d4a566eeb.jpg',
                'movieTitle' => "The Woman in the Window",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Drama, Thriller, Crime, Mystery',
                'movieDuration' => '100',
                'movieRelDate' => '2021-05-14',
                'movieDirector' => 'Joe Wright',
                'movieActors' => "Gary Oldman, Julianne Moore, Anthony Mackie, Jennifer Jason Leigh, Amy Adams",
                'movieDes' => "An agoraphobic woman living alone in New York begins spying on her new neighbors, only to witness a disturbing act of violence.",
                'movieTrailer' => "https://www.youtube.com/embed/J0hTmzISOlQ",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/24/0a/240ad283500bc0201e72c3d725fae9e6/240ad283500bc0201e72c3d725fae9e6.jpg',
                'movieTitle' => "Lupin",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Drama, Action, Crime, Mystery',
                'movieDuration' => '231',
                'movieRelDate' => '2021-06-11',
                'movieDirector' => 'Marcela Said, Ludovic Bernard, Louis Leterrier, Hugo Gélin',
                'movieActors' => "Ludivine Sagnier, Omar Sy, Nicole Garcia, Clotilde Hesme, Antoine Gouy",
                'movieDes' => "Inspired by the adventures of Arsène Lupin, gentleman thief Assane Diop sets out to avenge his father for an injustice inflicted by a wealthy family.",
                'movieTrailer' => "https://www.youtube.com/embed/ga0iTWXCGa0",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/d5/c9/d5c931df6080a426ed559d24896d5349/d5c931df6080a426ed559d24896d5349.jpg',
                'movieTitle' => "Avengers: Endgame",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Sci-Fi, Adventure, Action, Fantasy',
                'movieDuration' => '181',
                'movieRelDate' => '2019-04-22',
                'movieDirector' => 'Anthony Russo, Joe Russo',
                'movieActors' => "Don Cheadle, Anthony Mackie, Rene Russo, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Elizabeth Olsen, Tilda Swinton, Brie Larson",
                'movieDes' => "After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.",
                'movieTrailer' => "https://www.youtube.com/embed/TcMBFSGVi1c",
            ],
            [
                'movieImg' => 'https://img.tinyzonetv.to/xxrz/250x400/202/9e/c8/9ec8a5a735a12e081797af3b5a44d71c/9ec8a5a735a12e081797af3b5a44d71c.jpg',
                'movieTitle' => "Lucifer",
                'movieCurrent' => 'showing',
                'movieGenre' => 'Drama, Crime, Fantasy',
                'movieDuration' => '42',
                'movieRelDate' => '2020-02-21',
                'movieDirector' => 'Tom Kapinos',
                'movieActors' => "Tom Kapinos",
                'movieDes' => "Lucifer Morningstar has decided he's had enough of being the dutiful servant in Hell and decides to spend some time on Earth to better understand humanity. He settles in Los Angeles - the City of Angels.",
                'movieTrailer' => "https://www.youtube.com/embed/X4bF_quwNtw",
            ],
        ];

        Movie::insert($movies);
    }
}
