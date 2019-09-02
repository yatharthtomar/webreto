//$('select[multiple]').multiselect();
//$('#langOpt').multiselect({
    //columns: 1,
    //placeholder: 'Select Languages'
//});


    $(document).ready(function(){
    
   $('#mobilea').click(function(){
       
       $('#websitedev').css({'padding-top':'100px'});
   });
    
});

 // code here


(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);
var win = $(window);

var allMods = $(".module");

allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible"); 
  } 
});

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-in"); 
    } 
  });
  
});

var fruits = ['apple', 'banana', 'cherries', 'grapes', 'mango', 'orange', 'peach', 'pear', 'watermelon'];
 var step;
var action;

$(function(){
   
    if(location.reload){
        
        randomFruit();
    }
});

function randomFruit(){
    
    $("#fruits").show();
    $("#fruits1").show();
    $("#fruits").css({'left': Math.round(100*Math.random()), 'top': -50});
    $("#fruits1").css({'left': Math.round(120*Math.random()), 'top': -50});
    
    step = 1+ Math.round(5*Math.random());
    
    
    action = setInterval(function(){
        
         $("#fruits").css('top', $("#fruits").position().top + step);
        $("#fruits1").css('top', $("#fruits1").position().top + step);
        
        if($("#fruits").position().top > $("#designrain").height()){
            
                   $("#fruits").show();
                   $("#fruits1").show();
    $("#fruits").css({'left': Math.round(100*Math.random()), 'top': -50});
            
            $("#fruits1").css({'left': Math.round(120*Math.random()), 'top': -50});
    
                
        }
    },20)
    
}

function anyFruit(){
    
    $("#fruits").attr('src', 'images/'+fruits[Math.round(8*Math.random())]+'.png');
}