<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class forumController extends Controller
{
    public function index()
    {
        //  dd(request());
        return view('Forum.index', [
            'forums' => Forum::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(4)
        ]);
    }

    public function show(Forum $forum)
    {

        return view('Forum.show', [
            'forum' => $forum
        ]);
    }

    public function create()
    {
        return view('Forum.create');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'designedTo' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'maxPresent' => 'required',
            'date' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();
        $formFields['owner'] = auth()->user()->name;
        Forum::create($formFields);

        return redirect('/forums')->with('message', 'new Forum created successfully !');
    }
    public function edit(Forum $forum)
    {
        return view('forum.edit', [
            'forum' => $forum
        ]);
    }
    public function update(Request $request, Forum $forum)
    {
        if ($forum->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $formFields = $request->validate([
            'title' => 'required',
            'designedTo' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'maxPresent' => 'required',
            'date' => 'required'
        ]);
        $forum->update($formFields);

        return redirect('/forums/manage')->with('message', 'Forum updated successfully !');
    }
    public function delete(Forum $forum)
    {
        if ($forum->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $forum->delete();
        return redirect('/forums')->with('message', 'Forum deleted successfully !');
    }
    public function manage()
    {
        return  view('Forum.manage', ['forums' => auth()->user()->forums()->get()]);
    }
}
