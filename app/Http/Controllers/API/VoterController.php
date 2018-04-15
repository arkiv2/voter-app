<?php

namespace App\Http\Controllers\API;

use App\Voter;
use Illuminate\Http\Request;
use App\Http\Resources\VoterResource;
use App\Http\Controllers\Controller;
 
class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VoterResource::collection(Voter::with('source')->paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voter = Voter::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'zone' => $request->zone,
            'precint_number' => $request->precint_number,
        ]);

        return new VoterResource($voter);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        return new VoterResource($voter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
        if (!$request->user()) 
        {
            return response()->json(['error' => 'You can only edit your own books.'], 403);
        }

        $voter->update($request->only(['first_name', 'last_name', 'zone', 'precint_numner']));

        return new VoterResource($voter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        $voter->delete();

        return response()->json(null, 204);
    }
}
