<?php

namespace DesolatorMagno\AuthorizePhp\api\contract\v1;

/**
 * Class representing GetBatchStatisticsResponse
 */
class GetBatchStatisticsResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\api\contract\v1\BatchDetailsType $batch
     */
    private $batch = null;

    /**
     * Gets as batch
     *
     * @return \DesolatorMagno\AuthorizePhp\api\contract\v1\BatchDetailsType
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Sets a new batch
     *
     * @param \DesolatorMagno\AuthorizePhp\api\contract\v1\BatchDetailsType $batch
     * @return self
     */
    public function setBatch(\DesolatorMagno\AuthorizePhp\api\contract\v1\BatchDetailsType $batch)
    {
        $this->batch = $batch;
        return $this;
    }


    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = \DesolatorMagno\AuthorizePhp\util\Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class() , $key);

				if($classDetails !== NULL ) {
					if ($classDetails->isArray) {
						if ($classDetails->isCustomDefined) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new $classDetails->className;
								$type->set($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new \DateTime($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else {
							foreach($value AS $keyChild => $valueChild) {
								$this->{'addTo' . $key}($valueChild);
							}
						}
					}
					else {
						if ($classDetails->isCustomDefined){
							$type = new $classDetails->className;
							$type->set($value);
							$this->{'set' . $key}($type);
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							$type = new \DateTime($value);
							$this->{'set' . $key}($type);
						}
						else {
							$this->{'set' . $key}($value);
						}
					}
				}
			}
		}
    }

}