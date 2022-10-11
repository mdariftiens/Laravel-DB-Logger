<?php
namespace Mdariftiens\DBlog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mdariftiens\DBlog\Models\Log;

class LogController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['logs'] = Log::latest()->get();
        return view("dblog::logview", $data);
    }
}
