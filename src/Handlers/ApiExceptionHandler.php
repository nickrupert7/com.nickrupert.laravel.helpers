<?php

namespace NickRupert\LaravelHelpers\Handlers;

use NickRupert\LaravelHelpers\Exceptions\ApiException;
use NickRupert\LaravelHelpers\Exceptions\InternalServerException;
use NickRupert\LaravelHelpers\Resources\ApiErrorResource;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Http\Response;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use NickRupert\LaravelHelpers\Exceptions\ValidationException as NickRupertValidationException;
use Throwable;

class ApiExceptionHandler extends Handler
{
	public function render($request, Throwable $e)
	{
	    if ($e instanceof ValidationException) {
	        $e = new NickRupertValidationException($e);
        }

	    if ($e instanceof HttpException) {
	        $statusCode = $e->getStatusCode();
        }
		elseif ($e instanceof AuthenticationException ||
			$e instanceof AuthorizationException ||
			$e instanceof UnauthorizedException)
		{
			$statusCode = Response::HTTP_UNAUTHORIZED;
		}
		elseif ($e instanceof ModelNotFoundException)
		{
			$statusCode = Response::HTTP_NOT_FOUND;
		}
		elseif ($e instanceof ApiException)
		{
			$statusCode = $e->httpStatusCode;
		}
		else
		{
			$statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
		}

		if (config('app.debug') ||
			$e instanceof ApiException ||
			$e instanceof UnauthorizedException ||
			$e instanceof AuthorizationException ||
			$e instanceof AuthenticationException ||
			$e instanceof ModelNotFoundException)
		{
			return (new ApiErrorResource($e))
				->response()
				->setStatusCode($statusCode);
		}
		else
		{
			return (new ApiErrorResource(new InternalServerException($e)))
				->response()
				->setStatusCode($statusCode);
		}
	}
}