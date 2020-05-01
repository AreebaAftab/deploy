<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "areebanovember@hotmail.com",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "ekanhoi.makh@osatna.ga",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "mohamed.roch@dwsfhe.us",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "skeiven.santos.78@textcasi.ml",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "fbgakhary@livingshoot.com",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "9caporal.cavid.a0@cek-resi.website",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "clucase19982h@greendipbench.ga",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "frooney.single.7@textcasi.ml",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "wbenja@theblogprofboe.info",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "9moises.santan@volthdas.gq",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
    }
}
