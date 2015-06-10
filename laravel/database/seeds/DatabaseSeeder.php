<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $this->call('OAuthClientsSeeder');
        $this->call('OAuthUsersSeeder');
        $this->call('post');
    }

}

class post extends Seeder {

    public function run() {
        $date = new \DateTime;
        DB::table('posts')->insert(array(
            'title' => "Test Title",
            'content' => "Test content",
            'auther' => "2",
            'created_at' => $date,
            'updated_at' => $date,
            'published_date'=>$date
        ));
    }

}

class OAuthClientsSeeder extends Seeder {

    public function run() {
        DB::table('oauth_clients')->insert(array(
            'client_id' => "testclient",
            'client_secret' => "testpass",
            'redirect_uri' => "http://fake/",
        ));
    }

}

class OAuthUsersSeeder extends Seeder {

    public function run() {
        DB::table('oauth_users')->insert(array(
            'username' => "bshaffer",
            'password' => sha1("brent123"),
            'first_name' => "Brent",
            'last_name' => "Shaffer",
        ));
    }

}
