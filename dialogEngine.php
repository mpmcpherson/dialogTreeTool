<?php
	print_r("\n\nDialog Engine Command Line Interface v0.01\n");
	while(true){
		#there should be options here to manage the experience, if this is going to be a debugging engine
		print_r("\nchoose an option\n");
		$input = readline();

		//$dialogTree = file_get_contents("sampleDialog.json");
		$ndt = new dialogTree("firstTest");
		
		$inputDialog1 = new dialogElement("This is the first line of the conversation");
		$ndt->addDialogElement($inputDialog1);
		
		print_r("first added\n");

		$inputDialog2 = new dialogElement("This is the second line line of the conversation");
		$ndt->addDialogElement($inputDialog2);

		print_r("second added\n");
		
		$inputDialog3 = new dialogElement("This is the third line line of the conversation");
		$ndt->addDialogElement($inputDialog3);

		print_r("third added\n");
		//print_r($ndt);
		//var_dump($ndt);

		$ndt->listNodes();

	}


	class dialogTree{
		public $conversation;
		public $conversationElements;

		function __construct(string $convName){
			$this->conversation = $convName;
			$this->conversationElements = [];
		}

		function addDialogElement(dialogElement $ele){
			if(end($this->conversationElements)!=false){

				//var_dump(end($this->conversationElements));

				$ele->_id  = end($this->conversationElements)[1]->_id+1;
				array_push($this->conversationElements,[ $ele->_id, $ele ] );
			}else{
				array_push($this->conversationElements,[ $ele->_id, $ele ] );
			}
		}
		function addParentChildRelationship(int $parentId, int $id){
			$this->conversationElements[$parentId]->addChild($id);
			$this->conversationElements[$id]->addParent($parentId);
		}
		function removeParentChildRelationship(int $parentId, int $id){
			$this->conversationElements[$parentId]->removeChild($id);
			$this->conversationElements[$id]->removeParent($parentId);
		}
		function listNodes(){
			foreach ($this->conversationElements as $key => $value) {
				print_r("($value[1]->_id)".$value[1]->value."\n");
			}
		}
	}
	class dialogElement{
		public $_id;
		public $_parents;
		public $_children;
		public $value;

		function __construct(string $val){
			$this->_id = 0;
			$this->_parents=[];
			$this->_children=[];
			$this->value = $val;
			//print_r($this);
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