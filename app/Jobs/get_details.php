<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Http\Request;
use App\testModel;
use Illuminate\Support\Facades\DB;

class get_details implements ShouldQueue
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
        $users = DB::table('employees')->get();
        foreach ($users as $user) {
        $employee =$user->employee;
        $emp_id = $user->emp_id;
        echo "$employee";
        echo "<br>";
        echo "$emp_id";
        echo "<br>";
        }
    }
}
