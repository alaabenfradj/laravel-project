<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Event;
use App\Models\ParticipantEvent;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class EventController extends Controller
{
    //show all events in the database

    public function index()
    {

        return view('events.index', [
            'events' => Event::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(4)
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event,
            'comments' => $event->comments()->get()
        ]);
    }

    public function create()
    {
        return view('events.create');
    }

    //add an event to the database
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['owner'] = auth()->user()->name;
        $formFields['user_id'] = auth()->id();
        Event::create($formFields);

        return redirect('/events')->with('message', 'new event created successfully !');
    }





    public function edit(Event $event)
    {
        return view('events.edit', [
            'event' => $event
        ]);
    }

    // update an event in the data base
    public function update(Request $request, Event $event)
    {
        if ($event->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $formFields = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'tags' => 'required',

        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $event->update($formFields);

        return back()->with('message', 'event updated successfully !');
    }

    //delete an event from the database
    public function delete(Event $event)
    {
        if ($event->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $event->delete();
        return redirect('/events/manage')->with('message', 'event deleted successfully !');
    }

    //show all events to manage them
    public function manage()
    {
        return  view('events.manage', ['events' => auth()->user()->events()->get()]);
    }
    public function addComment(Request $request, $event)
    {

        $formFields = $request->validate([
            'content' => 'required',
        ]);
        $formFields['date'] = date("yyyy-MM-dd");
        $formFields['user_id'] = auth()->id();
        $formFields['event_id'] = $event;
        Comments::create($formFields);
        return redirect('/events')->with('message', 'comment added successfully !');
    }
    public function deleteComment(Comments $comment)
    {
        if ($comment->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $comment->delete();
        return redirect('/events')->with('message', 'comment deleted successfully !');
    }
    public function participate(Event $event)
    {
        $user = auth()->user();
        $user->eventUser()->attach($event->id);
        return back()->with('message', 'participation succeeded !');
    }
}
//F11
