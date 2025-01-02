<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmeansController extends Controller
{
    public function __construct()
    {
        // This method will be called when the controller is instantiated
    }

    // This method for displaying the view of the K-means algorithm
    public function index()
    {
        return view('admin.kmeans.index');
    }
}
