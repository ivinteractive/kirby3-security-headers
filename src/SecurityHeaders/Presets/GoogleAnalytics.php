<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleAnalytics implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{
		foreach (['connect', 'image', 'script'] as $type) {
			$headers->addPresetSource($type, '*.google-analytics.com');
			$headers->addPresetSource($type, '*.analytics.google.com');
			$headers->addPresetSource($type, '*.g.doubleclick.net');
			$headers->addPresetSource($type, '*.google.com');
			$headers->addPresetSource($type, 'pagead2.googlesyndication.com');
		}

		$headers->addPresetSource('frame', 'td.doubleclick.net');
	}
}