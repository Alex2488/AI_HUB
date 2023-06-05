<?php

namespace App\Http\Controllers;


use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Support\Str;

class AdminTagController extends Controller


{
    public function showtags()
    {
        $tags = Tag::all();
        return view('admin.tag.show_tags', compact('tags'));
    }

    public function showAddtag()
    {
        return view('admin.tag.add-tag');
    }


    public function addTag(TagRequest $request)
    {
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->slug = Str::slug($request->name);

        $tag->save();

        return redirect()->route('show-tags')->with('success', 'Новий тег збережено');
    }

    public function showEditTag($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit-tag', compact('tag'));
    }

    public function updateTag($id, ServiceTagRequest $request)
    {
        $tag = Tag::find($id);
        $tag->name = $request->input('name');
        $tag->slug = Str::slug($request->name);

        $tag->save();

        return redirect()->route('show-tags', $id)->with('success', 'Зміни збережені');
    }

    public function deleteTag($id)
    {
        Tag::find($id)->delete();
        return back();
    }
}
