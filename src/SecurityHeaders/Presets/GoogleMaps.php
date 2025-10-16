<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

class GoogleMaps implements PresetInterface
{
	private array $scripts = [
        'https://*.googleapis.com',
        'https://*.gstatic.com',
        '*.google.com',
        'https://*.ggpht.com',
        '*.googleusercontent.com',
        'blob:',
	];

	private array $images = [
        'https://*.googleapis.com',
        'https://*.gstatic.com',
        '*.google.com',
        '*.googleusercontent.com',
        'data:',
	];

	private array $connects = [
        'https://*.googleapis.com',
        '*.google.com',
        'https://*.gstatic.com',
        'data:',
        'blob:',
	];

	public function apply(SecurityHeaders $headers): void
	{
		$csp = $headers->csp();

		foreach ($this->scripts as $script) {
			$csp->addSource('script', $script);
		}

		foreach ($this->images as $image) {
			$csp->addSource('image', $image);
		}

		foreach ($this->connects as $connect) {
			$csp->addSource('connect', $connect);
		}

		$csp->addSource('frame', '*.google.com');

		$csp->addSource('font', 'https://fonts.gstatic.com');
		$csp->addSource('style', 'https://fonts.googleapis.com');
		$csp->addSource('worker', 'blob:');
	}
}