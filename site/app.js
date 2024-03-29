$(document).ready(function(){
	window.addEventListener('resize', function() {
		let elements = getElementsStartsWithId("GridElement");
		console.log(elements);
		//elements.foreach(resize);
	}, true);


	let container = $("#GridElement_container");
	let layerId=1;

	let myWidth = $(window).width();
	let myHeight = $(window).height();

	container.width = myWidth;
	container.height = myHeight;

	let conversation = new Array();

	conversation.push(new conversationLayer(container));

	conversationNodes = new Array();

	conversationNodes.push(new conversationNode(conversation[0]));

function resize(item, index, arr){
	let height = document.body.clientHeight;
	let width = document.body.clientWidth;

	arr[index].style.height = (height/3)+".px";
	arr[index].style.width = (width/3)+".px";
}

function getElementsStartsWithId( id ) {
  let children = document.body.getElementsByTagName('*');
  let elements = [], child;
  for (var i = 0, length = children.length; i < length; i++) {
    child = children[i];
    if (child.id.substr(0, id.length) === id){
      elements.push(child);
    }
  }
  return elements;
}

/* Events fired on the drag target */
document.addEventListener("dragstart", function(event) {
  event.dataTransfer.setData("Text", event.target.id);
});

document.addEventListener("drag", function(event) {
  //document.getElementById("demo").innerHTML = "The p element is being dragged";
});

/* Events fired on the drop target */
document.addEventListener("dragover", function(event) {
  event.preventDefault();
});

document.addEventListener("drop", function(event) {
  event.preventDefault();
  if ( event.target.className == "droptarget" ) {
    var data = event.dataTransfer.getData("Text");
    event.target.appendChild(document.getElementById(data));
    //document.getElementById("demo").innerHTML = "The p element was dropped";
  }
});
class conversationNode(targetLayer){
	function create(){
			targetLayer.append('<div id="dragMe" ondragstart="dragStart(event)" draggable="true" style="display: inline-flex; margin: 3px; cursor: grabbing; border: 4px solid black; border-radius: 5px; height: 55px; width: 55px;"> YO </div>');
	}
}
class conversationLayer(targetContainer){
	function create(){
			targetContainer.append('<div id="_layer'+layerId+'" class="droptarget row" style="margin: -1%; display: inline-flex; ondrop="drop(event)" ondragover="allowDrop(event)"><h1>'+i+'</h1></div>');
	}
}