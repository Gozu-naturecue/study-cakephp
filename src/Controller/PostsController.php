<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{

    public function index()
    {
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));
    }

    public function show($id)
    {
        $post = $this->Posts->get($id);
        $this->set(compact('post'));
    }

    public function edit($id)
    {
        $post = $this->Posts->get($id);
        $this->set(compact('post'));
    }
}
