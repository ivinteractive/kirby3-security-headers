<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleFonts implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();
		
    	$csp->addSource('style', 'fonts.googleapis.com');
    	$csp->addSource('font', 'fonts.gstatic.com');
	}
}