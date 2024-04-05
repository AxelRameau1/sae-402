let tileSize = 64; 

let tileImages = []; 
let spriteX, spriteY; 
let spriteSpeed = 2; 

let allWall = [];

let finish = false;

let newY = 0;

let tile;
let tilePosition = [];
let allTilesPositions = [];
let allTiles = [];

let tilePositionSave = [];
let allTilesPositionsSave = [];


//Camera
let yScreenSize = 1024;
let cameraPosition = 0;
let cameraSpeed = 1;
let yFirstPosition = 750;
let defeatLine = yFirstPosition - 10;

let scrollingFirstPositionY = -3648 + yScreenSize;
let scrollingPositionY = scrollingFirstPositionY;

//Player
let player;
let playerYPosition = yFirstPosition - 100;
let playerSpeed = 3;
let wallTouched;

//Fuel
let jericanImage;
let fuelSize = 70;
let fuelLevel = fuelSize;
let FuelLossSpeed = .1;
let fuelPercent;
let allJerican = [];
let fuelPositionX;
let fuelPositionY

// Puffer Fish
let pufferFishSpeed = 2;
let pufferFishImage;
let allPufferFish = [];
let pufferFishDirection = "left";
let allPufferFishDirection = [];
let pufferFishLatency =  3;
let allCanChangeDirection = [];
let allPufferFishLatenceIndex = [];


let allSpritesSelect = [];


//Fond
let gradient;
let fond1;
let fond2; 
let fond3;
let fond4;
let gradientSpeed = 1;
let fond1Speed = .23;
let fond2Speed = .2; 
let fond3Speed = .15; 
let fond4Speed = .1; 
let instantGradient = -3648 + yScreenSize;
let instantFond1 = -15;
let instantFond2 = -15;
let instantFond3 = -15;
let instantFond4 = -15;

//Megalodon
let megalodon;
let megalodonPosition = yFirstPosition;
let megalodonImage1;
let megalodonImage2;
let megalodonCounter = 0;
let megalodonIndex;
let megalodonAnimSpeed = 10;

//Sons
let musique;
let gameOverSong;
let winSong;

//Boutons
let btnTryAgain;
let btnNextLevel;



//===========================================================================================================//



function preload() {
  // --- CHARGEMENT DES IMAGES ---

  //---------------Terrain---------------
  tileImages[0] = loadImage('assets/empty.png');
  tileImages[1] = loadImage('assets/walls/1.png');
  tileImages[2] = loadImage('assets/walls/2.png');
  tileImages[3] = loadImage('assets/walls/3.png');
  tileImages[4] = loadImage('assets/walls/4.png');
  tileImages[5] = loadImage('assets/walls/5.png');
  tileImages[6] = loadImage('assets/walls/6.png');
  tileImages[7] = loadImage('assets/walls/7.png');
  tileImages[8] = loadImage('assets/walls/8.png');
  tileImages[9] = loadImage('assets/walls/9.png');
  tileImages[11] = loadImage('assets/walls/11.png');
  tileImages[12] = loadImage('assets/walls/12.png');
  tileImages[13] = loadImage('assets/walls/13.png');
  tileImages[14] = loadImage('assets/walls/14.png');
  tileImages[15] = loadImage('assets/walls/15.png');
  tileImages[16] = loadImage('assets/walls/16.png');
  tileImages[17] = loadImage('assets/walls/17.png');
  tileImages[19] = loadImage('assets/walls/19.png');
  tileImages[20] = loadImage('assets/walls/20.png');
  tileImages[21] = loadImage('assets/walls/21.png');
  tileImages[22] = loadImage('assets/walls/22.png');
  tileImages[23] = loadImage('assets/walls/23.png');
  tileImages[24] = loadImage('assets/walls/24.png');
  tileImages[25] = loadImage('assets/walls/25.png');
  tileImages[26] = loadImage('assets/walls/26.png');
  tileImages[27] = loadImage('assets/walls/27.png');

  //---------------Player---------------
  playerImage = loadImage('assets/sousMarin.png');

  //---------------Sprites---------------
  pufferFishImage = loadImage('assets/pufferFish.png');

  //---------------Jerican---------------
  jericanImage = loadImage('assets/jericanImage.png');

  //--------------Parallaxe--------------
  gradient = loadImage('assets/gradient.png');
  fond1 = loadImage('assets/fond1.png');
  fond2 = loadImage('assets/fond2.png');
  fond3 = loadImage('assets/fond3.png');
  fond4 = loadImage('assets/fond4.png');

  //--------------Megalodon--------------
  megalodonImage1 = loadImage('assets/megalodon1.png');
  megalodonImage2 = loadImage('assets/megalodon2.png');

  //----------------Sons----------------
  musique = loadSound('assets/sons/musique.mp3');
  gameOverSong = loadSound('assets/sons/gameOverSong.mp3');
  winSong = loadSound('assets/sons/winSong.mp3');

  //----------------Boutons----------------
  btnTryAgain = loadImage('assets/btnTryAgain.png');
  btnNextLevel = loadImage('assets/btnNextLevel.png');
}


