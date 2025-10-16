<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleRecaptcha implements PresetInterface
{
	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();
		
		$csp->addSource('script', 'www.google.com/recaptcha/');
		$csp->addSource('script', 'www.gstatic.com/recaptcha/');

		$csp->addSource('frame', 'www.google.com/recaptcha/');
		$csp->addSource('frame', 'recaptcha.google.com/recaptcha/');
	}
}