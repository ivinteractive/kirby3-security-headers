<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class OneTrust implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{
		$csp = $headers->csp();

    	$headers->addPresetSource('script', 'cdn.cookielaw.org');
    	$headers->addPresetSource('style', 'cdn.cookielaw.org');
    	$headers->addPresetSource('image', 'cdn.cookielaw.org');
    	$headers->addPresetSource('connect', 'cdn.cookielaw.org');

    	$headers->addPresetSource('connect', 'geolocation.onetrust.com');
    	$headers->addPresetSource('connect', 'privacyportal.onetrust.com');

    	$csp->setAllowUnsafeInline('style-src', true);
	}
}