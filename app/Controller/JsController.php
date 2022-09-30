<?php
	class JsController extends AppController{
		
		public function q1(){
			ini_set('memory_limit','256M');
			
			$this->loadModel('Product');
			$dataList = $this->Product->find('all');
			$this->set(compact('dataList'));

			$this->set('title',__('Question: Please make table contenteditable'));
		}
		
		public function q1_detail(){

			
			
			
			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
	}