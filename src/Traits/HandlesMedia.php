<?php

namespace Helium\LaravelHelpers\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HandlesMedia
{
    public function setMediaUrlAttribute($value)
    {
        $path = method_exists($this, 'getMediaStoragePath')
            ? $this->getMediaStoragePath()
            : "{$this->getTable()}/{$this->getKey()}/media";

        $url = Storage::putFile($path, $value);

        $this->attributes['media_url'] = $url;
    }

    public function getMediaUrlAttribute($value)
    {
        if ($savedUrl = $this->attributes['media_url']) {
            return Storage::temporaryUrl($savedUrl, Carbon::now()->addMinute());
        }

        return null;
    }
}