//===========================================================================================================//

function setup() {
  allSprites.pixelPerfect = true;
  createCanvas(map[0].length * tileSize, yScreenSize);

  musique.play();

  enemiesLoading();

  jericanLoading();
  
  createPlayer();

  mapLoading();
}


function draw() {
  scrollingPositionY += cameraSpeed;

  decorScroll();

  spritesSelectScrolling();

  tilesFixPosition();

  defeat(); 

  playerMovement();
  
  pufferFishBehaviour();
 
  jericanBehaviour();

  fuel();

  win();
  
  megalodonAnim()
}



//=========================================== FONCTIONS =====================================================//


//Fonction qui relance la partie
function reload() {
  location.reload();
}

//Fonction qui lance la fonction "reload" si le bouton est cliqué
function mousePressed() {
  if (scrollingPositionY >= 0 || finish == true) {
    if (mouseX >= 202 &&
      mouseX <= 502 &&
      mouseY >= 437 &&
      mouseY <= 587) {
        reload()
    }
  }
}


//Fonction de fin
function win() {
  if (scrollingPositionY >= 3000){
    //freeze le jeu
    cameraSpeed = 0; 
    playerSpeed = 0; 
    pufferFishSpeed = 0; 
    gradientSpeed = 0; 
    fond1Speed = 0; 
    fond2Speed = 0; 
    fond3Speed = 0; 
    fond4Speed = 0; 

    mySound.play();

    //Afficher texte
    textSize(64);
    fill(255, 255, 255);
    textAlign(CENTER, CENTER);
    text("Gagné !", width/2, defeatLine - 500);

    push();
    translate(width / 2, height / 2);
    imageMode(CENTER);
    image(btnNextLevel, 0, 0, 300, 150); 
    pop();
  }
}

//Fonction de scroll des sprites de la selection
function spritesSelectScrolling() {
  for (let i = 0; i < allSpritesSelect.length; i++) {
    let sprite = allSpritesSelect[i];
    sprite.position.y = sprite.position.y + cameraSpeed;
  }
}

// Fonction de la jauge de fuel
function fuel() {
  if (fuelLevel > 0){
    fuelLevel -= FuelLossSpeed;
  }
  else {
    finish = true;
  }

  printFuel();
}


// Fonction qui affiche la jauge de fuel
function printFuel () {
  fuelPercent = fuelLevel / fuelSize; 

  fuelPositionX = player.x - 40;
  fuelPositionY = player.y + 40;

    // Dessiner le contour de la jauge
    noFill();
    stroke(0);
    rect(fuelPositionX, fuelPositionY, 80, 15, 5);
  
    // Calculer la largeur de la barre en fonction du pourcentage
    let barWidth = lerp(0, 80, fuelPercent);
  
    // Dessiner la barre de la jauge
    fill(0, 127, 255);
    noStroke();
    rect(fuelPositionX, fuelPositionY, barWidth, 15, 5);
}


