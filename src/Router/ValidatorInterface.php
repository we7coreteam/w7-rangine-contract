<?php

namespace W7\Contract\Router;

interface ValidatorInterface {
	public function match($httpMethod, $route, $handler) : bool ;
}