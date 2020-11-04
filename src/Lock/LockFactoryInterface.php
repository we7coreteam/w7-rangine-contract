<?php

namespace W7\Contract\Lock;

interface LockFactoryInterface {
	public function getLock($name, $seconds, $owner = null) : LockInterface;

}