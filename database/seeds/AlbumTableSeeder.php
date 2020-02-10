<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album')->insert([
            'nome' => "Hot Fuss",
            'imagem' => "hotfuss.jpg",
            'data_lancamento' => "2004-06-07",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Sam's Town",
            'imagem' => 'samstown.jpg',
            'data_lancamento' => '2006-09-02',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Sawdust",
            'imagem' => "sawdust.jpg",
            'data_lancamento' => "2007-11-09",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Day & Age",
            'imagem' => "day&age.jpg",
            'data_lancamento' => "2008-11-18",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Live from the Royal Albert Hall",
            'imagem' => "livefromtheroyalalberthall.jpg",
            'data_lancamento' => "2009-11-03",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "(Red) Christmas EP",
            'imagem' => "redchristmasep.jpg",
            'data_lancamento' => "2011-11-09",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Battle Born",
            'imagem' => "battleborn.jpg",
            'data_lancamento' => "2012-09-17",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Direct Hits",
            'imagem' => "directhits.jpg",
            'data_lancamento' => "2013-11-11",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Don't Waste Your Whishes",
            'imagem' => "dontwasteyourwishes.jpg",
            'data_lancamento' => "2016-11-18",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Wonderful Wonderful",
            'imagem' => "wonderfulwonderful.jpg",
            'data_lancamento' => "2017-09-22",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Meteora",
            'imagem' => "meteora.jpg",
            'data_lancamento' => "2003-03-25",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Live in Texas",
            'imagem' => "liveintexas.jpg",
            'data_lancamento' => "2003-11-18",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Minutes to Midnight",
            'imagem' => "minutestomidnight.jpg",
            'data_lancamento' => "2007-05-14",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Road to Revolution: Live at Milton Keynes",
            'imagem' => "roadtorevolution.jpg",
            'data_lancamento' => "2008-11-21",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "A Thousand Suns",
            'imagem' => "athousandsuns.jpg",
            'data_lancamento' => "2010-09-08",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Living Things",
            'imagem' => "livingthings.jpg",
            'data_lancamento' => "2012-06-20",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Recharged",
            'imagem' => "recharged.jpg",
            'data_lancamento' => "2013-10-29",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "The Hunting Party",
            'imagem' => "thehuntingparty.jpg",
            'data_lancamento' => "2014-06-13",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "One More Light",
            'imagem' => "onemorelight.jpg",
            'data_lancamento' => "2017-05-19",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "One More Light Live",
            'imagem' => "onemorelightlive.jpg",
            'data_lancamento' => "2017-12-15",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Origin of Symmetry ",
            'imagem' => "originofsymmetry.jpg",
            'data_lancamento' => "2001-07-17",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Hullabaloo Soundtrack",
            'imagem' => "hullabaloo.jpg",
            'data_lancamento' => "2002-06-04",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Absolution",
            'imagem' => "absolution.jpg",
            'data_lancamento' => "2003-09-15",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Black Holes and Revelations",
            'imagem' => "blackholesandrevelations.jpg",
            'data_lancamento' => "2006-07-03",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "H.A.A.R.P",
            'imagem' => "haarp.jpg",
            'data_lancamento' => "2008-03-17",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "The Resistance",
            'imagem' => "theresistance.jpg",
            'data_lancamento' => "2009-09-11",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "The 2nd Law",
            'imagem' => "the2ndlaw.jpg",
            'data_lancamento' => "2012-09-28",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Live at Rome Olympic Stadium",
            'imagem' => "liveatromeolympicstadium.jpg",
            'data_lancamento' => "2013-11-29",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Drones",
            'imagem' => "drones.jpg",
            'data_lancamento' => "2015-06-05",
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('album')->insert([
            'nome' => "Simulation Theory",
            'imagem' => 'simulationtheory.jpg',
            'data_lancamento' => '2018-11-09',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
