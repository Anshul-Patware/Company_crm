<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custom;

class CustomController extends Controller
{
    public function index()
    {
        $Customs = Custom::all();
        return view('Customs.index', compact('Customs'));
    }

    public function create()
    {
        return view('Customs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Custom::create($request->all());

        return redirect()->route('Customs.index')->with('success', 'Message sent successfully!');
    }

    public function show(Custom $Custom)
    {
        return view('Customs.show', compact('Custom'));
    }

    public function edit(Custom $Custom)
    {
        return view('Customs.edit', compact('Custom'));
    }

    public function update(Request $request, Custom $Custom)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
        ]);

        $Custom->update($request->all());

        return redirect()->route('Customs.index')->with('success', 'Updated successfully!');
    }

    public function destroy(Custom $Custom)
    {
        $Custom->delete();

        return redirect()->route('Customs.index')->with('success', 'Deleted successfully!');
    }
}
