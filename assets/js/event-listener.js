// JavaScript Document
var elUserMsg = document.getElementById('userFeedback');
var elPwdMsg = document.getElementById('pwdFeedback');
var elUsername = document.getElementById('username');
var elPwd = document.getElementById('password');
var elunGroup = document.getElementById('unGroup');
var elPwdGroup = document.getElementById('pwdGroup');

function checkInput(inputEl, groupEl, minLength, msgEl)
{
	if (inputEl.value.length < minLength)
	{
		msgEl.innerHTML = 'Must be '+minLength+' characters or more';
		groupEl.classList.remove('has-success');
		groupEl.classList.add('has-error');
	}
	// success state
	else
	{
		msgEl.innerHTML = '';
		groupEl.classList.remove('has-error');
		groupEl.classList.add('has-success');
	}
}
// username blur
elUsername.addEventListener('blur', function() {
checkInput(elUsername, elunGroup, 5, elUserMsg);
},false);

//password blur
elPwd.addEventListener('blur', function() {
checkInput(elPwd, elPwdGroup, 8, elPwdMsg);
},false);

