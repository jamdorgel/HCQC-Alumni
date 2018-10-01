function aboutOnClick(){ 
window.open("about.html", "_parent");
}

$(function(){ 
var documentEl = $(document),
 fadeEl = $('.fade-scroll');

 documentEl.on('scroll', function(){ 
    var currentScrollPos = documentEl.scrollTop();
    fadeEl.each(function(){
         var $this = $(this),
         elemOffSet = $this.offset().top;
         if(currentScrollPos > elemOffSet) $this.css("opacity", 1 - (currentScrollPos-elemOffSet) / 200);
    });

 });
 
 
var myObject = $('#hcqcAlumni_HdrText');

myObject.animate({
    opacity: "1"
}, "slow")

var bottomHeaderText = $('#hcqc_IntroText');

bottomHeaderText.animate({
    opacity: "1"
}, "slow")





})