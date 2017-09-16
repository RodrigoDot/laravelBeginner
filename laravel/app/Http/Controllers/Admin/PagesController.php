<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pages = \App\Page::paginate(10);
      return view('admin.pages.index', compact('pages'));
      //return view('admin.pages.index', ['pages' => $pages]); it could be done like this too
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $page = $request->all();
      $page['user_id'] = Auth::user()->id;
      \App\Page::create($page);
      return response()->redirectToRoute('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $page = \App\Page::findOrFail($id);
      $owner = \App\User::findOrFail($page->user_id);
      $page->owner = $owner->name;
      return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $page = \App\Page::findOrFail($id);
      if($page['user_id'] === Auth::user()->id ){
        $owner = true;
        return view('admin.pages.edit', compact('page', 'owner'));
      } else {
        $owner = false;
        return view('admin.pages.edit', compact('page', 'owner'));
      }
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
      $page = \App\Page::findOrFail($id);
      $page->update($request->all());
      return response()->redirectToRoute('pages.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $page = \App\Page::findOrFail($id);
      $page->delete($page);
      return response()->redirectToRoute('pages.index');
    }
}
