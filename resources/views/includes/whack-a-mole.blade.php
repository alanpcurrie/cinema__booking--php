<section class ="t-full-width-section">
  <section class = "t-full-width-section__heading">
    <h1 class="alt-style ">Whack-a-mole! <span class="t-score">0</span></h1>
     <button class="a-button__large--red-alt" onClick="startGame()">Start!</button>
     </section>

     <div class="t-game">
    	 <div class="t-hole t-hole1">
    		 <div class="t-mole"></div>
    	 </div>
    	 <div class="t-hole t-hole2">
    		 <div class="t-mole"></div>
    	 </div>
    	 <div class="t-hole t-hole3">
    		 <div class="t-mole"></div>
    	 </div>
    	 <div class="t-hole t-hole4">
    		 <div class="t-mole"></div>
    	 </div>
    	 <div class="t-hole t-hole5">
    		 <div class="t-mole"></div>
    	 </div>
    	 <div class="t-hole t-hole6">
    		 <div class="t-mole"></div>
    	 </div>
     </div>
</section>

<script>
const holes = document.querySelectorAll('.t-hole');
const scoreBoard = document.querySelector('.t-score');
const moles = document.querySelectorAll('.t-mole');
let lastHole;
let timeUp = false;
let score = 0;
function randomTime(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}
function randomHole(holes) {
  const idx = Math.floor(Math.random() * holes.length);
  const hole = holes[idx];
  if (hole === lastHole) {
    console.log('Ah nah thats the same one bud');
    return randomHole(holes);
  }
  lastHole = hole;
  return hole;
}
function peep() {
  const time = randomTime(200, 1000);
  const hole = randomHole(holes);
  hole.classList.add('up');
  setTimeout(() => {
    hole.classList.remove('up');
    if (!timeUp) peep();
  }, time);
}
function startGame() {
  scoreBoard.textContent = 0;
  timeUp = false;
  score = 0;
  peep();
  setTimeout(() => timeUp = true, 10000)
}
function bonk(e) {
  if(!e.isTrusted) return; // cheater!
  score++;
  this.classList.remove('up');
  scoreBoard.textContent = score;
}
moles.forEach(mole => mole.addEventListener('click', bonk));
</script>
