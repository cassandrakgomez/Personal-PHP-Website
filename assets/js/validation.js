// JavaScript Document

var elFirstName     = document.getElementById('firstName');
var elLastName      = document.getElementById('lastName');
var elEmail         = document.getElementById('email');
var elPhone         = document.getElementById('phone');
var elUsername      = document.getElementById('username');
var elPassword      = document.getElementById('password');
var elComments      = document.getElementById('comments');

var elFnGroup       = document.getElementById('fnGroup');
var elLnGroup       = document.getElementById('lnGroup');
var elEmailGroup    = document.getElementById('emailGroup');
var elPhoneGroup    = document.getElementById('phoneGroup');
var elUsernameGroup = document.getElementById('usernameGroup');
var elPasswordGroup = document.getElementById('passwordGroup');
var elCommentsGroup = document.getElementById('commentsGroup');

var elFnFeedback    = document.getElementById('fnFeedback');
var elLnFeedback    = document.getElementById('lnFeedback');
var elEmailFeedback = document.getElementById('emailFeedback');
var elPhoneFeedback = document.getElementById('phoneFeedback');
var elUsernameFeedback = document.getElementById('usernameFeedback');
var elPasswordFeedback = document.getElementById('passwordFeedback');
var elCommentsFeedback = document.getElementById('commentsFeedback');


function validateName(inputEl, groupEl, feedbackEl) {
    var nameRegex = /^[A-Za-z'-]{2,}$/;
    var nameValue = inputEl.value.trim();

    if (!nameRegex.test(nameValue)) {
        feedbackEl.innerHTML = "Please enter at least 2 letters (letters, hyphens, apostrophes only).";
        feedbackEl.classList.remove('alert-box--success');
        feedbackEl.classList.add('alert-box--error');
        groupEl.classList.remove('alert-box--success');
        groupEl.classList.add('alert-box--error');
        return false;
    } else {
        feedbackEl.innerHTML = "Looks good!";
        feedbackEl.classList.remove('alert-box--error');
        feedbackEl.classList.add('alert-box--success');
        groupEl.classList.remove('alert-box--error');
        groupEl.classList.add('alert-box--success');
        return true;
    }
}

function validateEmail(inputEl, groupEl, feedbackEl) {
    var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var emailValue = inputEl.value.trim();

    if (!validRegex.test(emailValue)) {
        feedbackEl.innerHTML = "Please enter a valid email address.";
        feedbackEl.classList.remove('alert-box--success');
        feedbackEl.classList.add('alert-box--error');
        groupEl.classList.remove('alert-box--success');
        groupEl.classList.add('alert-box--error');
        return false;
    } else {
        feedbackEl.innerHTML = "Valid email!";
        feedbackEl.classList.remove('alert-box--error');
        feedbackEl.classList.add('alert-box--success');
        groupEl.classList.remove('alert-box--error');
        groupEl.classList.add('alert-box--success');
        return true;
    }
}

function validatePhone(inputEl, groupEl, feedbackEl) {
    var phoneRegex = /^[0-9]{10}$/;
    var phoneValue = inputEl.value.trim();

    if (!phoneRegex.test(phoneValue)) {
        feedbackEl.innerHTML = "Please enter a 10-digit number (no hyphens or parentheses).";
        feedbackEl.classList.remove('alert-box--success');
        feedbackEl.classList.add('alert-box--error');
        groupEl.classList.remove('alert-box--success');
        groupEl.classList.add('alert-box--error');
        return false;
    } else {
        feedbackEl.innerHTML = "Phone number looks good!";
        feedbackEl.classList.remove('alert-box--error');
        feedbackEl.classList.add('alert-box--success');
        groupEl.classList.remove('alert-box--error');
        groupEl.classList.add('alert-box--success');
        return true;
    }
}

function validateUserField(inputEl, groupEl, feedbackEl, minLength) {
    var value = inputEl.value.trim();

    if (value.length < minLength) {
        feedbackEl.innerHTML = "Must be at least " + minLength + " characters.";
        feedbackEl.classList.remove('alert-box--success');
        feedbackEl.classList.add('alert-box--error');
        groupEl.classList.remove('alert-box--success');
        groupEl.classList.add('alert-box--error');
        return false;
    } else {
        feedbackEl.innerHTML = "Looks good!";
        feedbackEl.classList.remove('alert-box--error');
        feedbackEl.classList.add('alert-box--success');
        groupEl.classList.remove('alert-box--error');
        groupEl.classList.add('alert-box--success');
        return true;
    }
}

function validateComments(inputEl, groupEl, feedbackEl) {
    var value = inputEl.value.trim();

    if (value === "") {
        feedbackEl.innerHTML = "Comments cannot be empty.";
        feedbackEl.classList.remove('alert-box--success');
        feedbackEl.classList.add('alert-box--error');
        groupEl.classList.remove('alert-box--success');
        groupEl.classList.add('alert-box--error');
        return false;
    } else {
        feedbackEl.innerHTML = "Thank you for your feedback!";
        feedbackEl.classList.remove('alert-box--error');
        feedbackEl.classList.add('alert-box--success');
        groupEl.classList.remove('alert-box--error');
        groupEl.classList.add('alert-box--success');
        return true;
    }
}


if (elFirstName) {
    elFirstName.addEventListener('blur', function() {
        validateName(elFirstName, elFnGroup, elFnFeedback);
    }, false);
}
if (elLastName) {
    elLastName.addEventListener('blur', function() {
        validateName(elLastName, elLnGroup, elLnFeedback);
    }, false);
}
if (elEmail) {
    elEmail.addEventListener('blur', function() {
        validateEmail(elEmail, elEmailGroup, elEmailFeedback);
    }, false);
}
if (elPhone) {
    elPhone.addEventListener('blur', function() {
        validatePhone(elPhone, elPhoneGroup, elPhoneFeedback);
    }, false);
}
if (elUsername) {
    elUsername.addEventListener('blur', function() {
        validateUserField(elUsername, elUsernameGroup, elUsernameFeedback, 6);
    }, false);
}
if (elPassword) {
    elPassword.addEventListener('blur', function() {
        validateUserField(elPassword, elPasswordGroup, elPasswordFeedback, 6);
    }, false);
}
if (elComments) {
    elComments.addEventListener('blur', function() {
        validateComments(elComments, elCommentsGroup, elCommentsFeedback);
    }, false);
}