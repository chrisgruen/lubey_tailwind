<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class NewsDocument extends Model {
    //
    protected $fillable = ['extension', 'name', 'filename'];


    public static function boot() {
        parent::boot();

        static::deleting(function (NewsDocument $newsDocument) { // before delete() method call this
            Log::info('Deleteing:' . $newsDocument->filename);
            NewsDocument::deleteFiles($newsDocument);
        });
    }

    static function processSingleImage($image, $name) {
        $orig_extension = $image->getClientOriginalExtension();
        $filename = str_slug($name) . "." . $orig_extension;
        $path = public_path('news_documents/' . $filename);
        if (file_exists($path))
            unlink($path);
        copy($image->getRealPath(), $path);
        $file = new NewsDocument([
            'extension' => $orig_extension,
            'filename' => $filename,
            'name' => $image->getClientOriginalName()
        ]);
        $file->save();

        return $file;
    }

    static function deleteFiles($image) {
        $oldOrig = public_path('news_documents/' . $image->filename);
        if (file_exists($oldOrig)) {
            unlink($oldOrig);
        }

    }
}

