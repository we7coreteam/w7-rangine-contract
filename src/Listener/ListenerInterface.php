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

namespace W7\Contract\Listener;

interface ListenerInterface {
	/**
	 * 这里定义接口不能包含参数列表，子类中需要通过
	 */
	public function run(...$params);
}
