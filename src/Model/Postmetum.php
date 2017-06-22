<?php
App::uses('AppModel', 'Model');
class Postmetum extends AppModel {
    // WordPressのDB設定を使う。
    public $useDbConfig = 'wordpress';
    public $primaryKey = 'meta_id';
    
    // belongsTo associations
    public $belongsTo = array(
        'Post' => array(
            'className'     => 'Post',
            'foreignKey'    => 'post_id',
        )
    );
}