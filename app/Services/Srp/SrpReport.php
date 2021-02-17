<?php 
namespace App\Services\Srp;

/**
 * this class violent single responsibity principle
 */
class SrpReport
{
    /**
     * get title
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Report Title';
    }
    /**
     * get date
     *
     * @return string
     */
    public function getDate()
    {
        return '2016-04-21';
    }
    /**
     * getContents
     *
     * @return array
     */
    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
    /**
     * format report
     *
     * @return json
     */
    public function formatJson()
    {
        return json_encode($this->getContents());
    }

}