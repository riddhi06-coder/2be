<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

use Carbon\Carbon;
use App\Models\User;
use App\Models\DisposalDetails;
use App\Models\WasteDisposalDetails;


class DisposalController extends Controller
{

    public function index(Request $request)
    {
        $disposals = WasteDisposalDetails::orderBy('id', 'desc')->get();


        $query = WasteDisposalDetails::query();

        if ($request->filled('year')) {
            $query->whereYear('date_of_pickup', $request->year);
        }

        $disposals = $query->orderBy('date_of_pickup', 'desc')->get();

        // Years list for dropdown
        $years = WasteDisposalDetails::selectRaw('YEAR(date_of_pickup) as year')
                    ->distinct()
                    ->orderBy('year', 'desc')
                    ->pluck('year');


        return view('backend.disposal.index', compact('disposals','years'));
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

    public function export(Request $request)
    {
        $year = $request->year;

        $query = WasteDisposalDetails::query();

        if ($year) {
            $query->whereYear('date_of_pickup', $year);
        }

        $disposals = $query->orderBy('date_of_pickup', 'desc')->get();

        $fileName = 'disposal_details_' . ($year ?? 'all') . '.csv';

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $columns = [
            'IP Address',
            'Date of Pickup',
            'Generator Name',
            'Waste Type',
            'Address',
            'Volume Pumped',
            'Unit',
            'Zip',
            'Date of Discharge',
            'Discharge Site',
            'Transporter Name',
            'Vehicle License Number',
        ];

        return new StreamedResponse(function () use ($disposals, $columns) {

            $file = fopen('php://output', 'w');

            // CSV Header
            fputcsv($file, $columns);

            foreach ($disposals as $disposal) {
                fputcsv($file, [
                    $disposal->ip_address,
                    \Carbon\Carbon::parse($disposal->date_of_pickup)->format('d-m-Y'),
                    $disposal->generator_name,
                    $disposal->waste_type,
                    $disposal->address,
                    $disposal->volume_pumped,
                    $disposal->unit,
                    $disposal->zip,
                    $disposal->date_of_discharge,
                    $disposal->discharge_site,
                    $disposal->transporter_name,
                    $disposal->vehicle_license_number,
                ]);
            }

            fclose($file);
        }, 200, $headers);
    }

}