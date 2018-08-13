<?php

namespace Bo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
