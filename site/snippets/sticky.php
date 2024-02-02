
<script>
// sticky top

$('.main').scroll(function () {
    var screenTop = $(this).scrollTop(),
        topBg = $('.main .top-scroll-bg'),
        init = 306,
        nowTop = init - (screenTop * 1.2);

    //sticky header show/hide			
    if (nowTop < 35) {
        nowTop = 0;
        $('.summary.on').show();
    }
    else {
        $('.summary.on').hide();
    }

    //sticky header background color		
    topBg.css({ 'background': 'linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1)' + (nowTop) + '%)' });


}); //scroll END








/*==================================================================*/


/*
Play bar and Volume bar
	reference : https://codepen.io/arlinadesign/pen/pvMPWE 
*/

$('input[type=range]').on('input', function (e) {
    var min = e.target.min,
        max = e.target.max,
        val = e.target.value;

    $(e.target).css({
        'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
    });
}).trigger('input');


/*==================================================================*/

// add icons at the playlist
$('.playlist__td--play').html('<i class="far fa-play-circle"></i>');
$('.playlist__td--like').html('<i class="far fa-heart"></i>');
$('.playlist__td--hour').text('3 days ago');
$('.playlist__td--dislike').html('<i class="fas fa-ban"></i>');
$('.playlist__td--more').html('<i class="fas fa-ellipsis-h"></i>');


/*==================================================================*/
// modal(new playlist)

const openModalBtn = document.querySelector('.new-list'),
    clostModalBtn = document.querySelector('.modal__close-btn'),
    modalBg = document.querySelector('.bg-area'),
    modal = document.querySelector('.modal');


openModalBtn.addEventListener('click', function () {
    modalBg.style.display = 'block';
    modal.style.display = 'block';
});

clostModalBtn.addEventListener('click', function () {
    modalBg.style.display = '';
    modal.style.display = '';
});

modalBg.addEventListener('click', function () {
    modalBg.style.display = '';
    modal.style.display = '';
});
</script>