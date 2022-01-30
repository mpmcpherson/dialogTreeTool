<?php
	print_r("\n\nDialog Engine Command Line Interface v0.01\n");
	while(true){
		#there should be options here to manage the experience, if this is going to be a debugging engine
		print_r("\nchoose an option\n");
		$input = readline();

		$dialogTree = file_get_contents("sampleDialog.json");

		#print_r($dialogTree);
		var_dump($dialogTree);

	}


	class dialogTree{
		public $conversation;
		public $conversationElements;

		function __construct(string $convName, string $convElements ){
			$this->conversation = "";
			$this->conversationElements = [];
		}

		function addDialogElement(dialogElement $ele){
			try{
				$ele->_id = (end($this->conversationElements)->_id)+1;
			}catch( exception $ex){
				$ele->_id=0;
			}
			array_push($this->conversationElements,[ $ele->_id, $ele ] );
		}
		function addParentChildRelationship(int $parentId, int $id){
			$this->conversationElements[$parentId]->addChild($id);
			$this->conversationElements[$id]->addParent($parentId);
		}
		function removeParentChildRelationship(int $parentId, int $id){
			$this->conversationElements[$parentId]->removeChild($id);
			$this->conversationElements[$id]->removeParent($parentId);
		}
	}
	class dialogElement{
		public $_id;
		public $_parents;
		public $_children;
		public $value;

		function __construct(string $val){
			$this->value = $val;
		}
		function addParent($id){
			array_push($this->_parents, $id);
		}
		function addChild($id){
			array_push($this->_children, $id);
		}
		function removeParent($id){
			$this->_parents = array_diff($this->_parents, $id);
		}
		function removeChild($id){
			$this->_children = array_diff($this->_children, $id);
		}
	}
?>