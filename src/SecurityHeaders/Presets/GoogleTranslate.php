<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleTranslate implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{		
    	$headers->addPresetSource('script', 'translate.google.com');
	}
}