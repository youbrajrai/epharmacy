<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception))
        {
            switch ($exception->getStatusCode()) 
                {
                // not found
                case '404':
                return redirect()->route('notfound');
                break;
    
                // internal error
                case '500':
                return redirect()->route('notfound');
                break;
    
                default:
                    return $this->renderHttpException($exception);
                break;
            }
        }
        else
        {
                return parent::render($request, $exception);
        }
    }
}
