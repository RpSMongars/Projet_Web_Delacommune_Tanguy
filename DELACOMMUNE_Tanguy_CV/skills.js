function moveCss() {
  var elem = document.getElementById("myBarCss");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 35) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function moveHtml() {
  var elem = document.getElementById("myBarHtml");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 40) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function movePhp() {
  var elem = document.getElementById("myBarPhp");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 30) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function moveJs() {
  var elem = document.getElementById("myBarJs");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 30) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function moveDev() {
  var elem = document.getElementById("myBarDev");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 65) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function movePoo() {
  var elem = document.getElementById("myBarPoo");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 50) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function moveBdd() {
  var elem = document.getElementById("myBarBdd");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 70) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function moveReseau() {
  var elem = document.getElementById("myBarReseau");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 10) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

function move() {
  moveCss();
  moveHtml();
  moveJs();
  movePhp();
  moveBdd();
  movePoo();
  moveDev();
  moveReseau();
}