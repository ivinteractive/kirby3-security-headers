<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleMaps implements PresetInterface
{
	private array $scripts = [
        '*.googleapis.com',
        '*.gstatic.com',
        '*.google.com',
        '*.ggpht.com',
        '*.googleusercontent.com',
	];

	private array $images = [
        '*.googleapis.com',
        '*.gstatic.com',
        '*.google.com',
        '*.googleusercontent.com',
	];

	private array $connects = [
        '*.googleapis.com',
        '*.google.com',
        '*.gstatic.com',
	];

	public function apply(SecurityHeaders &$headers): void
	{
		$csp = $headers->csp();

		$csp->setBlobAllowed('script-src', true);
		$csp->setBlobAllowed('connect-src', true);
		$csp->setBlobAllowed('worker-src', true);

		$csp->setDataAllowed('img-src', true);
		$csp->setDataAllowed('connect-src', true);

		foreach ($this->scripts as $script) {
			$headers->addPresetSource('script', $script);
		}

		foreach ($this->images as $image) {
			$headers->addPresetSource('image', $image);
		}

		foreach ($this->connects as $connect) {
			$headers->addPresetSource('connect', $connect);
		}

		$headers->addPresetSource('frame', '*.google.com');

		$headers->addPresetSource('font', 'https://fonts.gstatic.com');
		$headers->addPresetSource('style', 'https://fonts.googleapis.com');
	}
}