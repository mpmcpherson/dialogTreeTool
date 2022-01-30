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
			array_push($this->conversationElements, $ele);
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
	}
?>