<?php

namespace NickRupert\LaravelHelpers\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HandlesPhoto
{
    public function setPhotoUrlAttribute($value)
    {
        if (!is_null($value)) {
            $path = method_exists($this, 'getPhotoStoragePath')
                ? $this->getPhotoStoragePath()
                : "{$this->getTable()}/{$this->getKey()}/photos";

            $url = Storage::putFile($path, $value);
        } else {
            $url = null;
        }

        $this->attributes['photo_url'] = $url;
    }

    public function getPhotoUrlAttribute($value)
    {
        if ($savedUrl = $this->attributes['photo_url']) {
            try {
                return Storage::temporaryUrl($savedUrl, Carbon::now()->addMinute());
            } catch (\RuntimeException $e) {
                return Storage::url($savedUrl);
            }
        } elseif (method_exists(get_parent_class($this), 'getPhotoUrlAttribute')) {
            return parent::getPhotoUrlAttribute($value);
        } else {
            return empty($value) ? 'https://www.gravatar.com/avatar/'.md5(Str::lower($this->email)).'.jpg?s=200&d=mm' : url($value);
        }
    }

    public function getPhotoStoragePathAttribute()
    {
        return $this->attributes['photo_url'];
    }
}