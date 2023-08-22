<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * An interval of time that is named or defined by its start and end dates.
 */
#[URI('http://purl.org/dc/terms/PeriodOfTime')]
class PeriodOfTime extends Resource
{
    /**********************************************************************************************
     * NO MANDATORY PROPERTIES
     *********************************************************************************************/

     /**********************************************************************************************
     * RECOMMENDED PROPERTIES
     *********************************************************************************************/
    /**
     * This property contains the start of the period.
     *
     * Please note that while both properties are recommended, one of the two must be present for each
     * instance of the class dct:PeriodOfTime, if such an instance is present.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://www.w3.org/ns/dcat#startDate')]
    public Literal $startDate;

    /**
     * This property contains the end of the period.
     *
     * Please note that while both properties are recommended, one of the two must be present for each
     * instance of the class dct:PeriodOfTime, if such an instance is present.
     * @var \PHP_DCAT_AP\DCAT\Literal
     */
    #[URI('http://www.w3.org/ns/dcat#endDate')]
    public Literal $endDate;

    /**********************************************************************************************
     * OPTIONAL PROPERTIES
     *********************************************************************************************/
    
    // NOT IMPLEMENTED: time:hasBeginning and time:hasEnd
}
