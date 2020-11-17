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

namespace W7\Contract\Server;

interface ServerInterface {
	/**
	 * 服务启动
	 */
	public function start();

	/**
	 * 获取服务对象
	 * @return mixed
	 */
	public function getServer();

	/**
	 * 服务类型
	 * @return mixed
	 */
	public function getType();
}
