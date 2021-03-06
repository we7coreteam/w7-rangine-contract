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

namespace W7\Contract\Support;

/**
 * Interface Arrayable
 * @package W7\Contract
 */
interface Arrayable {
	/**
	 * @return array
	 */
	public function toArray(): array;
}
