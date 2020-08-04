<?php

namespace App\Http\Livewire;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class Checkout extends Component
{
    public $date;
    public function PdfGenerate()
    {
        $pdf = App::make('dompdf.wrapper');
        // $pdf = PDF ::loadView
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        return redirect()->to('/contact-form-success');
    }
    public function render()
    {
        $this->date =date('d-m-Y');
        return view('livewire.checkout');
    }
}
