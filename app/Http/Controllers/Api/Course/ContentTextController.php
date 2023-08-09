<?php

namespace App\Http\Controllers\Api\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\ContentText;
use App\Http\Controllers\Api\ApiController;


class ContentTextController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentText = ContentText::all();

        $message = 'Content Text List';

        return this->sendResponse($contentText, $message);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $contentText = ContentText::create($data);
        $message= 'Content Text added successfully.';

        return $this->sendResponse($contentText, $message);
    }
    /**
     * Display the specified resource.
     */
    public function show(ContentText $contentText)
    {
        return $contentText;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, ContentText $contentText)
    {
        $data = $request->all();
        $contentText->update($data);
        $message = 'Content text updated successfully.';

        return $this->sendResponse($contentText, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentText $contentText)
    {
        $contentText->delete();
        $message = 'Content text deleted successfully.';

        return $this->sendResponse($contentText, $message);
    }
}
