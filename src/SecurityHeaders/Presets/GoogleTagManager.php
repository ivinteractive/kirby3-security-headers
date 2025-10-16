<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleTagManager implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();
		
		foreach (['connect', 'image', 'frame', 'script' as $type]) {
			$csp->addSource($type, '*.googletagmanager.com');
			$csp->addSource($type, '*.googleadservices.com');
		}
	}
}