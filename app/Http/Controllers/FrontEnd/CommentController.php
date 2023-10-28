<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('message', 'Error: Comment Area is Manadatory');
            }
            $post = Post::where('name', $request->post_name)->where('status', '0')->first();
            if ($post) {
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('message', 'Commented Successfully');
            } else {
                return redirect()->back()->with('message', 'No Such Post Found');
            }
        } else {
            return redirect('login')->back()->with('message', 'Login First to Comment');
        }
    }

    public function destroy(Request $request)
    {
        if (Auth::check()) {
            $comment = Comment::where('id', $request->comment->id)->where('user_id', Auth::user()->id)->first();
            if ($comment) {
                $comment->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Comment deleted successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ]);
            }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Login to Delete this comment'
            ]);
        }
    }
}
