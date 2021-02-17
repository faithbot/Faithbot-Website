// Color gradient
function updateGradient(){if(void 0!==$){var o=colors[colorIndices[0]],e=colors[colorIndices[1]],t=colors[colorIndices[2]],n=colors[colorIndices[3]],r=1-step,s=Math.round(r*o[0]+step*e[0]),a=Math.round(r*o[1]+step*e[1]),c=Math.round(r*o[2]+step*e[2]),l="rgb("+s+","+a+","+c+")",d=Math.round(r*t[0]+step*n[0]),i=Math.round(r*t[1]+step*n[1]),p=Math.round(r*t[2]+step*n[2]),g="rgb("+d+","+i+","+p+")";$(".gradient").css({background:"-webkit-gradient(linear, left top, right top, from("+l+"), to("+g+"))"}).css({background:"-moz-linear-gradient(left, "+l+" 0%, "+g+" 100%)"}),step+=gradientSpeed,step>=1&&(step%=1,colorIndices[0]=colorIndices[1],colorIndices[2]=colorIndices[3],colorIndices[1]=(colorIndices[1]+Math.floor(1+Math.random()*(colors.length-1)))%colors.length,colorIndices[3]=(colorIndices[3]+Math.floor(1+Math.random()*(colors.length-1)))%colors.length)}}function updateGradient(){if(void 0!==$){var o=colors[colorIndices[0]],e=colors[colorIndices[1]],t=colors[colorIndices[2]],n=colors[colorIndices[3]],r=1-step,s=Math.round(r*o[0]+step*e[0]),a=Math.round(r*o[1]+step*e[1]),c=Math.round(r*o[2]+step*e[2]),l="rgb("+s+","+a+","+c+")",d=Math.round(r*t[0]+step*n[0]),i=Math.round(r*t[1]+step*n[1]),p=Math.round(r*t[2]+step*n[2]),g="rgb("+d+","+i+","+p+")";$(".gradient").css({background:"-webkit-gradient(linear, left top, right top, from("+l+"), to("+g+"))"}).css({background:"-moz-linear-gradient(left, "+l+" 0%, "+g+" 100%)"}),step+=gradientSpeed,step>=1&&(step%=1,colorIndices[0]=colorIndices[1],colorIndices[2]=colorIndices[3],colorIndices[1]=(colorIndices[1]+Math.floor(1+Math.random()*(colors.length-1)))%colors.length,colorIndices[3]=(colorIndices[3]+Math.floor(1+Math.random()*(colors.length-1)))%colors.length)}}function displayPanel(o){for(var e=0;e<tabLinks.length;e++)tabLinks[e]==o?(tabLinks[e].classList.add("active"),tabPanels[e].style.display="block"):(tabLinks[e].classList.remove("active"),tabPanels[e].style.display="none")}var colors=new Array([199,252,228],[224,192,250],[180,226,250],[184,182,252],[250,200,245],[255,230,161]),step=0,colorIndices=[0,1,2,3],gradientSpeed=.004;setInterval(updateGradient,10);var colors=new Array([199,252,228],[224,192,250],[180,226,250],[184,182,252],[250,200,245],[255,230,161]),step=0,colorIndices=[0,1,2,3],gradientSpeed=.004;setInterval(updateGradient,10);var tabLinks,tabPanels;window.onload=function(){tabLinks=document.getElementById("tabs").getElementsByTagName("li"),tabPanels=document.getElementById("containers").getElementsByTagName("div"),displayPanel(tabLinks[0]);for(var o=0;o<tabLinks.length;o++)tabLinks[o].onclick=function(){return displayPanel(this),!1},tabLinks[o].onfocus=function(){return displayPanel(this),!1}};


// Counter
window.onload = function() {
  // Month Day, Year Hour:Minute:Second, id-of-element-container
  countUpFromTime("Jan 29, 2018 08:00:00", 'countup1'); // ****** Change this line!
};
function countUpFromTime(countFrom, id) {
  countFrom = new Date(countFrom).getTime();
  var now = new Date(),
      countFrom = new Date(countFrom),
      timeDifference = (now - countFrom);
    
  var secondsInADay = 60 * 60 * 1000 * 24,
      secondsInAHour = 60 * 60 * 1000;
    
  days = Math.floor(timeDifference / (secondsInADay) * 1);
  years = Math.floor(days / 365);
  if (years > 1){ days = days - (years * 365) }
  hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
  mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
  secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

  var idEl = document.getElementById(id);
  idEl.getElementsByClassName('years')[0].innerHTML = years;
  idEl.getElementsByClassName('days')[0].innerHTML = days;
  idEl.getElementsByClassName('hours')[0].innerHTML = hours;
  idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
  idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

  clearTimeout(countUpFromTime.interval);
  countUpFromTime.interval = setTimeout(function(){ countUpFromTime(countFrom, id); }, 1000);
}