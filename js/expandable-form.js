let buttons = document.querySelectorAll('.descriptive-button');
buttons.forEach((element, i) => {
  element.addEventListener("click", (event) => {
    const selector = `.descriptive-button-content-wrapper:nth-child(${i+1}) .descriptive-content`;
    const content = document.querySelector(selector);
    content.classList.toggle('descriptive-visible');
  });
});
