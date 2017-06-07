<?php
namespace Common\Model;


use Think\Model\RelationModel;

class NewsModel extends RelationModel {
    protected $_link = array(
        'Comment'   =>  array(
            'mapping_type'  =>  self::HAS_MANY,
            'class_name'    =>  'Comment',
            'foreign_key'   =>  'news_id',
        )
    );
}