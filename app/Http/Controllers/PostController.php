<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {

        $posts = Post::paginate(5);

        return view('backend.posts.index', compact('posts'));
    }

    public function create()
    {
        Session::flash('creat_post', 'مطلب با ساخته حذف شد');

        return view('backend.posts.create');
    }


    public function store(Request $request)
    {

        $image = time() . '.' . $request->image->extension();

        $request->image->move(public_path('assets/dashboard/img/posts'), $image);

        $data = array();
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['user_id'] = Auth::id();
        $data['image'] = $image;
        if ($request->status == 'on') {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;

        }

        if (DB::table('posts')->insert($data)) {
            Session::flash('create_post', 'مطلب با موفقیت ارسال شد');

            return redirect()->back();
        }

//        dd($request);


    }


    public function edit($id)
    {
        $posts = Post::all();
        Session::flash('edit_post', 'مطلب با ویرایش حذف شد');

        return view('backend.posts.update', compact('posts' ));
    }


    public function update(Request $request, Post $post)
    {
        if ($request->image) {
            $image = time() . '.' . $request->img->extension();

            $request->image->move(public_path('images'), $image);

        } else {
            $image = $post->image;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,

        ]);
        Session::flash('update_post', 'مطلب جدید با موفقیت آپدیت شد');
        return redirect()->route('');
    }


    public function destroy(Post $post)
    {

        $post->delete();


        Session::flash('delete_post', 'مطلب با موفقیت حذف شد');

        return redirect()->route('');
    }

    public function changeStatus(Request $request)

    {

        $posts = Post::find($request->id);

        $posts->status = $request->status;

        $posts->save();


        return response()->json(['success' => 'Status change successfully.']);

    }


}
