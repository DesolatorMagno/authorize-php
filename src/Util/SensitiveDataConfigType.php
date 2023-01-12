<?php
namespace DesolatorMagno\AuthorizePhp\Util;



class SensitiveDataConfigType
{
	/**
     * @Type("array<net\authorize\util\SensitiveTag>")
	 * @SerializedName("sensitiveTags")
     */
	public $sensitiveTags;

	/**
     * @Type("array<string>")
	 * @SerializedName("sensitiveStringRegexes")
     */
	public $sensitiveStringRegexes;
}
?>
