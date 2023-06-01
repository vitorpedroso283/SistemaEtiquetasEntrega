<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            return $this->handleValidationException($exception);
        }

        if ($exception instanceof ModelNotFoundException) {
            return $this->handleModelNotFoundException($exception);
        }

        if ($exception instanceof NotFoundHttpException) {
            return $this->handleNotFoundHttpException($exception);
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            return $this->handleMethodNotAllowedHttpException($exception);
        }

        return parent::render($request, $exception);
    }

    /**
     * Trata a exceção de validação e retorna uma resposta JSON com os erros de validação.
     */
    protected function handleValidationException(ValidationException $exception)
    {
        return response()->json(['errors' => $exception->errors()], 422);
    }

    /**
     * Trata a exceção de modelo não encontrado e retorna uma resposta JSON com uma mensagem de erro apropriada.
     */
    protected function handleModelNotFoundException(ModelNotFoundException $exception)
    {
        return response()->json(['error' => 'Registro não encontrado'], 404);
    }

    /**
     * Trata a exceção de recurso não encontrado e retorna uma resposta JSON com uma mensagem de erro apropriada.
     */
    protected function handleNotFoundHttpException(NotFoundHttpException $exception)
    {
        return response()->json(['error' => 'Recurso não encontrado'], 404);
    }

    /**
     * Trata a exceção de método não permitido e retorna uma resposta JSON com uma mensagem de erro apropriada.
     */
    protected function handleMethodNotAllowedHttpException(MethodNotAllowedHttpException $exception)
    {
        return response()->json(['error' => 'Método não permitido'], 405);
    }
}
