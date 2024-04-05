let logoImg;
let playBtnImg;
let accueilImage;
let pegi7;
let btnHistory;
let btnFreeMode;

function preload() {
  logoImg = loadImage('assets/logoImg.png'); 
  playBtnImg = loadImage('assets/btnPlay.png'); 
  accueilImage = loadImage('assets/accueilImage.png'); 
  pegi7 = loadImage('assets/pegi7.png');
  btnHistory = loadImage('assets/btnHistory.png');
  btnFreeMode = loadImage('assets/btnFreeMode.png');
}

function setup() {
  createCanvas(704, 1024);
}

function draw() {
  background(accueilImage);
  push();
  translate(width / 2, height / 4);
  imageMode(CENTER);
  image(logoImg, 0, 0, 600, 200);
  pop();

  push();
  textAlign(CENTER, CENTER);
  fill(255);
  textSize(42);
  text('Level 1', width / 2, height / 1.7);
  pop();

  push();
  translate(width / 2, height / 1.5);
  imageMode(CENTER);
  image(btnHistory, 0, 0, 350, 100);
  pop();

  push();
  translate(width / 2, height / 1.25);
  imageMode(CENTER);
  image(btnFreeMode, 0, 0, 350, 100);
  pop();

  push();
  translate(width - 60, height / 1.08);
  imageMode(CENTER);
  image(pegi7, 0, 0, 80, 100);
  pop();
}

function mousePressed() {
  if (mouseX >= 177 &&
    mouseX <= 477 &&
    mouseY >= 638 &&
    mouseY <= 738) {
      window.location.href = 'http://www.a-trebosc.mmi-limoges.fr/SAE_402/index.html';
  }
}