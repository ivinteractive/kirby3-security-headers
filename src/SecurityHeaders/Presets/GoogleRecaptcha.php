<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleRecaptcha implements PresetInterface
{
	public function apply(SecurityHeaders &$headers): void
	{		
		$headers->addPresetSource('script', 'www.google.com/recaptcha/');
		$headers->addPresetSource('script', 'www.gstatic.com/recaptcha/');

		$headers->addPresetSource('frame', 'www.google.com/recaptcha/');
		$headers->addPresetSource('frame', 'recaptcha.google.com/recaptcha/');
	}
}