<?php
App::uses('AppModel', 'Model');
class Post extends AppModel {
    // WordPressのDB設定を使う。
    public $useDbConfig = 'wordpress';
    public $primaryKey = 'ID';
    public $displayField = 'post_title';
    
    // hashMany associations
    public $hashMany = array(
        'Postmetum' => array(
            'className'     => 'Postmetum',
            'foreignKey'    => 'post_id',
            'dependent'     => false,
        ),
        'TermRelationship' => array(
            'className'     => 'TermRelationship',
            'foreignKey'    => 'object_id',
            'dependent'     => false,
        )
    );
}