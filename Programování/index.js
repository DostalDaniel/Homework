var d = document;
var listinput = d.getElementById('addList');
var groceries = [];

function newItem(e) {
	var input = d.getElementById('input');
	var newLi = d.createElement('li');
  var yourItem = input.value;
  var newTextNode = d.createTextNode(yourItem);
	newLi.appendChild(newTextNode);
	var position = d.getElementsByTagName('ul')[0];
	position.appendChild(newLi);
  groceries.push (yourItem);
  input.value = '';
  putSavedData();
  };