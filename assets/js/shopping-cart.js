// JavaScript Document
var elList = document.getElementById('list');
var count = document.getElementById('counter');
var addBtn = document.getElementById('addToList');
var input = document.getElementById('itemText');
var itemCount = 1;

function addItem(){
	
	if(input.value.trim() === "") {
		alert("You can't buy nothing at the store - enter an item name before adding! :3 ");
		return;
	}
	

    var newEl, newElText;
    newEl = document.createElement('div');//put whatever tag you want to insert
    newElText = document.createTextNode(input.value);
    newEl.appendChild(newElText);
    newEl.classList.add('alert');
    newEl.classList.add('alert-info');
    elList.appendChild(newEl);//add new alert div to parent list
	
	itemCount++;
	count.textContent = itemCount;
	
	input.value="";
}

addBtn.addEventListener('click',addItem,false);