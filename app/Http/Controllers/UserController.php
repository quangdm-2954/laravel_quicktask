<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Post;
use App\Models\User;
use App\Scopes\UserActiveScope;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    protected $post;

    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    protected function findUserById($id)
    {
        return $this->user->withoutGlobalScope(UserActiveScope::class)->findOrFail($id);
    }

    protected function redirect($mess)
    {
        if ($rs) {
            return back()->with('success', $mess);
        } else {
            return back()->with('error', 'Have Error !');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = $this->user->with('posts')
                ->withoutGlobalScope(UserActiveScope::class)
                ->paginate(config('app.PER_PAGE'))
                ->withQueryString();

            return view('pages.users.index', compact('users'));

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
        return 'User Create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'User Store';
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
            $user = $this->findUserById($id);

            return view('pages.users.show', compact('user'));

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
            $user = $this->findUserById($id);

            return view('pages.users.edit', compact('user'));

        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->findUserById($id);
        try {
            DB::beginTransaction();

            $data = $request->except('isAdmin');
            $data['isActive'] = ($request->isActive == null) ? 0 : 1;
            $user->update($data);
            $user->isAdmin = ($request->isAdmin == null) ? 0 : 1;
            $user->save();

            DB::commit();

            return back()->with('success', __('Update Success !'));

        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('error', 'Have Error !');

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
        $user = $this->findUserById($id);
        try {
            DB::beginTransaction();

            $user->posts()->delete();
            $user->delete();

            DB::commit();

            return back()->with('success', __('Delete Success !'));

        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('error', 'Have Error !');
        }

    }

    public function getPostsByUser($id)
    {
        try {
            $posts = $this->post->where('author_id', $id)
                ->orderBy('id', 'desc')
                ->paginate(config('app.PER_PAGE'));

            $user = $this->findUserById($id);

            return view('pages.users.posts', compact('posts', 'user'));

        } catch (\Exception $e) {
            abort(500);
        }
    }

}
