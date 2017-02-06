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

class register implements ShouldQueue
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
    public function handle(Request $request)
    {
        //
        $employee = new testmodel;
        $employee->employee = $request->employee;
        $employee->emp_id = $request->emp_id;
        $employee->salary = $request->salary;
        $employee->save();
        echo "Employee Registered";
    }
}
