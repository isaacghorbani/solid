<?php
namespace App\Services\Srp;

class JsonFormater implements FormatableInterface
{
    public function format($data)
    {
        return json_encode($data);
    }
}