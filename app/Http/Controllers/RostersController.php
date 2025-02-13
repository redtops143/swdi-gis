<?php

namespace App\Http\Controllers;

use App\Models\Rosters;
use Illuminate\Http\Request;
use TCPDF;

class RostersController extends Controller
{
    public function generatePDF()
    {
        // Fetch roster data from the database
        $rosters = Rosters::all(); 

        // Create new PDF instance
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Laravel App');
        $pdf->SetTitle('Roster List');
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->AddPage();

        // Title
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0, 10, 'Roster List', 0, 1, 'C');
        $pdf->Ln(5);

        // Table Headers
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->Cell(30, 10, 'ID', 1);
        $pdf->Cell(50, 10, 'Name', 1);
        $pdf->Cell(40, 10, 'Position', 1);
        $pdf->Cell(50, 10, 'Shift', 1);
        $pdf->Ln();

        // Table Data
        $pdf->SetFont('helvetica', '', 10);
        foreach ($rosters as $roster) {
            $pdf->Cell(30, 10, $roster->id, 1);
            $pdf->Cell(50, 10, $roster->name, 1);
            $pdf->Cell(40, 10, $roster->position, 1);
            $pdf->Cell(50, 10, $roster->shift, 1);
            $pdf->Ln();
        }

        // Output the PDF file
        return response()->streamDownload(function () use ($pdf) {
            $pdf->Output('roster_list.pdf', 'I'); // 'I' for inline view, 'D' for download
        }, 'roster_list.pdf');
    }
}
