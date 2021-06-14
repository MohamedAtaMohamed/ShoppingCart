<?php

namespace App\Jobs;

use App\Mail\SendNewestProducts;
use App\Product;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNewestProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        $products = Product::latest()->take(10)->get()->toArray();

        $products = [
            'products'  => $products,
        ];

        foreach (User::all() as $user){
            \Mail::send('emails.newestProducts', $products,

                function($message) use ($user) {

                $message->to($user->email, 'Newest Products')->subject('Newest Product');

                $message->from('mohamedatam96@gmail.com','Mohamed');

            });

        }

    }
}
