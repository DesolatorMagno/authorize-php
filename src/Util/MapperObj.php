<?php
namespace DesolatorMagno\AuthorizePhp\Util;

class MapperObj{

	public bool $isCustomDefined = false;
	public ?string $className = null;
	public bool $isArray = false;
	public bool $isInlineArray = false;
	public ?string $arrayEntryName = null;
}
//echo $classes['net\authorize\api\contract\v1\ANetApiRequestType']['properties']['merchantAuthentication']['type']."\n";

//$value = Yaml::parseFile('/*.yaml');
