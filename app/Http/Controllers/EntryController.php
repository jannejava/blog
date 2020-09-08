<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function show(Request $request, int $id)
    {
        $entry = Entry::findOrFail($id);

        return view('entries.show', [
            'entry' => $entry,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $entry = Entry::findOrFail($id);

        $entry->headline = request('headline');
        $entry->text = request('text');
        $entry->save();

        return redirect(route('blog.show', ['id' => $entry->id]));
    }
}
