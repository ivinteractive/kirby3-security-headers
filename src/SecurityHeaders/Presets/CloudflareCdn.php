<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class CloudflareCdn implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{		
    	$headers->addPresetSource('script', 'cdnjs.cloudflare.com');
	}
}