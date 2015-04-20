<?php namespace Phasty\Front\Controllers;

use Phasty\Common\Models\Pages;

class PagesController extends ControllerBase
{
    protected function initialize()
    {
        parent::initialize();
        $this->tag->setTitle('Currencies | E-Shopper');
    }

    /**
     * just forward to catalog
     */
    public function indexAction()
    {
        $this->dispatcher->forward([
            'controller' => 'pages',
            'action' => 'contacts'
        ]);
    }

    public function showAction($slug = '')
    {
        $page = Pages::findFirstBySlug($slug);
        if(!$page){
            $this->dispatcher->forward([
               'controller' => 'index',
                'action' => 'notFound'
            ]);
        }
        $this->view->setVars([
           'page' => $page
        ]);
    }

    public function contactsAction(){

    }

}