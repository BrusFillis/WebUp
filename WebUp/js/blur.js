function on(){
          $(".bckgr").css("filter", "blur(4px)");
          $(".bckgr").css("-webkit-filter", "blur(4px)");
          $(".bckgr").css("-moz-filter", "blur(4px)");
          $(".bckgr").css("-moz-transition" , "all 0.8s ease-out ");
 		      $(".bckgr").css("-o-transition", "all 0.8s ease-out");
 		      $(".bckgr").css("-webkit-transition", "all 0.8s ease-out");
 		      $(".bckgr").css("-webkit-transform", "scale(1.1)");
 		      $(".bckgr").css("-moz-transform", "scale(1.1)");
 		      $(".bckgr").css("-0-transform", "scale(1.1)"); 
 		      $("body").css("overflow","hidden");
        }
function out(){
           $(".bckgr").css("filter", "blur(0px)");
           $(".bckgr").css("-webkit-filter", "blur(0px)");
           $(".bckgr").css("-moz-filter", "blur(0px)");
           $(".bckgr").css("-moz-transition" , "all 0.8s ease-out 0.3s");
 		       $(".bckgr").css("-o-transition", "all 0.8s ease-out 0.3s");
 		       $(".bckgr").css("-webkit-transition", "all 0.8s ease-out 0.3s");
 		       $(".bckgr").css("-webkit-transform", "scale(1.0)");
 		       $(".bckgr").css("-moz-transform", "scale(1.0)");
 		       $(".bckgr").css("-0-transform", "scale(1.0)");
 		       $("body").css("overflow","hidden");
        }