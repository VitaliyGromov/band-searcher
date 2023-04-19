<?php

namespace App\Http\Controllers\Advertisements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertismentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('advertisments');
    }

    public function advertismentFromMusicionView()
    {
        return "Create advertisment from musicion page";
    }

    public function advertismentFromBandView()
    {
        return "Create advertisment from band page";
    }

    public function createAdvertismentFromMusicion()
    {
        return "Create advertisment from musicion Request";
    }

    public function createAdvertismentFromBand()
    {
        return "Create advertisment from band Request";
    }

    public function updateAdvertismentFromBandView()
    {
        return "Update advertisment from band Request";
    }

    public function updateAdvertismentFromMusicionView()
    {
        return "Update advertisment from musicion Request";
    }

    public function destroyAdvertisment()
    {
        return "Delete advertisment";
    }
}
