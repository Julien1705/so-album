function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("Text", ev.target.id);
  // alert(ev.target.id);
  var element = ev.target;
}

function drop(ev) {
  // $('#' + ev.target.id).html("");
  ev.preventDefault();
  var data = ev.dataTransfer.getData("Text");
  ev.target.appendChild(document.getElementById(data));
  document.getElementById(data).className = "col-1 offset-md-0 mb-2 zoom rounded col-md-12";
  document.getElementById(data).setAttribute('onclick', "recharger(id)");
  // onclick='recharger(id)'
}

function dropV2(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("Text");
  ev.target.appendChild(document.getElementById(data));
  document.getElementById(data).className = " col-1 p-0 mx-3 offset-md-0 mb-2 zoom rounded";
}

function recharger(id) {
  console.log("Vous clickez");
  console.log(id);
  var img = document.getElementById(id);
  console.log(img);
  document.getElementById(id).className = " col-1 p-0 mx-2 offset-md-0 mb-2 zoom rounded";
  document.getElementById('scroll-bar-img').appendChild(img);
  // img.parentNode.removeChild(img);
}
