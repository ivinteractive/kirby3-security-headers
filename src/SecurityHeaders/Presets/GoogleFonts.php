<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleFonts implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{		
    	$headers->addPresetSource('style', 'fonts.googleapis.com');
    	$headers->addPresetSource('font', 'fonts.gstatic.com');
	}
}