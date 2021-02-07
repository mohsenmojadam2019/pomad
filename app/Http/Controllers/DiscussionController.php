<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiscussionsRequest;
use App\Models\Discussion;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->only(['create', 'store']);

    }


    public function index()
    {
        $discussions = Discussion::paginate(5);
        return view('discussions.index', compact('discussions'));

    }


    public function create()
    {
        return view('discussions.create');
    }


    public function store(CreateDiscussionsRequest $request)
    {
        auth()->user()->discussions()->craete([

            'title' => $request->title,
            'slug' => str::slug($request->title),
            'content' => $request->content,
            'channel_id' => $request->channel,

        ]);
        return redirect()->route('discussion.index')->withSuccess('با موفقیت انجام شد');

    }


    public function show(Discussion $discussion)
    {
        //
    }


    public function edit(Discussion $discussion)
    {
        //
    }


    public function update(Request $request, Discussion $discussion)
    {
        //
    }


    public function destroy(Discussion $discussion)
    {
        //
    }


    public function reply(Discussion $discussion, Reply $reply)
    {

        $discussion->markAsBestReply($reply);

        session()->flash('success','marked');


        return redirect()->back();

    }
}
