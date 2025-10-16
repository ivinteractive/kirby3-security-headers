<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleTagManager implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{		
		foreach (['connect', 'image', 'frame', 'script'] as $type) {
			$headers->addPresetSource($type, '*.googletagmanager.com');
			$headers->addPresetSource($type, '*.googleadservices.com');
		}
	}
}