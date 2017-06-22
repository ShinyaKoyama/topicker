<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    // actionのみの記述
    public function index() {
        // 公開された記事＋予約投稿になっていて公開時間になった記事を表示する。
        $conditions = array (
            'OR' => array (
                array ('post_status' => 'publish'),
                array ('post_status' => 'future'),
            ),
            'post_date <='  => date("Y-m-d H:i:s"),
            'post_type'   => 'post'
        );

        $this->paginate = array(
            'conditions' => $conditions,
            'order'      => 'post_modified DESC',
            'limit'      => 5,
        );

        $this->set('posts', $this->Paginator->paginate());
    }    
}