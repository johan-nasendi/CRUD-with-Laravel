// Javascript
// event pada saat link di klik
$('.page-scroll').on('click', function(e){

    // ambil data href
    var target = $(this).attr('href');
    // ambil element href
    var targetHref = $(target);

    // membuat animasi scroll top smooth
    $('html , body').animate({
        scrollTop: $(targetHref).offset().top - 50
    }, 1000);
    e.preventDefault;

});


// Parallax

// about

$(window).on('load',function(){
    $('.pKiri').addClass('Pmuncul');
    $('.pKanan').addClass('Pmuncul');
});

 


$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
   
    // jumbotron
  
    $('.jumbotron img').css({
         'transform' : 'translate(0px, '+ wScroll/4 + '%)'
    });

    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2 + '%)'
    });

    $('.jumbotron p').css({
        
        'transform' : 'translate(0px, '+ wScroll/1.2 + '%)'
    });

    
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }


   
   
    // portfolio

    if(wScroll > $('.portfolio').offset().top - 250 ) {
      $('.portfolio .thumbnail').each(function(i){
        setTimeout(function() {
               $('.portfolio .thumbnail').eq(i).addClass('muncul');
        },400 * (i+1));
 })
      
 }

    
});