// Fonction qui génère la map
function mapLoading() {
  for (let y = 0; y < map.length; y++) {
    for (let x = 0; x < map[y].length; x++) {
      let tileType = map[y][x]; // récupère le type de la tuile
      let tileX = x * tileSize + tileSize / 2; // calcule la position de la tuile sur l'axe des x
      let tileY = y * tileSize + scrollingPositionY; // calcule la position de la tuile sur l'axe des y

      tilePositionSave = [];
      tilePositionSave.push(tileX);
      tilePositionSave.push(tileY);
      allTilesPositionsSave.push(tilePositionSave);

      if (tileType > 0 && tileType <+ 28) { // ne dessine pas la tuile si c'est un ennemi
        tilePosition = [];
        tilePosition.push(tileX);
        tilePosition.push(tileY);
        allTilesPositions.push(tilePosition);

        tile = new Sprite(tileX, tileY, tileSize, tileSize);
        tile.addImage(tileImages[tileType]);
        tile.rotationLock = true;
        allTiles.push(tile);

      }
    }
  }
}


// Fonction qui fixe les positions des tiles
function tilesFixPosition() {
  for (let i = 0; i <+ allTiles.length; i++) {
    allTiles[i].x = allTilesPositions[i][0];
    allTilesPositions[i][1] += cameraSpeed;
    allTiles[i].y = allTilesPositions[i][1];
  } 
}


// Fonction qui génère les ennemis
function enemiesLoading () {
  for (let y = 0; y < map.length; y++) {
   for (let x = 0; x < map[y].length; x++) {
     if (map[y][x] === 28) {
       spriteX = x * tileSize + tileSize/2;
       spriteY = y * tileSize + tileSize/2 + scrollingPositionY;

       //Poisson globe
       pufferFish = new Sprite(spriteX, spriteY, tileSize, tileSize);
       pufferFish.spriteSheet = pufferFishImage;
    
       pufferFish.addAnis({
         right: { w: 64, h: 64, row: 1, frames: 2, frameDelay: 7 },
         left: { w: 64, h: 64, row: 0, frames: 2, frameDelay: 7 },
       });

       //Ajout dans la liste 
       allPufferFish.push(pufferFish);
       allSpritesSelect.push(pufferFish);

       allCanChangeDirection.push(false);
       allPufferFishLatenceIndex.push(pufferFishLatency);

       pufferFish.rotationLock =true;

       //Ajout de la variable de direction dans la liste
       allPufferFishDirection.push(pufferFishDirection);
     }
   }
 }
}


function pufferFishLatencyBehaviour(index) {
  allPufferFishLatenceIndex[index] -= .1;
  if (allPufferFishLatenceIndex[index] <= 0) {
    allCanChangeDirection[index] = true;
  }
}


// Comportement du poisson globe
function pufferFishBehaviour () {
  for (let i = 0; i < allPufferFish.length; i++) {
    pufferFishLatencyBehaviour(i);

    for (let x = 0; x < allTiles.length; x++) {

      if (allPufferFish[i].collides(allTiles[x]) && allCanChangeDirection[i] == true) {
        allCanChangeDirection[i] = false;
        allPufferFishLatenceIndex[i] = pufferFishLatency;
        if (allPufferFishDirection[i] == "right") {
          pufferFishDirection = "left";
          allPufferFishDirection[i] = "left";
          allPufferFish[i].changeAni("left");
        }
        else {
          pufferFishDirection = "right";
          allPufferFishDirection[i] = "right";
          allPufferFish[i].changeAni("right");
        }
      }
    } 
    if (player.collides(allPufferFish[i])) {
      finish = true;
    }
    allPufferFish[i].move(1, allPufferFishDirection[i], pufferFishSpeed);
  }
}


