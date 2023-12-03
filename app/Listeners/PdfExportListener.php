<?php

namespace App\Listeners;

use App\Services\PdfService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class PdfExportListener
{
    private PdfService $pdfService;

    /**
     * Create the event listener.
     */
    public function __construct(PdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Log::info($event->model->text);
        $this->pdfService->view($event->model);
    }
}
