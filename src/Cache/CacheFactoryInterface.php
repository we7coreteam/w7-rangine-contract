<?php

namespace W7\Contract\Cache;

use Psr\SimpleCache\CacheInterface;

interface CacheFactoryInterface {
	public function channel($name = 'default') : CacheInterface;
}