// Fonction qui génère les jericans
function jericanLoading () {
  for (let y = 0; y < map.length; y++) {
   for (let x = 0; x < map[y].length; x++) {
     if (map[y][x] === 30) {
       spriteX = x * tileSize + tileSize/2;
       spriteY = y * tileSize + tileSize/2 + scrollingPositionY;

       jerican = new Sprite(spriteX, spriteY, tileSize, tileSize);
       //Ajout dans la liste 
       allJerican.push(jerican);
       allSpritesSelect.push(jerican);

       //Applique le sprite
       jerican.addImage(jericanImage);
     }
   }
 }
}


// Fonction de déplacement du joueur
function playerMovement() {
  if (kb.pressing("arrowRight") || kb.pressing("d") ) {
    player.changeAni("right");
    player.move(10,"right",playerSpeed)

  } else if (kb.pressing("arrowLeft") || kb.pressing("a")) {
    player.changeAni("left");
    player.move(10,"left",playerSpeed)

  } else if (kb.pressing("arrowUp") || kb.pressing("w")) {
    player.move(20,"up",playerSpeed)

  } else if (kb.pressing("arrowDown") || kb.pressing("s")) {
    player.move(10,"down",playerSpeed)

  }
}


// Comportement du jerican
function jericanBehaviour () {
  jerican.rotationLock =true;
  for (let i = 0; i < allJerican.length; i++) {
    if (player.collides(allJerican[i])) {
      fuelLevel = fuelSize;
      allJerican[i].remove();
    }
  }
}


//Défaite du joueur
function defeat () {
  if (player.position.y > defeatLine || finish == true ) {
    finish = true;
    //freeze le jeu
    cameraSpeed = 0;
    playerSpeed = 0;
    pufferFishSpeed = 0;
    gradientSpeed = 0;
    fond1Speed = 0; 
    fond2Speed = 0; 
    fond3Speed = 0; 
    fond4Speed = 0; 

    /*
    setTimeout(() => {
      winSong.play();
      setTimeout(() => {
        winSong.pause();
      }, 4000);
    }, 0);*/

    for (let i = 0; i < allTiles.length; i++) {
      allTiles[i].remove();
    }

    for (let i = 0; i < allSpritesSelect.length; i++) {
      allSpritesSelect[i].remove();
    }

    //Afficher texte
    textSize(64);
    fill(255, 255, 255);
    textAlign(CENTER, CENTER);
    text("Perdu !", width/2, defeatLine - 500);

    push();
    translate(width / 2, height / 2);
    imageMode(CENTER);
    image(btnTryAgain, 0, 0, 300, 150); 
    pop();
  }
}


// Fonction de création du joueur
function createPlayer() { 
    player = new Sprite(315, playerYPosition, 64, 64);
    player.rotationLock = true;
    player.spriteSheet = playerImage;
    
    player.addAnis({
      left: { w: 64, h: 64, row: 0, frames: 2, frameDelay: 7 },
      right: { w: 64, h: 64, row: 1, frames: 2, frameDelay: 7 },
    });
    allSpritesSelect.push(player);

    player.changeAni("left");
}

// Fonction de défilement du décor de fond
function decorScroll() {
    instantGradient += gradientSpeed;
    image(gradient, 0, instantGradient);
    instantFond4 += fond4Speed;
    image(fond4, 0, instantFond4);
    instantFond3 += fond3Speed;
    image(fond3, 0, instantFond3);
    instantFond2 += fond2Speed;
    image(fond2, 0, instantFond2);
    instantFond1 += fond1Speed;
    image(fond1, 0, instantFond1);
}

function megalodonAnim() {
  megalodonCounter += 1;
  if (megalodonCounter == megalodonAnimSpeed) {
    megalodonIndex = !megalodonIndex;
    megalodonCounter = 0;
  }
  if (megalodonIndex == 0) {
    image(megalodonImage1, 0, megalodonPosition);
  }
  else {
    image(megalodonImage2, 0, megalodonPosition);
  }
}