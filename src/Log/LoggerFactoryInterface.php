<?php

namespace W7\Contract\Logger;

use Psr\Log\LoggerInterface;

interface LoggerFactoryInterface {
	public function channel($name = 'stack') : LoggerInterface;
}