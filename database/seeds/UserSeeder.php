<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
            'email' => "9christianclemenf@lasischa.ml",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "8brad.hoy.99@atarif.tk",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "uwandersonh2o0@v1vnks.us",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "pxavi89c@consuna.cf",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "gkhaled@marwellhard.cf",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "baaa968997@мангалмясо.рф",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "tnatashai@fluthelpnac.cf",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "0cscc73l@tarisjohn.cf",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'email' => "ekanhoi.makh@osatna.ga",
            'password' => "$2y$10$8.TGzjXVU0zTT.jUKTAkpuqsLXoCkvpc73qFKEhfSbr.U/9cUGH6O",
        ]);
    }
}
