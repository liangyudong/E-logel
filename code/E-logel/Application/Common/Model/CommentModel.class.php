<?php
namespace Common\Model;


use Think\Model\RelationModel;

class CommentModel extends RelationModel {
    protected $_link = array(
        'User'  =>  array(
            'mapping_type'  =>  self::HAS_ONE,
            'class_name'    =>  'User',
            'foreign_key'   =>  'user_id',
            'as_fields' =>  'name:user_name',
        )
    );
}