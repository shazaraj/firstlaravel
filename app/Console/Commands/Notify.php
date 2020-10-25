<?php

namespace App\Console\Commands;


use App\User;
use App\Mail\MailNotify;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Support\Facades\MailNotify;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email notify for all users every day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::select('email') -> get();

        foreach ($users as $user){

            $data=['title' => 'programming', 'body' => 'laravel'];
            Mail::To($user) -> send(new MailNotify($data));

        }

    }
}
