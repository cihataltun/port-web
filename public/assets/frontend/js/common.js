//HEADER

const mobileCollapse = document.querySelectorAll('.mainLink');
const arrow = document.querySelectorAll('.arrow')

arrow.forEach(function (element, index) {
    element.addEventListener('click', function (e) {

        if ($(element).hasClass('clicked')) {
            $(element).css('transform', 'rotate(360deg)')
            $(element).removeClass('clicked');
        }
        else {

            $(element).css('transform', 'rotate(180deg)')
            $(element).addClass('clicked');
        }
    })
})

let language = document.documentElement.lang;
mobileCollapse.forEach(function (element, index) {
    element.addEventListener('click', function (e) {
        const toggleName = element.getAttribute('aria-controls')
        if (language == 'EN') {
            if (toggleName === 'accomdation') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "accommdation.html";
            } else if (toggleName === 'kidsconcept') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "kidsconcept.html";
            } else if (toggleName === 'foodDrink') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "foodDrink.html";
            } else if (toggleName === 'entertainment') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "entertainment.html";
            } else if (toggleName === 'spa') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "spa.html";
            } else if (toggleName === 'meetingCongress') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "meeting.html";
            }
        } else if (language == 'TR') {
            /****** RELEVANT CODE ****/
        } else if (language == 'RU') {
            /****** RELEVANT CODE ****/
        } else if (language == 'DE') {
            /****** RELEVANT CODE ****/
        }
    }
    )
});

(function(){

    var doc = document.documentElement;
    var w = window;
  
    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;
  
    var header = $('.navbar')
  
    var checkScroll = function() {
  
      /*
      ** Find the direction of scroll
      ** 0 - initial, 1 - up, 2 - down
      */
  
      curScroll = w.scrollY || doc.scrollTop;
      if (curScroll > prevScroll) { 
        //scrolled up
        direction = 2;
      }
      else if (curScroll < prevScroll) { 
        //scrolled down
        direction = 1;
      }
  
      if (direction !== prevDirection) {
        toggleHeader(direction, curScroll);
      }
      
      prevScroll = curScroll;
    };
  
    var toggleHeader = function(direction, curScroll) {
      if (direction === 2 && curScroll > 90) { 
        
  
        $('.navbar').css('top', '-90px')
        prevDirection = direction;
      }
      else if (direction === 1) {
        $('.navbar').css('top', '0px')
        prevDirection = direction;
      }
    };
    
    window.addEventListener('scroll', checkScroll);
  
  })();





//FOOTER

$(window).on('load resize', function () {
    var ww = $(window).width()
    
        if( ww < 1300 && ww > 576){
            $('.footerLocation').appendTo('.footerCenter');
        }
        if( ww < 576){
            $('.footerLocation').prependTo('.footerStart');
        }
        if( ww > 1300){
            $('.footerLocation').prependTo('.footerCol');
        }
   
})