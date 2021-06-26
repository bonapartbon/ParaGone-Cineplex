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
            'movieImg' => 'conjuring.jpg',
            'movieTitle' => 'The Conjuring: The Devil Made Me Do It',
            'movieCurrent' => 'showing',
            'movieGenre' => 'Thriller, Mystery, Horror',
            'movieDuration' => '112',
            'movieRelDate' => '2021-05-26',
            'movieDirector' => 'Michael Chaves',
            'movieActors' => "Patrick Wilson, Vera Farmiga, 1Ruairi O'Connor"
        ],
        [
            'movieImg' => 'mortal-kombat.jpg',
            'movieTitle' => 'Mortal Kombat',
            'movieCurrent' => 'showing',
            'movieGenre' => 'Thriller, Sci-Fi, Adventure, Action, Fantasy',
            'movieDuration' => '110',
            'movieRelDate' => '2021-04-01',
            'movieDirector' => 'Simon McQuoid',
            'movieActors' => "Tadanobu Asano, Hiroyuki Sanada, Josh Lawson, Nathan Jones, Mehcad Brooks"
        ],
        [
            'movieImg' => 'cruella.jpg',
            'movieTitle' => 'Cruella',
            'movieCurrent' => 'showing',
            'movieGenre' => 'Comedy, Crime',
            'movieDuration' => '134',
            'movieRelDate' => '2021-05-18',
            'movieDirector' => 'Craig Gillespie',
            'movieActors' => "Emma Stone, Mark Strong, Emma Thompson, Joel Fry"
        ],
        [
            'movieImg' => 'f9.jpg',
            'movieTitle' => 'F9 (Fast & Furious 9)',
            'movieCurrent' => 'showing',
            'movieGenre' => 'Thriller, Adventure, Action, Crime',
            'movieDuration' => '145',
            'movieRelDate' => '2021-05-19',
            'movieDirector' => 'Justin Lin',
            'movieActors' => "Kurt Russell, Charlize Theron, Shad Moss, Helen Mirren, Vin Diesel"
        ],
        [
            'movieImg' => 'edgeoftheworld.jpg',
            'movieTitle' => 'Edge of the World',
            'movieCurrent' => 'showing',
            'movieGenre' => 'Drama, Adventure',
            'movieDuration' => '104',
            'movieRelDate' => '2021-06-04',
            'movieDirector' => 'Michael Haussman',
            'movieActors' => "Jonathan Rhys Meyers, Dominic Monaghan, Hannah New, Josie Ho"
        ],
        [
            'movieImg' => 'flashback.jpg',
            'movieTitle' => 'Flashback',
            'movieCurrent' => 'showing',
            'movieGenre' => 'Drama, Thriller',
            'movieDuration' => '97',
            'movieRelDate' => '2020-10-08',
            'movieDirector' => 'Christopher MacBride',
            'movieActors' => "Keir Gilchrist, Emory Cohen, Dylan Obrien, Maika Monroe, Landon Norris"
        ],
        [
            'movieImg' => 'Without Remorse.jpg',
            'movieTitle' => "Tom Clancy's Without Remorse",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Thriller, Adventure, Action, War',
            'movieDuration' => '109',
            'movieRelDate' => '2021-04-30',
            'movieDirector' => 'Stefano Sollima',
            'movieActors' => "Jamie Bell, Cam Gigandet, Guy Pearce, Todd Lasance, Michael B Jordan"
        ],
        [
            'movieImg' => 'loki.jpg',
            'movieTitle' => "Loki",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Sci-Fi, Adventure, Action, Fantasy',
            'movieDuration' => '45',
            'movieRelDate' => '2021-06-09',
            'movieDirector' => 'Marvel Studios',
            'movieActors' => "Owen Wilson, Richard E Grant, Gugu Mbatha Raw, Tom Hiddleston"
        ],
        [
            'movieImg' => 'rainfall.jpg',
            'movieTitle' => "Occupation: Rainfall",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Action',
            'movieDuration' => '128',
            'movieRelDate' => '2021-10-30',
            'movieDirector' => 'Luke Sparke',
            'movieActors' => "Jason Isaacs, Mark Coles Smith, Ken Jeong, Temuera Morrison, Daniel Gillies"
        ],
        [
            'movieImg' => 'thewomaninthewindow.jpg',
            'movieTitle' => "The Woman in the Window",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Drama, Thriller, Crime, Mystery',
            'movieDuration' => '100',
            'movieRelDate' => '2021-05-14',
            'movieDirector' => 'Joe Wright',
            'movieActors' => "Gary Oldman, Julianne Moore, Anthony Mackie, Jennifer Jason Leigh, Amy Adams"
        ],
        [
            'movieImg' => 'lupin.jpg',
            'movieTitle' => "Lupin",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Drama, Action, Crime, Mystery',
            'movieDuration' => '231',
            'movieRelDate' => '2021-06-11',
            'movieDirector' => 'Marcela Said, Ludovic Bernard, Louis Leterrier, Hugo Gélin',
            'movieActors' => "Ludivine Sagnier, Omar Sy, Nicole Garcia, Clotilde Hesme, Antoine Gouy"
        ],
        [
            'movieImg' => 'endgame.jpg',
            'movieTitle' => "Avengers: Endgame",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Sci-Fi, Adventure, Action, Fantasy',
            'movieDuration' => '181',
            'movieRelDate' => '2019-04-22',
            'movieDirector' => 'Anthony Russo,Joe Russo',
            'movieActors' => "Don Cheadle, Anthony Mackie, Rene Russo, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Elizabeth Olsen, Tilda Swinton, Brie Larson"
        ],
        [
            'movieImg' => 'lucifer.jpg',
            'movieTitle' => "Lucifer",
            'movieCurrent' => 'showing',
            'movieGenre' => 'Drama, Crime, Fantasy',
            'movieDuration' => '42',
            'movieRelDate' => '2020-02-21',
            'movieDirector' => 'Tom Kapinos',
            'movieActors' => "Tom Kapinos"
        ]
    
    ];

Movie::insert($movies);
    }
}