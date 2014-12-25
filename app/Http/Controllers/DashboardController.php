<?php namespace Cwota\Http\Controllers;

use Cwota\Http\Requests;
use Cwota\Http\Controllers\Controller;

class DashboardController extends Controller {

	public function index()
    {
        return view('dashboard.index');
    }

}
