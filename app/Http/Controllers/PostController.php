<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $posts = DB::table('posts')->join('users', 'users.id', '=', 'posts.author_id')
                ->select('posts.*', 'users.username')
                ->where('author_id',Auth::user()->id)
                ->orderBy('posts.id', 'desc')
                ->paginate(config('app.PER_PAGE'));

            return view('pages.posts.index', compact('posts'));
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        try {
            $data  = $request->except('_token','_method');

            $data['slug'] = Str::slug($request->title);

            $data['author_id'] = Auth::user()->id;

            $rs = DB::table('posts')->insert($data);

            return $this->redirect($rs, __('Create Success !'));

        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $post = DB::table('posts')->where('id', $id)->first();

            return view('pages.posts.show', compact('post'));

        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $post = DB::table('posts')->where('id', $id)->first();

            return view('pages.posts.edit', compact('post'));
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Update the specified resource in storage.validated
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        try {
            $data  = $request->except('_token','_method');

            $data['slug'] = Str::slug($request->title);

            $data['author_id'] = Auth::user()->id;

            $rs = DB::table('posts')->where('id', $id)->update($data);

            return $this->redirect($rs, __('Update Success !'));

        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $rs = DB::table('posts')->where('id', $id)->delete();

            return $this->redirect($rs, __('Delete Success !'));

        } catch (\Exception $e) {
            abort(500);
        }
    }

    protected function redirect($rs, $mess)
    {
        if ($rs) {
            return back()->with('success', $mess);
        } else {
            return back()->with('error', 'Have Error !');
        }
    }
}
