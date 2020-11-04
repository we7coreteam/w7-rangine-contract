<?php

namespace W7\Contract\Dispatcher;

interface DispatcherInterface {
	/**
	 * 派发服务
	 * @param mixed ...$params
	 */
	public function dispatch(...$params);
}