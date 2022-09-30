<?php

	class SelectionController extends AppController{
		public function selection($selected){
			$this->set('title',__($selected));
			$this->set(compact('selected'));
		}
	}
?>