<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //verifica se o usuario tem acesso a rota
        if(false) {
            return $next($request);
        }else{            
            return Response('Acesso Negado! Rota exige autenticação!!!');
        }
    }
}
