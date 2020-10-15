<?php

namespace Helium\LaravelHelpers\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HandlesMedia
{
    public function setMediaUrlAttribute($value)
    {
        if (!is_null($value)) {
            $path = method_exists($this, 'getMediaStoragePath')
                ? $this->getMediaStoragePath()
                : "{$this->getTable()}/{$this->getKey()}/media";

            $url = Storage::putFile($path, $value);
        } else {
            $url = null;
        }

        $this->attributes['media_url'] = $url;
    }

    public function getMediaUrlAttribute($value)
    {
        if ($savedUrl = $this->attributes['media_url']) {
            try {
                return Storage::temporaryUrl($savedUrl, Carbon::now()->addMinute());
            } catch (\RuntimeException $e) {
                return Storage::url($savedUrl);
            }
        }

        return null;
    }

    public function getMediaStoragePathAttribute()
    {
        return $this->attributes['media_url'];
    }
}
