<?php

namespace W7\Contract\Pool;

interface PoolFactoryInterface {
	/**
	 * 获取已经创建好的池
	 * @param $name
	 * @return PoolInterface
	 */
	public function getCreatedPool($name) : PoolInterface;

	/**
	 * @param $name
	 * @return PoolInterface
	 */
	public function getPool($name) : PoolInterface;
}