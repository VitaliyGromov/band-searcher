<?php

namespace App\Http\Controllers\Ads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function show()
    {
        return 'show ad of artist page';
    }
    public function createView()
    {
        return 'Create advertisment from artist page';
    }

    public function store()
    {
        return 'Create advertisment from artist request';
    }

    public function editView()
    {
        return 'Update adt from artist page';
    }

    public function update()
    {
        return 'Update adt from artist request';
    }

    public function destroy()
    {
        return 'Delete adt from musicion request';
    }
}
