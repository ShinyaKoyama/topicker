<?php
App::uses('AppModel', 'Model');
class Term extends AppModel {
    // WordPressのDB設定を使う。
    public $useDbConfig = 'wordpress';
    public $primaryKey = 'term_id';
    public $displayField = 'name';
    
    // hashMany associations
    public $hashMany = array(
        'TermTaxonomy' => array(
            'className'     => 'TermTaxonomy',
            'foreignKey'    => 'term_id',
            'dependent'     => false,
        )
    );
}