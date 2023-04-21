<?php

namespace App\Http\Controllers\Ads;

use App\Http\Controllers\Controller;

class BandController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function show()
    {
        return "Show ad from band";
    }
    public function createView()
    {
        return 'Create advertisment from band page';
    }

    public function store()
    {
        return 'Create advertisment from band request';
    }

    public function editView()
    {
        return 'Update adt from band page';
    }

    public function update()
    {
        return 'Update adt from band request';
    }

    public function destroy()
    {
        return 'Delete adt from band request';
    }
}
