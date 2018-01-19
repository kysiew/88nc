// Custom Scroll Bars (11-08-2005)
// by Vic Phillips http://www.vicsjavascripts.org.uk


// Functional Code - NO Need to change

var csbObj,csbDragX,csbMseX,csbDragY,csbMseY,csbTO,csbSpd,csbD;

function csbCustomXScroll(){
 csbarg=csbCustomXScroll.arguments;
 for (csb0=0;csb0<csbarg.length;csb0+=2){
  csbdobj=document.getElementById(csbarg[csb0]);
  if (csbdobj.tagName=='IFRAME'){ csbiobj=window.frames[csbarg[csb0]].document.getElementsByTagName('DIV')[0]; }
  else { csbiobj=csbdobj.getElementsByTagName('DIV')[0];  }
  csbpobj=document.getElementById(csbarg[csb0+1]);
  csbsobj=csbpobj.getElementsByTagName('DIV')[0];
  csblobj=csbpobj.getElementsByTagName('DIV')[1];
  csbrobj=csbpobj.getElementsByTagName('DIV')[2];
  csbsobj.os=0;
  if (csblobj&&csbrobj){
   csbsobj.os=csblobj.offsetWidth;
   csblobj.obj=csbsobj;
   csblobj.onmousedown=function(){ csbSpd=1; csbLeftRight(this.obj,1); }
   csblobj.onmouseup=function(){ clearTimeout(csbTO); }
   csblobj.style.left='0px';
   csblobj.style.zIndex=1;
   csbrobj.obj=csbsobj;
   csbrobj.onmousedown=function(){ csbSpd=1; csbLeftRight(this.obj,0); }
   csbrobj.onmouseup=function(){ clearTimeout(csbTO); }
   csbrobj.style.left=(csbpobj.offsetWidth-csbrobj.offsetWidth)+'px';
   csbrobj.style.zIndex=1;
  }
  csbsobj.style.left=(csbsobj.os)+'px';
  csbsobj.onmousedown=function(event){ csbXMseDown(event,this);}
  csbsobj.inw=csbiobj.offsetWidth-csbdobj.offsetWidth+csbsobj.offsetWidth*2;
  csbsobj.pw=csbsobj.parentNode.offsetWidth-csbsobj.offsetWidth;
  csbsobj.obj=csbiobj;
  csbsobj.objos=csbiobj.offsetLeft;
 }
}

function csbCustomYScroll(){
 csbarg=csbCustomYScroll.arguments;
 for (csb0=0;csb0<csbarg.length;csb0+=2){
  csbdobj=document.getElementById(csbarg[csb0]);
  if (csbdobj.tagName=='IFRAME'){ csbiobj=window.frames[csbarg[csb0]].document.getElementsByTagName('DIV')[0]; }
  else { csbiobj=csbdobj.getElementsByTagName('DIV')[0];  }
  csbpobj=document.getElementById(csbarg[csb0+1]);
  csbsobj=csbpobj.getElementsByTagName('DIV')[0];
  csbtobj=csbpobj.getElementsByTagName('DIV')[1];
  csbbobj=csbpobj.getElementsByTagName('DIV')[2];
  csbsobj.os=0;
  if (csbtobj&&csbtobj){
   csbsobj.os=csbtobj.offsetHeight;
   csbtobj.obj=csbsobj;
   csbtobj.onmousedown=function(){ csbSpd=1; csbUpDown(this.obj,1); }
   csbtobj.onmouseup=function(){ clearTimeout(csbTO); }
   csbtobj.style.top='0px';
   csbtobj.style.zIndex=1;
   csbbobj.obj=csbsobj;
   csbbobj.onmousedown=function(){ csbSpd=1; csbUpDown(this.obj,0); }
   csbbobj.onmouseup=function(){ clearTimeout(csbTO); }
   csbbobj.style.top=(csbpobj.offsetHeight-csbbobj.offsetHeight)+'px';
  }
  csbsobj.style.top=(csbsobj.os)+'px';
  csbsobj.onmousedown=function(event){ csbYMseDown(event,this);}
  csbsobj.inh=csbiobj.offsetHeight-csbdobj.offsetHeight;
  csbsobj.ph=csbpobj.offsetHeight-csbsobj.offsetHeight-csbsobj.os*0;
  csbsobj.obj=csbiobj;
  csbsobj.objos=csbiobj.offsetTop;
 }
}

