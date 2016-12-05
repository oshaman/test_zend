<?php
namespace BookList\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BookList\Form\BookForm;

class BookController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
		    'books' => [
			    
			]
		));
    }
	
	public function addAction()
    {
        //отрисовка форм
		$form = new BookForm();
		$form->get('submit')->setValue('Add');
		//и отработка запросов(если такие есть)
		$request = $this->getRequest();
		if($request->isPost()) {
			
		}
		return array('form' => $form);
    }
	
	public function editAction()
    {
       //отрисовка форм
		$form = new BookForm();
		//привязыйзваем к БД
		//$form->bind($book);
		$form->get('submit')->setAttribute('value', 'Edit');
		//и отработка запросов(если такие есть)
		$request = $this->getRequest();
		if($request->isPost()) {
			
		}
		return array(
		    'id' => $id,
            'form' => $form
		);
    }
	
	public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
		if (!$id) {
			return $this->redirect()->toRoute('book');
		}
		$request = $this->getRequest();
		if($request->isPost()) {
			
		}
		return array(
		    'id' => $id,
            //'book' => 
		);
		
    }
}
 