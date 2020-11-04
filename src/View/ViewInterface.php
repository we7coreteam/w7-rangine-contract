<?php

namespace W7\Contract\View;

interface ViewInterface {
	public function registerFunction($name, \Closure $callback);
	public function registerConst($name, $value);
	public function registerObject($name, $object);

	public function render($name, $context = []) : string;
}
