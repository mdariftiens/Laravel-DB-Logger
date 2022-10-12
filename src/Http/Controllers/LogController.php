<?php
namespace Mdariftiens\DBlog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mdariftiens\DBlog\Models\Log;

class LogController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['logs'] = Log::latest()->paginate($request->get('per_page',50));
        return view("dblog::logview", $data);
    }

    public function show($id)
    {
        $log = Log::findOrFail($id);
        return view("dblog::logview-detail",['log' => $log]);
    }

    public function destroy($id)
    {
        Log::findOrFail($id)->delete();
        return redirect()->route('showLog')->with(['message' => 'Delete Successfully']);
    }
}
