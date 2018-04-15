<?php

namespace App\Http\Controllers\API;

use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Resources\CandidateResource;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CandidateResource::collection(Candidate::with('voters')->paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidate = Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        return new CandidateResource($candidate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        return new CandidateResource($candidate);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        if(!$request->user())
        {
            return response()->json(['error' => 'You can only edit your own books.'], 403);

        }
        $candidate->update($request->only(['first_name', 'last_name']));

        return new CandidateResource($candidate);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return response()->json(null, 204);
    }
}
