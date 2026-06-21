<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('blog.posts', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        $post = Post::findOrFail($id);

        return view('blog.post-details', ['post' => $post]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
{
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'preview' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean'
        ], [
            'title.required' => 'El título de la entrada es obligatorio.',
            'preview.required' => 'El resumen de la entrada es obligatorio.',
            'content.required' => 'El contenido de la entrada es obligatorio.',
        ]);

        $data['featured'] = $request->has('featured');

        if($request->hasFile('image')) {

            $path = $request->file('image')->store('images/posts', 'public');

            $data['image'] = basename($path);
        }

        $post = Post::create($data);

        return redirect()
            ->route('admin.blog', ['id' => $post->id])
            ->with('feedback.message', 'Entrada creada exitosamente.');
    }

    public function delete(int $id)
    {
        $post = Post::findOrFail($id);

        return view('admin.blog.delete', ['post' => $post]);
    }

    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        if(isset($post->image) && $post->image !== null && Storage::disk('public')->exists('images/posts/' . $post->image)) {
            Storage::disk('public')->delete('images/posts/' . $post->image);
        }

        return redirect()
            ->route('admin.blog')
            ->with('feedback.message', 'Entrada eliminada exitosamente.');
    }

    public function edit(int $id)
    {
        $post = Post::findOrFail($id);

        return view('admin.blog.edit', ['post' => $post]);
    }

    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'preview' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean'
        ], [
            'title.required' => 'El título de la entrada es obligatorio.',
            'preview.required' => 'El resumen de la entrada es obligatorio.',
            'content.required' => 'El contenido de la entrada es obligatorio.',
        ]);

        $data['featured'] = $request->has('featured');

        if($request->hasFile('image')) {

            $path = $request->file('image')->store('images/posts', 'public');
            $data['image'] = basename($path);

            $oldImage = $post->image;
        }

        $post->update($data);

        if(isset($oldImage) && $oldImage !== null && Storage::disk('public')->exists('images/posts/' . $oldImage)) {
            Storage::disk('public')->delete('images/posts/' . $oldImage);
        }

        return redirect()
            ->route('admin.blog')
            ->with('feedback.message', 'Entrada actualizada exitosamente.');
    }
}
