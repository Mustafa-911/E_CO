<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Computer;

class ComputresController extends Controller
{
    public function index()
    {
        return DB::select("select * from computers");
    }


    public function create()
    {

        return view('computers.create');
    }


    public function store(Request $request)
    {
        $computer = new Computer();
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
