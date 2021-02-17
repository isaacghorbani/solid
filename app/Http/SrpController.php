<?php
namespace App\Http;

use App\Services\Srp\JsonFormater;
use App\Services\Srp\SrpReport;
use App\Services\Srp\SrpReportRefactored;

class SrpController
{
    protected $srpReportService;
    protected $srpVReportService;
    protected $formatter;

    public function __construct()
    {
     $this->srpReportService=new SrpReportRefactored();   
     $this->srpVReportService=new SrpReport();  
     $this->formatter=new JsonFormater();
    }
    public function singleResponsebility()
    {
        echo $this->formatter->format($this->srpReportService->getContents());
    }

    public function singleResponsebilityViolet()
    {
        echo $this->srpVReportService->formatJson();
    }


}