function csbLeftRight(csbobj,csbd){
 csbObj=csbobj; csbD=csbd;
 if (csbD){ csbObj.style.left=(csbObj.offsetLeft-csbSpd)+'px'; }
 else { csbObj.style.left=(csbObj.offsetLeft+csbSpd)+'px'; }
 csbPosInnerX();
 csbSpd=csbSpd*1.1;
 if (csbSpd>95){ csbSpd=95; }
 if (csbObj.offsetLeft>0+csbObj.os&&csbObj.offsetLeft<csbObj.pw-csbObj.os){
  csbTO=setTimeout('csbLeftRight(csbObj,csbD)',100-csbSpd);
 }
 else {
  if (csbObj.offsetLeft<csbObj.os){ csbObj.style.left=csbObj.os+'px'; }
  if (csbObj.offsetLeft>csbObj.pw-csbObj.os){ csbObj.style.left=(csbObj.pw-csbObj.os)+'px'; }
  csbPosInnerX();
 }
}

function csbUpDown(csbobj,csbd){
 csbObj=csbobj; csbD=csbd;
 if (csbD){ csbObj.style.top=(csbObj.offsetTop-csbSpd)+'px'; }
 else { csbObj.style.top=(csbObj.offsetTop+csbSpd)+'px'; }
 csbPosInnerY();
 csbSpd=csbSpd*1.1;
 if (csbSpd>95){ csbSpd=95; }
 if (csbObj.offsetTop>0+csbObj.os&&csbObj.offsetTop<csbObj.ph-csbObj.os){
  csbTO=setTimeout('csbUpDown(csbObj,csbD)',100-csbSpd);
 }
 else {
  if (csbObj.offsetTop<csbObj.os){ csbObj.style.top=csbObj.os+'px'; }
  if (csbObj.offsetTop>csbObj.ph-csbObj.os){ csbObj.style.top=(csbObj.ph-csbObj.os)+'px'; }
  csbPosInnerY();
 }
}

function csbXMseDown(event,csbobj) {
 document.onmousemove=function(event){csbXDrag(event);}
 document.onmouseup=function(event){csbMseUp(event);}
 csbObj=csbobj;
 csbMse(event);
 csbDragX=csbMseX-csbObj.offsetLeft;
}

function csbXDrag(event) {
 csbMse(event);
 if ((csbMseX-csbDragX)>0+csbObj.os&&(csbMseX-csbDragX)<csbObj.pw-csbObj.os){
  csbObj.style.left=(csbMseX-csbDragX)+'px';
 }
 csbPosInnerX();
}

function csbYMseDown(event,csbobj) {
 document.onmousemove=function(event){csbYDrag(event);}
 document.onmouseup=function(event){csbMseUp(event);}
 csbObj=csbobj;
 csbMse(event);
 csbDragY=csbMseY-csbObj.offsetTop;
}

function csbYDrag(event) {
 csbMse(event);
 if ((csbMseY-csbDragY)>=csbObj.os&&(csbMseY-csbDragY)<csbObj.ph-csbObj.os){
  csbObj.style.top=(csbMseY-csbDragY)+'px';
 }
 csbPosInnerY();
}

function csbMse(event){
 if(!event) var event=window.event;
 if (document.all){ csbMseX=event.clientX; csbMseY=event.clientY; }
 else {csbMseX=event.pageX; csbMseY=event.pageY; }
}

function csbMseUp(event) {
 document.onmousemove=null; csbDragX=-1; csbDragY=-1;
}

function csbPosInnerX() {
 csbObj.obj.style.left=(-((csbObj.offsetLeft-csbObj.os)*csbObj.inw/(csbObj.pw-csbObj.os*2))+csbObj.objos)+'px'
}

function csbPosInnerY(){
 csbObj.obj.style.top=(-((csbObj.offsetTop-csbObj.os)*csbObj.inh/(csbObj.ph-csbObj.os*2))+csbObj.objos)+'px'
}


