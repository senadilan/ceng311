const button = document.getElementById("clickButton");
const gameArea = document.getElementById("gameArea");

let score = 0;
let level = 1;
let timeout = 500;

function changePosition() {
  const maxX = gameArea.clientWidth - button.offsetWidth;
  const maxY = gameArea.clientHeight - button.offsetHeight;
  const x = Math.random() * maxX;
  const y = Math.random() * maxY;
  button.style.marginLeft = `${x}px`;
  button.style.marginTop = `${y}px`;
}

button.addEventListener("click", (e) => {
  e.stopPropagation();
  score++;
  if (score >= 3) {
    level++;
    score = 0;
    timeout = Math.max(timeout - 100, 0);

    alert(`You are the winner! You can go next ${level}`);
  }
});

button.addEventListener("mouseover", () => {
  if (timeout === 0) {
    changePosition();
  } else {
    setTimeout(changePosition, timeout);
  }
});

changePosition();
