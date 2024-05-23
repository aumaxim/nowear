<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $post = new Post();
        $post->description = $request->description;
        $post->image =  $imagePath;
        $post->user_id = Auth::id(); // Assuming the user is authenticated
        $post->save();

        return redirect()->route('home'); // Redirect to a route that lists posts or any desired route
    }
}
