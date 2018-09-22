<?php

namespace ImpactBundle;

use ImpactBundle\DependencyInjection\ForumExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ImpactBundle extends Bundle
{
	public function getContainerExtension()
		{
        	return new ForumExtension();
      	}
}

