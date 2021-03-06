<?php
namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use App\Http\Resources\AuthorPostsResource;
use App\Http\Resources\AuthorCommentsResource;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserRescouce;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //\App\Models\User
            $users =  \App\Models\User::paginate(env('AUTHORS_PER_PAGE') );
            return new UsersResource( $users);
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($request->id);
        // $user = new UserResource($user);
        //
                // return new UserResource(\App\Models\User::find($id) );
                // $data = new UserCollection($this->model->getUserById($id));
                // return $data;
                // User::where('id' = $user_id)->first()

                return User::whereId($id)->first();
    }

    public function posts( $id ){
        $user = User::find( $id );
        $posts = $user->posts()->paginate( env('POSTS_PER_PAGE') );
        return new AuthorPostsResource( $posts );
    }

    /**
     * @param $id
     * @return AuthorCommentsResource
     */
    public function comments( $id ){
        $user = User::find( $id );
        $comments = $user->comments()->paginate( env('COMMENTS_PER_PAGE') );
        return new AuthorCommentsResource( $comments );
    }

    // Public function show ($id){
    //     // $user=User::findOrfail($id);
    //     $data = User::find($id);
    //     Return new UserResource($data);
    //     }
    

//     public function show($id ,Request $request)
//     {
//         $user = User::find($id);
    
//      if( $request->is('api/*')){
//                 $user = new UserResource($user);
//                 return $this->sendResponse(compact('user'),$message);
//             }
// }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
