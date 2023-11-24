<?php

namespace App\Console\Commands;

use App\Mail\TestEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:testing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email schedule testing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('naingwinaung1710@gmail.com')->send(new TestEmail);
    }
}
