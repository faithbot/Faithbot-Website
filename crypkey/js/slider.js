texts="defaultMessage,billing,collections,payments".split(",");
textIndex=0;

function rotate() {
$("#"+texts[textIndex]).fadeOut(900,function(){
textIndex++;
textIndex%=texts.length;
$("#"+texts[textIndex]).fadeIn(900);
console.log(textIndex);
});

}


$(document).ready(function(){
$("#"+texts[textIndex]).fadeIn(900);
textInterval=setInterval(rotate,4000);
    
$(".sliderLinks").hover(
function(){
var id = $(this).data("id");
if(id!==undefined){
$("#" + id).fadeIn(900);
}
$("#textMessages").fadeIn(900);
$("#"+texts[textIndex]).hide();
//$("#defaultMessage").hide();
clearInterval(textInterval);
},function(){
$("#textMessages").hide();
$(".hidden").hide();
$("#"+texts[textIndex]).fadeIn(900);
textInterval=setInterval(rotate,4000);
});
});
