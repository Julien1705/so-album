function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("Text", ev.target.id);
  // alert(ev.target.id);
  var element = ev.target;
}

function drop(ev) {
  $('#' + ev.target.id).html("");
  ev.preventDefault();
  var data = ev.dataTransfer.getData("Text");
  ev.target.appendChild(document.getElementById(data));
  document.getElementById(data).className += " col-md-12";
}

$(document).ready(function () {
  $('.drag').mousedown(function () {
    $(this).addClass('ondrag');
  })
    .mouseup(function () {
      $(this).removeClass('ondrag');
    });
});
  // this.childNodes[0].setAttribute('display', 'none');
