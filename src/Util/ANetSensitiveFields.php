<?php
namespace DesolatorMagno\AuthorizePhp\Util;

use Exception;

define('ANET_SENSITIVE_XMLTAGS_JSON_FILE', 'AuthorizedNetSensitiveTagsConfig.json');
define('ANET_SENSITIVE_DATE_CONFIG_CLASS', \DesolatorMagno\AuthorizePhp\Util\SensitiveDataConfigType::class);

class ANetSensitiveFields
{
    private static $applySensitiveTags = NULL;
    private static $sensitiveStringRegexes = NULL;

    private static function fetchFromConfigFiles(): void
    {
        if(!class_exists(ANET_SENSITIVE_DATE_CONFIG_CLASS))
            exit('Class (' .ANET_SENSITIVE_DATE_CONFIG_CLASS.") doesn't exist; can't deserialize json; can't log. Exiting.");


        $userConfigFilePath = ANET_SENSITIVE_XMLTAGS_JSON_FILE;
        $presentUserConfigFile = file_exists($userConfigFilePath);

        $configFilePath = dirname(__FILE__) . '/' . ANET_SENSITIVE_XMLTAGS_JSON_FILE;
        $useDefaultConfigFile = !$presentUserConfigFile;
        $sensitiveTags = [];

        if ($presentUserConfigFile) { //client config for tags
            //read list of tags (and associated regex-patterns and replacements) from .json file
            try{
                $jsonFileData=file_get_contents($userConfigFilePath);
                $sensitiveDataConfig = json_decode($jsonFileData);

                $sensitiveTags = $sensitiveDataConfig->sensitiveTags;
                self::$sensitiveStringRegexes = $sensitiveDataConfig->sensitiveStringRegexes;
            }

            catch(Exception $e){
                $useDefaultConfigFile = true;
                exit ('ERROR deserializing json from : ' . $userConfigFilePath  . '; Exception : ' . $e->getMessage());
            }
        }

        if ($useDefaultConfigFile) { //default sdk config for tags
            if(!file_exists($configFilePath)){
                exit('ERROR: No config file: ' . $configFilePath);
            }

            //read list of tags (and associated regex-patterns and replacements) from .json file
            try{
            $jsonFileData=file_get_contents($configFilePath);
            $sensitiveDataConfig = json_decode($jsonFileData);

            $sensitiveTags = $sensitiveDataConfig->sensitiveTags;
            self::$sensitiveStringRegexes = $sensitiveDataConfig->sensitiveStringRegexes;
            }

            catch(Exception $e){
                exit( 'ERROR deserializing json from : ' . $configFilePath  . '; Exception : ' . $e->getMessage());
            }
        }

        //Check for disableMask flag in case of client json.
        self::$applySensitiveTags = [];
        foreach($sensitiveTags as $sensitiveTag){
            if (!$sensitiveTag->disableMask){
                self::$applySensitiveTags[] = $sensitiveTag;
            }
        }
    }

    public static function getSensitiveStringRegexes(){
        if(self::$sensitiveStringRegexes == NULL) {
            self::fetchFromConfigFiles();
        }
        return self::$sensitiveStringRegexes;
    }

    public static function getSensitiveXmlTags(){
        if(self::$applySensitiveTags == NULL) {
            self::fetchFromConfigFiles();
        }
        return self::$applySensitiveTags;
    }
}
