$(document).ready(function(){

	window.addEventListener('resize', function() {


		let elements = getElementsStartsWithId("GridElement");
		console.log(elements);
		elements.foreach(resize);



	}, true);

	let container = $("#GridElement_container");

	let myWidth = $(window).width();
	let myHeight = $(window).height();

	container.width = myWidth;
	container.height = myHeight;
	
	let x = 3;
	let y = 3;
	let xRatio=Math.round(myWidth/x);
	let yRatio=Math.round(myHeight/y);

	for(let i=1;i<10;i++){
		container.append("<div style='width: "+xRatio+"px; height: "+yRatio+"px; display: inline-flex;'><h1>"+i+"</h1></div>");

	}

});

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