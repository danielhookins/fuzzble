var oldDirection;

$(document).ready(function(){

    oldDirection = "right";
    animateDiv();
    
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h = $(window).height() - 50;
    var w = $(window).width() - 50;
    
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);

    return [nh,nw];    
    
}

function animateDiv(){
    
    var newq = makeNewPosition();
    var oldq = $('.fuzzble').offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);
    
    var direction = ((newq[1] - oldq.left) < 0) ? 'left' : 'right';

    if (direction != oldDirection) {
        
        if (direction == "right") {
            rotate(80);
        } else {
            rotate(100);
        }
        
    }
    
    $('.fuzzble').animate({ top: newq[0], left: newq[1] }, speed, function(){
     
      oldDirection = direction;

      animateDiv();
      
    });
    
};

function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);
    
    var greatest = x > y ? x : y;
    
    var speedModifier = 0.16;

    var speed = Math.ceil(greatest/speedModifier);

    return speed;

}

function rotate(degrees){

    $('.fuzzble').css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});

};
