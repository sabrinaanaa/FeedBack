// Very simple JS for updating the text when a radio button is clicked
const INPUTS = document.querySelectorAll('#smileys input');
const updateValue = e => document.querySelector('#result').innerHTML = e.target.value;


INPUTS.forEach(el => el.addEventListener('mouseover', e => updateValue(e)));


