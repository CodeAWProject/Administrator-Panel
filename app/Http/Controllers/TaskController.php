<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('task.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'priority' => 'required',
            'is_completed' => 'required',
            'user_id' => 'required',      
        ]);

        $acces_token = session()->get('access_token')[0];

        $url = 'http://localhost/APICoursePHP/todolistAPI/api/tasks';
        $headers = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $acces_token,
            ]
        ];

        $data = [
            'name' => $request->input('name'),
            'priority' => $request->input('priority'),
            'is_completed' => $request->input('is_completed'),
            'user_id' => $request->input('user_id'),
        ];

        $client = new Client();

        $response = $client->post($url, $headers + ['json' => $data]);

        $responseData = json_decode($response->getBody(), true);

        

        
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
