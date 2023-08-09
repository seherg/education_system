<?php

namespace App\Http\Controllers\Api\Course;

use App\Models\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

class ContentController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $contents = Content::all();

        $message = 'Content list.';

        return $this->sendResponse($contents, $message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $content = Content::create($data);
        $message = 'Content added successfully.';

        return $this->sendResponse($content, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        return $content;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Content $concent)
    {
        $data = $req->all();
        $content->update($data);
        $message = 'Content updated successfully.';

        return $this->sendResponse($content, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $content->delete();
        $message = 'Content deleted successfully.';

        return $this->sendResponse($content, $message);
    }
}
