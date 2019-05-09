<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\User;
class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::all()->toArray();
        $news = [
            [
                'title' => 'Laravel Mix Alias',
                'description' => 'Laravel Mix Alias is an NPM package that provides a convenience method around WebPack’s ‘resolve.alias’ configuration.',
                'imgPath' => '/photos/1/laravel-craftsman-cli.jpg',
                'text' => 'lalala',
                'created_at' => '2011-01-01 20:30:29'
            ],
            [
                'title' => 'PHP Approves Short Arrow Functions',
                'description' => 'The PHP Core team has now officially approved the addition of short arrow functions and they are hoping to have this available in PHP 7.4.',
                'imgPath' => '/photos/1/short-arrow-functions.png',
                'text' => '',
                'created_at' => '2019-05-02 20:30:29'
            ],
            [
                'title' => 'Allowing Users to send email with their own SMTP settings in Laravel',
                'description' => 'In a recent project, I needed a way to allow users to send emails with their SMTP credentials. The goal with this was to give all the outgoing emails a more personal touch and look like it came directly from an organization versus a generic one for the web app.',
                'imgPath' => '/photos/1/envelopes-leader.jpg',
                'text' => 'erwtrett',
                'created_at' => '2019-04-26 20:30:29'
            ],
            [
                'title' => 'Junges Laravel ACL',
                'description' => 'Junges Laravel ACL is a package by Mateus Junges that helps you to associate users with permissions and permission groups.',
                'imgPath' => '/photos/1/junges-acl.png',
                'text' => 'qwqwqwqwqw',
                'created_at' => '2019-04-26 20:30:29'
            ],
            [
                'title' => 'A New Job-based Retry Delay Comes to Laravel 5.8.14',
                'description' => 'Laravel 5.8.14 is out with a job-based retry delay feature.',
                'imgPath' => '/photos/1/laravel-5.8.14.png',
                'text' => 'asasasas',
                'created_at' => '2019-04-24 20:30:29'
            ],
            [

            ]
        ];
        foreach ($news as $item) {
            $index = array_rand($users,1);
            $user = $users[$index];
            var_dump($user);
            if (!Item::where('title', '=', $item['title'])->first()) {
                $a = Item::create([
                    'user_id'=>$user['id'],
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'imgPath' => $item['imgPath'],
                    'text' => $item['text'],
                    'created_at' => $item['created_at'],
                ]);
            }
        }
    }
}
