<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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

    Job::create([
        'title' => request('title'),
        'pay' => request('pay'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');

    }

    public function edit(Job $job)
    {
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
