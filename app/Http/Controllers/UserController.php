<?php

namespace App\Http\Controllers;

use App\GenericResponse;
use App\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const INFINITY = 1.0 * (0x3f3f3f3f);
    const ZERO = 0;

    public function index()
    {
        $response = new GenericResponse();
        try {
            $all = User::all();
            $response->setResult($all);
            $response->setSuccess(true);
        } catch (Exception $exception) {
            $response->setSuccess(false);
            $response->setResult(null);
            $response->setMessage($exception->getMessage());
        }

        return response()->json($response, 200, ["Content-Type" => "application/json"]);
    }

    public function store(Request $request)
    {
        $response = new GenericResponse();
        try {
            //TODO: Store user
            $user = User::create([
                "name" => $request->input("name"),
                "win_count" => self::ZERO,
                "lose_count" => self::ZERO,
                "fastest_time" => self::INFINITY
            ]);
            $response->setResult($user);
            $response->setSuccess(true);
        } catch (Exception $exception) {
            $response->setSuccess(false);
            $response->setResult(null);
            $response->setMessage($exception->getMessage());
        }

        return response()->json($response, 200, ["Content-Type" => "application/json"]);
    }

    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        return response()->json(null, 204);
    }
}
