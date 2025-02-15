<?php

namespace App\Http\Controllers;

use App\Jobs\GeneratePdfJob;
use Illuminate\Http\Request;

class generatePdf extends Controller
{
    public function GeneratePdf()
    {
        GeneratePdfJob::dispatch();
        return response()->json(['message' => 'PDF generation started in background']);
    }
}
