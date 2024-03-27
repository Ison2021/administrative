<?php
class sreport extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
protected function settings(){
    return array(
        "dataSources"=>array(
            "administrative-management-system"=>array(
            "connectionString"=>"mysql:host=localhost;dbname=administrative-management-system",
            "username"=>"root",
            "password"=>"",
            "charset"=>"utf8"
            )
        )
    );
}

protected function setup()
{
    $this->src("administrative-management-system")
    ->query("
    SELECT * FROM compliance_regulatory
    ")
    ->pipe($this->dataStore("result"));
}
}
