<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class OneTrust implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();

    	$csp->addSource('script', 'cdn.cookielaw.org');
    	$csp->addSource('style', 'cdn.cookielaw.org');
    	$csp->addSource('image', 'cdn.cookielaw.org');
    	$csp->addSource('connect', 'cdn.cookielaw.org');

    	$csp->addSource('connect', 'geolocation.onetrust.com');
    	$csp->addSource('connect', 'privacyportal.onetrust.com');

    	$csp->setAllowUnsafeInline('style-src', true);
	}
}