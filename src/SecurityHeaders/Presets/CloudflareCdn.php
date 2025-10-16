<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class CloudflareCdn implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();
		
    	$csp->addSource('script', 'https://cdnjs.cloudflare.com');
	}
}