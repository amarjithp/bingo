document.addEventListener('DOMContentLoaded', () => {
  const card = document.getElementById('card');
  // const startGameButton = document.getElementById('startGame');
  const numbers = Array.from({ length: 25 }, (v, k) => k + 1);
  for (let i = numbers.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [numbers[i], numbers[j]] = [numbers[j], numbers[i]];
}

  // Create Bingo Card
  for (let i = 0; i < 25; i++) {
      const cell = document.createElement('div');
      cell.textContent = numbers[i];
      card.appendChild(cell);
  }
});
