<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function handleOption(Request $request)
    {
        $validated = $request->validate([
            'option' => 'required|string',
        ]);

        // Process the selected option
        $selectedOption = $validated['option'];
        dd($selectedOption);

        return back()->with('success', "You selected: $selectedOption");
    }
}
