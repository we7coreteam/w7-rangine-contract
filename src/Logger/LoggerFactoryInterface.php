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

namespace W7\Contract\Logger;

use Psr\Log\LoggerInterface;

interface LoggerFactoryInterface {
	public function channel($name = 'stack') : LoggerInterface;
	public function registerLogger($channel, LoggerInterface $logger);
	public function createLogger($channel, array $config);
}
