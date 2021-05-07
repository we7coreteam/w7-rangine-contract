<?php

/**
 * Rangine Contract
 *
 * (c) We7Team 2019 <https://www.rangine.com>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com for more details
 */

namespace W7\Contract\Router;

use Psr\Http\Message\RequestInterface;

interface RouteInterface {
	public function getName();
	public function getModule();
	public function getUri();
	public function getController();
	public function getAction();
	public function getArgs();
	public function getDefaults();
	public function getMiddleware() : array;
	public function run(RequestInterface $request);
}
