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

namespace W7\Contract\Redis;

use Illuminate\Contracts\Redis\Factory;

interface RedisFactoryInterface extends Factory {
	public function channel($name = 'default') : \Illuminate\Redis\Connections\Connection;
}
