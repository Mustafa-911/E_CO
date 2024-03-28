<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{

    public function index()
    {
        return view('computers.index' , [
            'computers' => Computer::all()
        ]);
    }


    public function create()
    {
        return view('computers.create');
    }


    public function store(Request $request)
    {
        $computer = new Computer();

        $computer->name = $request->input('computer-Name');
        $computer->Origin = $request->input('computer-Origin');
        $computer->Price = $request->input('computer-Price');

        $computer ->save();

        return redirect()->route('computers.index');
    }


    public function show($computer)
    {
    return view('computers.show', [
        'computer' => $computer::findOrFaill($computer)
    ]);

}


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
