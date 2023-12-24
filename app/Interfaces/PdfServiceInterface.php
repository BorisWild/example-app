<?php
namespace App\Interfaces;
use Illuminate\Database\Eloquent\Model;

interface PdfServiceInterface
{
    public static function download(Model $model): \Illuminate\Http\Response;
    public static function stream(Model $model): \Illuminate\Http\Response;
}
