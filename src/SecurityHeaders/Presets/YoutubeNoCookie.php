<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class YoutubeNoCookie implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();
		
    	$csp->addSource('frame', 'www.youtube-nocookie.com');
	}
}