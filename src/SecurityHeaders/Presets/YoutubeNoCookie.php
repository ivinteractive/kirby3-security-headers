<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class YoutubeNoCookie implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{		
    	$headers->addPresetSource('frame', 'www.youtube-nocookie.com');
	}
}