<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfGeneratorController extends Controller
{
    /**
     * Generate PDF for user
     */
    public function index($id)
    {
        $user = User::findOrFail($id);
        $pdf = PDF::loadView('resume', ['user' => $user]);
        
        return $pdf->stream('resume_'.$id.'.pdf');
    }
}