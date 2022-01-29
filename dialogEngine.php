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
		public $dialogElements;
	}
	class dialogElement{
		public $id;
		public $parents;
		public $children;
		public $value;
	}
?>