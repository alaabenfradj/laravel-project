<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\User;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comments::paginate(5);
        return view('comments', compact('comments'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFilter(Request $request)
    {

        $comments  = Comments::where('content', 'LIKE', '%' . $request->search . '%')
            ->orWhere('date', 'LIKE', '%' . $request->search . '%')
            ->paginate(5);

        if (count($comments) > 0)
            return view('comments', compact('comments'))->withDetails($comments)->withQuery($request->search);
        else
            return view('comments', compact('comments'))->withMessage('No Comment Details found. Try to search again !');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function userName($id)
    {
        //$programmes = Programme::get();

        $user = User::find($id);

        //$activities = Activities::get();
        return $user->name;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = 'Banned';
        $user->save();

        return redirect('/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment->delete();
        return redirect('/comments');
    }
}
