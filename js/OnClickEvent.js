var nbrBox = 21;
var monId = new Array();
for(i=0;i<=nbrBox;i++){
	monId.push(1);
}

function show_hide(pNumberChoose, pnbrBox=nbrBox){
	for(i=0;i<=pnbrBox;i++){
		if(i === pNumberChoose){
			document.getElementById("box"+i).style.display="flex";
			document.getElementById("bo"+i).style.filter="grayscale(80%) blur(0.2rem)";
		}
		else{
			document.getElementById("box"+i).style.display="none";
			document.getElementById("bo"+i).style.filter="grayscale(0%) blur(0rem)";
		}
	}
}


function show_hide0(){
	if(monId[0]==1){
		show_hide(0);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[0]=0;

	}

	else{
		document.getElementById("box0").style.display="none";
		document.getElementById("bo0").style.filter="grayscale(0%) blur(0rem)";
		monId[0]=1;
	}
}

function show_hide1(){
	if(monId[1]==1){
		show_hide(1);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[1]=0;

	}

	else{
		document.getElementById("box1").style.display="none";
		document.getElementById("bo1").style.filter="grayscale(0%) blur(0rem)";
		monId[1]=1;
	}
}

function show_hide2(){
	if(monId[2]==1){
		show_hide(2);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[2]=0;

	}

	else{
		document.getElementById("box2").style.display="none";
		document.getElementById("bo2").style.filter="grayscale(0%) blur(0rem)";
		monId[2]=1;
	}
}

function show_hide3(){
	if(monId[3]==1){
		show_hide(3);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[3]=0;

	}

	else{
		document.getElementById("box3").style.display="none";
		document.getElementById("bo3").style.filter="grayscale(0%) blur(0rem)";
		monId[3]=1;
	}
}

function show_hide4(){
	if(monId[4]==1){
		show_hide(4);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[4]=0;

	}

	else{
		document.getElementById("box4").style.display="none";
		document.getElementById("bo4").style.filter="grayscale(0%) blur(0rem)";
		monId[4]=1;
	}
}

function show_hide5(){
	if(monId[5]==1){
		show_hide(5);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[5]=0;

	}

	else{
		document.getElementById("box5").style.display="none";
		document.getElementById("bo5").style.filter="grayscale(0%) blur(0rem)";
		monId[5]=1;
	}
}

function show_hide6(){
	if(monId[6]==1){
		show_hide(6);
		for(i=0;i<=nbrBox;i++){
			monId[i]=1;
		}
		monId[6]=0;

	}

	else{
		document.getElementById("box6").style.display="none";
		document.getElementById("bo6").style.filter="grayscale(0%) blur(0rem)";
		monId[6]=1;
	}
}

var h;
function show_hide7(){
	if(h==1){
		show_hide(7);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 0;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box7").style.display="none";
		document.getElementById("bo7").style.filter="grayscale(0%) blur(0rem)";
		h=1;
	}
}

var i;
function show_hide8(){
	if(i==1){
		show_hide(8);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 0;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box8").style.display="none";
		document.getElementById("bo8").style.filter="grayscale(0%) blur(0rem)";
		i=1;
	}
}

var j;
function show_hide9(){
	if(j==1){
		show_hide(9);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 0;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box9").style.display="none";
		document.getElementById("bo9").style.filter="grayscale(0%) blur(0rem)";
		j=1;
	}
}

var k;
function show_hide10(){
	if(k==1){
		show_hide(10);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 0;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box10").style.display="none";
		document.getElementById("bo10").style.filter="grayscale(0%) blur(0rem)";
		k=1;
	}
}

var l;
function show_hide11(){
	if(l==1){
		show_hide(11);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 0;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box11").style.display="none";
		document.getElementById("bo11").style.filter="grayscale(0%) blur(0rem)";
		l=1;
	}
}

var m;
function show_hide12(){
	if(m==1){
		show_hide(12);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 0;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box12").style.display="none";
		document.getElementById("bo12").style.filter="grayscale(0%) blur(0rem)";
		m=1;
	}
}

var n;
function show_hide13(){
	if(n==1){
		show_hide(13);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 0;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box13").style.display="none";
		document.getElementById("bo13").style.filter="grayscale(0%) blur(0rem)";
		n=1;
	}
}

var o;
function show_hide14(){
	if(o==1){
		show_hide(14);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 0;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box14").style.display="none";
		document.getElementById("bo14").style.filter="grayscale(0%) blur(0rem)";
		o=1;
	}
}

var p;
function show_hide15(){
	if(p==1){
		show_hide(15);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 0;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box15").style.display="none";
		document.getElementById("bo15").style.filter="grayscale(0%) blur(0rem)";
		p=1;
	}
}

var q;
function show_hide16(){
	if(q==1){
		show_hide(16);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 0;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box16").style.display="none";
		document.getElementById("bo16").style.filter="grayscale(0%) blur(0rem)";
		q=1;
	}
}

var r;
function show_hide17(){
	if(r==1){
		show_hide(17);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 0;
		s = 1;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box17").style.display="none";
		document.getElementById("bo17").style.filter="grayscale(0%) blur(0rem)";
		r=1;
	}
}

var s;
function show_hide18(){
	if(s==1){
		show_hide(18);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 0;
		t = 1;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box18").style.display="none";
		document.getElementById("bo18").style.filter="grayscale(0%) blur(0rem)";
		s=1;
	}
}

var t;
function show_hide19(){
	if(t==1){
		show_hide(19);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 0;
		v = 1;
		w = 1;
	}

	else{
		document.getElementById("box19").style.display="none";
		document.getElementById("bo19").style.filter="grayscale(0%) blur(0rem)";
		t=1;
	}
}

var v;
function show_hide20(){
	if(v==1){
		show_hide(20);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 0;
		w = 1;
	}

	else{
		document.getElementById("box20").style.display="none";
		document.getElementById("bo20").style.filter="grayscale(0%) blur(0rem)";
		v=1;
	}
}

var w;
function show_hide21(){
	if(w==1){
		show_hide(21);
		a = 1;
		b = 1;
		c = 1;
		d = 1;
		e = 1;
		f = 1;
		g = 1;
		h = 1;
		i = 1;
		j = 1;
		k = 1;
		l = 1;
		m = 1;
		n = 1;
		o = 1;
		p = 1;
		q = 1;
		r = 1;
		s = 1;
		t = 1;
		v = 1;
		w = 0;
	}

	else{
		document.getElementById("box21").style.display="none";
		document.getElementById("bo21").style.filter="grayscale(0%) blur(0rem)";
		w=1;
	}
}