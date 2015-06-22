<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Job;
use App\Http\Requests\CreateJobRequest;

class DashboardsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user_job_posts = Auth::user()->jobs;
        return view('dashboard.index', compact('user_job_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateJobRequest $request)
    {
        $job_post = new Job($request->all());
        Auth::user()->jobs()->save($job_post);

        session()->flash('notice', "Succesfull Create {$request->input('title')}");
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('dashboard.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
       $job = Job::findOrFail($id);
       return view('dashboard.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CreateJobRequest $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());

        session()->flash('notice', "Succesfull Update {$request->input('title')}");
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        session()->flash('notice', "Succesfull Delete {$job->title}");
        return redirect('/dashboard');
    }
}
