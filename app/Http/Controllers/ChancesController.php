<?php

namespace App\Http\Controllers;

use App\Models\Chances;
use Illuminate\Http\Request;

class ChancesController extends Controller
{
    // public function showForm()
    // {
    //     $winningPercentage = Chances::firstOrFail();
    //     return view('winning_percentage_form', compact('winningPercentage'));
    // }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'percentage' => 'required|numeric|min:0|max:100',
    //     ]);

    //     $winningPercentage = Chances::firstOrFail();
    //     $winningPercentage->update([
    //         'percentage' => $request->input('percentage'),
    //     ]);

    //     return redirect()->route('chances.form')->with('success', 'Winning percentage updated successfully!');
    // }
}
