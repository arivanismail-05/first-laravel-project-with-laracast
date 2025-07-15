<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        
    $job = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs' =>
     $job]);


    }
    public function create()
    {
    return view('jobs.create');
    }

    public function show(Job $job)
    {
         return view('jobs.show', ['job' => $job]);
    }


    public function store()
    {

    request()->validate([
        'title' => ['required','min:3'],
        'pay' => ['required']

    ]);

   $job =  Job::create([
        'title' => request('title'),
        'pay' => request('pay'),
        'employer_id' => 1
    ]);

      Mail::to($job->employer->user)->queue(
        new JobPosted($job)
    );

    return redirect('/jobs');

    }

    public function edit(Job $job)
    {

        if(Auth::guest()){
            return redirect('/login');
        }

        


        
    return view('jobs.edit', ['job' => $job]);

    }


    public function update(Job $job)
    {

    
    request()->validate([
        'title' => ['required','min:3'],
        'pay' => ['required']

    ]);



    $job->update([

        'title' => request('title'),
        'pay' => request('pay')

    ]);

  return  redirect('jobs/'. $job->id);


    }

    public function destroy(Job $job)
    {

        $job->delete();


     return   redirect('/jobs');


    }
}
