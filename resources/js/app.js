import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
console.log("edgar js");
const form = document.querySelector('[name="verifyForm"]');
const inputs = form.querySelectorAll('.inputs input');
const formData = new FormData();

function shouldSubmit() {
  return [...inputs].every((input) => input.value.length > 0);
}

function handleSubmit(e) {
  e.preventDefault();
  
  if (shouldSubmit()) {
    const code = [...formData.values()].join('');
    alert(`CODE ${code} VERIFIED!`);
  }
}

function handleInput(e) {
  // check for data that was inputted
  // if there is a next input, focus on it
  const input = e.target;
  if (input.value) {
    formData.append(input.name, input.value);
    
    if (input.nextElementSibling) {
      input.nextElementSibling.focus();
    }
  }
}

function handleFocus(e) {
  if (e.target.value) {
    e.target.select();
  }
}

function handlePaste(e) {
  const paste = e.clipboardData.getData('text');
  // loop over each input and populate with the index of that string
  inputs.forEach((input, i) => {
    input.value = paste[i] || '';
    formData.set(input.name, input.value);
  })
  
  if (shouldSubmit()) {
    handleSubmit();
  }
}

function handleKeyDown({ key, target }) {
  if (key !== 'Backspace') {
    return;
  } else if (target.previousElementSibling) {
    formData.delete(target.name)
    target.value = '';
    target.previousElementSibling.focus();
  }
}

inputs[0].addEventListener('paste', handlePaste)

form.addEventListener('input', handleInput);
form.addEventListener('focusin', handleFocus);
form.addEventListener('keydown', handleKeyDown);
form.onsubmit = handleSubmit;