<?php

namespace NickRupert\LaravelHelpers\Generators;

use Carbon\Carbon;
use NickRupert\LaravelHelpers\Contracts\IdGenerator;
use Illuminate\Support\Str;

class TimestampIdGenerator extends IdGenerator
{
    protected $precision;

    public function __construct(int $precision = 0)
    {
        $this->precision = $precision;
    }

    /**
	 * @description Generate an incrementing group id
	 * @return string
	 */
	public function generate(): string
	{
	    $timestamp = Carbon::now()->getPreciseTimestamp($this->precision);

        return Str::of(sprintf("%.{$this->precision}f", $timestamp))
            ->rtrim('0')
            ->rtrim('.')
            ->__toString();
	}
}