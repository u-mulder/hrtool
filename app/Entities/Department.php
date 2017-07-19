<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    /**
     * Get structure of departments
     */
    public function getTreeStructure($only_active = false)  // TODO - proper sorting
    {
        return $this->newQuery()
            ->select('id', 'name')
            ->orderBy('name', 'asc')
            ->get();
    }


    public function saveDept($params)   // TODO
    {
        //dd($params);
        $this->name = $params['name'];
        $this->active = $params['active'];


        $this->save();

        die('Dead in ' . __FILE__ . ' on line '. __LINE__ . PHP_EOL);    // TODO


    }
}
