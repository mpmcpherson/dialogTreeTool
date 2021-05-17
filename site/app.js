window.onload(function(){

	window.addEventListener('resize', function() {


		let elements = getElementsStartsWithId("GridElement");

		elements.foreach(resize);



	}, true);

	let container = document.getElementById("container");

	let myWidth = window.innerWidth;
	let myHeight = window.innerHeight;

	container.width = myWidth;
	container.height = myHeight;
	
	let x = 3;
	let y = 3;
	let xPercent=myWidth/x;
	let yPercent=myHeight/y;

	for(let i=0;i<9;i++){
		container.append('<div stlye=\"width='+xPercent+'; height='+yPercent+';\">'+i+'</div>');

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