<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 3/8/2016
 * Time: 4:20 PM
 */
class Throttle_model extends MY_Model
{
    public $table = 'throttles'; // Set the name of the table for this model.
    public $primary_key = 'id'; // Set the primary key
    public $fillable = []; // You can set an array with the fields that can be filled by insert/update
    public $protected = ['id']; // ...Or you can set an array with the fields that cannot be filled by insert/update


    public function __construct()
    {
        /* has_one or has_many
        $this->has_one['phone'] = [
        'foreign_model'=>'Phone_model',
        'foreign_table'=>'phones',
        'foreign_key'=>'user_id',
        'local_key'=>'id'
        ];
        */
        parent::__construct();
    }
}
