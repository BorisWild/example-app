<?php
namespace App\Services;

use App\Interfaces\PdfServiceInterface;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PdfService implements PdfServiceInterface
{
    public static function download(Model $model): \Illuminate\Http\Response
    {
        //Log::info($model->text);
        return Pdf::loadHTML($model->text)
            ->download(Str::slug($model->title).'.pdf');
    }

    public static function stream(Model $model): \Illuminate\Http\Response
    {
        //Log::info($model->text);
        return Pdf::loadHTML($model->text)
            ->stream();
    }
}
