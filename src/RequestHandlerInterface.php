<?php declare(strict_types=1);

namespace Psr\Http\Middleware;

use Psr\Http\Message\{ServerRequestInterface, ResponseInterface};

interface RequestHandlerInterface{

  public function handle(ServerRequestInterface $request): ResponseInterface;

}