<?php
namespace App\Models;


use App\Models\Contracts\MysqlBaseModel;

class Contact extends MysqlBaseModel{
    protected $table = 'contacts';
    protected $pageSize = 20;


    public function getPageSize()
    {
        return $this->pageSize;
    }

}