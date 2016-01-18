var block = document.querySelector(".super");

var match_text_left = document.querySelector(".match-text-left");
var match_photo_left = document.querySelector(".match-photo-left");

var match_text_right = document.querySelector(".match-text-right");
var match_photo_right = document.querySelector(".match-photo-right");

var nigF = document.querySelector(".first-match");
var nigS = document.querySelector(".second-match");

$(document).ready(function() {
        $('.second-match').bind('click', function() {
          nigS.classList.remove('nigga');
          block.classList.add('show2');
          nigF.classList.add('nigga');
          match_text_left.classList.add('hide');
          match_photo_left.classList.remove('hide');
          match_text_right.classList.remove('hide');
          match_photo_right.classList.add('hide');
         });

        $('.first-match').bind('click', function() {
          nigF.classList.remove('nigga');
          block.classList.add('show1');
          nigS.classList.add('nigga');
          match_text_left.classList.remove('hide');
          match_photo_left.classList.add('hide');
          match_text_right.classList.add('hide');
          match_photo_right.classList.remove('hide');
         });

         $('.btn-up').bind('click', function(){
           block.classList.remove('show1');
           block.classList.remove('show2');
           nigS.classList.remove('nigga');
           nigF.classList.remove('nigga');
         });
});
