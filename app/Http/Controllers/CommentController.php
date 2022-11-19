<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\User;


class CommentController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'content' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();
        Comments::create($formFields);

        return redirect('/events')->with('message', 'comment added successfully !');
    }
    public static function userName($id)
    {
        $user = User::find($id);
        return $user->name;
    }
}
