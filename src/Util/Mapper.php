<?php
namespace DesolatorMagno\AuthorizePhp\Util;

use DesolatorMagno\AuthorizePhp\Util\MapperObj;

class Mapper
{
    private $classes = [];
    // private $dir = __DIR__ . "/../../yml/v1/";

    // private function __construct() {
    // 	$files = scandir($this->dir);
    // 	foreach ($files as $file) {
    // 		// echo "filename:" . $file . "\n";
    // 		// Elementing the ..
    // 		if($file != "." && $file != ".." ){
    // 			$value = Yaml::parseFile($this->dir.$file);
    // 			//var_dump($value);
    // 			//array_push($classes, $value);
    // 			//var_dump($classes);
    // 			//echo $value['DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType']['properties']['merchantAuthentication']['type']."\n";
    // 			$key = key($value);
    // 			$this->classes[$key] = $value[$key];
    // 			//break;
    // 		}
    // 	}
    // }
    private function __construct()
    {
        $this->classes = json_decode(file_get_contents(__DIR__ . "/classes.json"), true);
        //\Log::channel('authorize')->info($this->classes);
    }

    public static function Instance()
    {
        static $inst = null;
        if (is_null($inst)) {
            $inst = new self();
        }
        return $inst;
    }

    // public function getClass(string $classname, string $property){

    // 	if(isset($this->classes[$classname]['properties'][$property]['type'])){
    // 		return $this->classes[$classname]['properties'][$property]['type'];
    // 	}
    // 	else if ($property == "refId" || $property == "sessionToken" ){
    // 			return 'string';
    // 	}
    // 	else if ($property == "messages" ){
    // 			return 'DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType';
    // 	}
    // 	else{
    // 		echo "Error finding in YAML - ".$classname." ".$property."\n";
    // 		return 'string';
    // 	}
    // 	// return $this->classes[$classname]['properties'][$property]['type'];
    // }

    public function getClass($class, $property)
    {
        // make the first letter of property as lowercase as all properties are lowercase
        $property = lcfirst($property);

        //echo "getClass calling : class - " . $class . " property - " . $property . "\n";
        $obj = new MapperObj;

        if (isset($this->classes[$class]['properties'][$property]['type'])) {
            $className = $this->classes[$class]['properties'][$property]['type'];
            if (stripos($className, "DateTime<'Y-m-d'>") !== false) {
                $className = 'Date';
            } else if (stripos($className, "DateTime") !== false) {
                $className = 'DateTime';
            }
            if (str_starts_with($className, 'array')) {
                $className = ltrim($className, 'array<');
                $className = rtrim($className, '>');
                $obj->isArray = true;

                if (isset($this->classes[$class]['properties'][$property]['xml_list']['entry_name'])) {
                    // echo $file."\t\t\t\t\t\t\t\t\t";
                    // echo $propKey." :: ".$prop['serialized_name']." - ".$prop['xml_list']['entry_name']." - ".$prop['xml_list']['inline'];
                    // echo "\n";
                    $obj->isInlineArray = $this->classes[$class]['properties'][$property]['xml_list']['inline'];
                    $obj->arrayEntryName = $this->classes[$class]['properties'][$property]['xml_list']['entry_name'];
                }
            }
            $obj->className = $className;
            $obj->isCustomDefined = stripos($className, '\\') !== false;

            return $obj;
        } else if (get_parent_class($class)) {
            //echo "Checking parent class in YAML - ".get_parent_class($class)." -".$class." - ".$property."\n";
            return $this->getClass(get_parent_class($class), $property);
        }
//		 else if ($property == "refId" || $property == "sessionToken" ){
//		 		return 'string';
//		 }
//		 else if ($property == "messages" ){
//
//		 		$className = 'DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType';
//             $obj->className = $className;
//            $obj->isCustomDefined = stripos($className, '\\') !== false;
//
//			return $obj;
//		 }
        else {
            //echo "Error finding in YAML - ".$class." - ".$property."\n";
            $obj = NULL;
            return $obj;
        }
        // return $this->classes[$classname]['properties'][$property]['type'];
    }

    public function getXmlName($class)
    {
        if (isset($this->classes[$class]['xml_root_name'])) {
            return $this->classes[$class]['xml_root_name'];
        }
        return null;
    }
}

//echo $classes['DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType']['properties']['merchantAuthentication']['type']."\n";

//$value = Yaml::parseFile('/*.yaml');
