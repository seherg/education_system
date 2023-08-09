<?php

namespace App\Http\Controllers\Api\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentDocument;
use App\Http\Controllers\Api\ApiController;


class ContentDocumentController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentDocument = ContentDocument::all();

        $message = 'Content Document List.';

        return this->sendResponse($contentDocument, $message);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $contentDocument = ContentDocument::create($data);
        $message= 'Content Document added successfully.';

        return $this->sendResponse($contentDocument, $message);
    }
    /**
     * Display the specified resource.
     */
    public function show(ContentDocument $contentDocument)
    {
        return $contentDocument;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, ContentDocument $contentDocument)
    {
        $data = $request->all();
        $contentDocument->update($data);
        $message = 'Content document updated successfully.';

        return $this->sendResponse($contentDocument, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentDocument $contentDocument)
    {
        $contentDocument->delete();
        $message = 'Content document deleted successfully.';

        return $this->sendResponse($contentDocument, $message);
    }
}
