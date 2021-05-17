window.onload(function(){

	window.addEventListener('resize', function(event) {


		let elements = getElementsStartsWithId("GridElement");

		elements.foreach(resize);



	}, true);

	let container = document.getElementById("container");

	container.width = window.innerWidth;
	container.height=window.innerHeight;

	container.append("<div></div>");
	

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