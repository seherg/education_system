<?php

namespace App\Http\Controllers\Api;
use App\Models\Announcement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;


class AnnouncementController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();

        $message = 'Announcement list.';

        return $this->sendResponse($announcements, $message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $announcement = Announcement::create($data);
        $message= 'Announcement added successfully.';

        return $this->sendResponse($announcement, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return $announcement;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Announcement $announcement)
    {
        $data = $req->all();
        $announcement->update($data);
        $message= 'Announcement update successfully.';

        return $this->sendResponse($announcement, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        $message= 'Announcement deleted successfully.';

        return $this->sendResponse($announcement, $message);
    }
}
