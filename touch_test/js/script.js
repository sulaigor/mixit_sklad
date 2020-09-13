let pElement = document.createElement('p');
let body = document.querySelector('body');

function eventHandler(event) {
  document.addEventListener(event, () => {
    pElement.textContent = event;
    body.appendChild(pElement.cloneNode(true));
  });
}

'click touchstart touchend'.split(' ').forEach(event => eventHandler(event));