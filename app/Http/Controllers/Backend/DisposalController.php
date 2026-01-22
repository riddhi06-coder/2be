<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;
use App\Models\User;
use App\Models\DisposalDetails;
use App\Models\WasteDisposalDetails;


class DisposalController extends Controller
{

    public function index()
    {
        $disposals = WasteDisposalDetails::orderBy('id', 'desc')->get();

        return view('backend.disposal.index', compact('disposals'));
    }
    
    public function create(Request $request)
    { 
        return view('backend.disposal.create');
    }

    public function edit($id)
    {
        $disposal = WasteDisposalDetails::findOrFail($id);
        return view('backend.disposal.edit', compact('disposal'));
    }

}