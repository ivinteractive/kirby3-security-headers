<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleAnalytics implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();

		foreach (['connect', 'image', 'script'] as $type) {
			$csp->addSource($type, '*.google-analytics.com');
			$csp->addSource($type, '*.analytics.google.com');
			$csp->addSource($type, '*.g.doubleclick.net');
			$csp->addSource($type, '*.google.com');
			$csp->addSource($type, 'pagead2.googlesyndication.com');
		}

		$csp->addSource('frame', 'td.doubleclick.net');
	}
}