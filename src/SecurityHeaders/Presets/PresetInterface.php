<?php

namespace Bnomei\SecurityHeaders\Presets;

use Bnomei\SecurityHeaders;

interface PresetInterface
{
	public function apply(SecurityHeaders &$headers): void; 
}