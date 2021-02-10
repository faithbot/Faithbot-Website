texts="defaultMessage,billing,collections,payments".split(",");
textIndex=0;

function rotate() {
$("#"+texts[textIndex]).fadeOut(500,function(){
textIndex++;
textIndex%=texts.length;
$("#"+texts[textIndex]).fadeIn(500);
console.log(textIndex);
});

}


$(document).ready(function(){
$("#"+texts[textIndex]).fadeIn(500);
textInterval=setInterval(rotate,5000);
    
$(".sliderLinks").hover(
function(){
var id = $(this).data("id");
if(id!==undefined){
$("#" + id).fadeIn(500);
}
$("#textMessages").fadeIn(500);
$("#"+texts[textIndex]).hide();
//$("#defaultMessage").hide();
clearInterval(textInterval);
},function(){
$("#textMessages").hide();
$(".hidden").hide();
$("#"+texts[textIndex]).fadeIn(500);
textInterval=setInterval(rotate,5000);
});
});
