function link(name, backgroundColor, textColor, borderColor, url){
  this.name = name ;
  this.url = url ;
  this.backgroundColor = backgroundColor ;
  this.color           = textColor       ;
  this.borderColor     = borderColor     ;
}

function start(){
  var tbody = Create('tbody') ;
  var div = Get('div_links') ;
  tbody.id = 'tbody_links' ;
  for(var index=0 ; index<links.length ; index++){
    var input = Create('input') ;
    input.id = 'input_' + index ;
    input.className = 'linkbox' ;
    input.value = links[index].name ;
    input.type = 'submit' ;
    input.style.backgroundColor = links[index].backgroundColor ;
    input.style.color           = links[index].color ;
    input.style.border          = '5px solid ' + links[index].borderColor ;
    
    if(links[index].name=='i'){
      input.style.fontFamily = 'georgia , serif' ;
      input.style.fontStyle  = 'italic' ;
      input.style.fontSize   = '24pt' ;
    }
    input.addEventListener('click', open_link) ;
    div.appendChild(input) ;
  }
}
function open_link(e){
  if(!e) var e = window.event ;
  var id = e.target.id ;
  var index = parseInt(id.split('_')[1]) ;
  window.open(links[index].url,'_blank') ;
}
function Create(type){ return document.createElement(type) ; }
function Get(id){ return document.getElementById(id) ; }