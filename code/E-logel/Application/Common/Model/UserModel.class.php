<?php
namespace Common\Model;

use Think\Model\RelationModel;

class UserModel extends RelationModel {
    protected $_link = array(
        'Groups' =>  array(
            'mapping_type'  =>  self::BELONGS_TO,
            'class_name' =>  'Groups',
            'foreign_key'   =>  'group_id',
            'as_fields' =>  'default_url:jumpUrl,name:group_name',
        )
    );
}