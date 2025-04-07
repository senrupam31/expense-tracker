<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use App\Models\Item;
use Illuminate\Http\Request;

class ExpenditureController extends Controller
{
    public function index()
{
    $expenditures = \App\Models\Expenditure::where('user_id', auth()->id())
                    ->with('item')
                    ->latest()
                    ->get();

    return view('expenditures.index', compact('expenditures'));
}


    public function create()
    {
        $itemGroups = \App\Models\ItemGroup::with('items')->get(); // include items
        return view('expenditures.create', compact('itemGroups'));
    }

    public function store(Request $request)
{
    $request->validate([
        'item_id' => 'required|exists:items,id',
        'amount' => 'required|numeric',
        'date' => 'required|date',
    ]);

    Expenditure::create([
        'user_id' => auth()->id(),
        'item_id' => $request->item_id,
        'amount' => $request->amount,
        'date' => $request->date,
        'spent_at' => $request->date,
    ]);
    
    return redirect()->route('expenditures.index')->with('success', 'Expenditure added.');

    }
}
