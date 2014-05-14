$(document).ready(function() {
 
	var time = 3; // time in seconds
	var carouselHeight = (window.innerHeight-100)+'px';

	var $progressBar,
	  $bar, 
	  $elem, 
	  isPause, 
	  tick,
	  percentTime;
 
	//Init the carousel
	$("#owl-main").owlCarousel({
	  slideSpeed : 500,
	  paginationSpeed : 500,
	  singleItem : true,
	  afterInit : progressBar,
	  afterMove : moved,
	  transitionStyle : "fade",
	  startDragging : pauseOnDragging
	});

 
	//Init progressBar where elem is $("#owl-me")
	function progressBar(elem){
	  $elem = elem;
	  //build progress bar elements
	  buildProgressBar();
	  //start counting
	  start();
	}
 
	//create div#progressBar and div#bar then prepend to $("#owl-me")
	function buildProgressBar(){
	  $progressBar = $("<div>",{
		id:"progressBar"
	  });
	  $bar = $("<div>",{
		id:"bar"
	  });
	  $progressBar.append($bar).appendTo($elem);
	}
 
	function start() {
	  //reset timer
	  percentTime = 0;
	  isPause = false;
	  //run interval every 0.01 second
	  tick = setInterval(interval, 10);
	};
 
	function interval() {
	  if(isPause === false){
		percentTime += 1 / time;
		$bar.css({
		   width: percentTime+"%"
		 });
		//if percentTime is equal or greater than 100
		if(percentTime >= 100){
		  //slide to next item 
		  $elem.trigger('owl.next')
		}
	  }
	}
 
	//pause while dragging 
	function pauseOnDragging(){
	  isPause = true;
	}
 
	//moved callback
	function moved(){
	  //clear interval
	  clearTimeout(tick);
	  //start again
	  start();
	}
 
	// uncomment this to make pause on mouseover 
	// $elem.on('mouseover',function(){
	//   isPause = true;
	// })
	// $elem.on('mouseout',function(){
	//   isPause = false;
	// })

	$("#owl-cover").owlCarousel({
	  autoPlay: 3000,
	  singleItem : true,
	  transitionStyle : "goDown",
	});
	

	$('#home-logo').load(function(){
		$(this)
			.transition({ rotate: '360deg',easing:'ease',duration:1000,delay:1000})
			.transition({ scale: [1.5, 1.5] })
			.transition({ scale: [1, 1] }).repeat();
	});
		
});