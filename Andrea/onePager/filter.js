
//Makes all portfolio images visible
function ButtonAll(){
   var all = document.getElementsByClassName('singleImage');
   
   //debugger;

   var i;
   
   for ( i =0; i < all.length; i++){
	all[i].style.display = "flex";
}


}

//Only UI section visible
function ButtonUi(){
   var ui = document.getElementsByClassName('Ui');
   var i;
   
   for ( i =0; i < ui.length; i++){
	ui[i].style.display = "flex";
}

  var android = document.getElementsByClassName('Android');

  for ( i =0; i < android.length; i++){
	android[i].style.display = "none";
}

}



//Only Android section visible
function ButtonAndroid(){

   var ui = document.getElementsByClassName('Ui');
   var i;
   
   for ( i =0; i < ui.length; i++){
	ui[i].style.display = "none";
}

  var android = document.getElementsByClassName('Android');

  for ( i =0; i < android.length; i++){
	android[i].style.display = "flex";
}

}
