(function(){window.onload=function(){window.setTimeout(fadeout,500);}
function fadeout(){document.querySelector('.preloader').style.opacity='0';document.querySelector('.preloader').style.display='none';}
window.onscroll=function(){var header_navbar=document.querySelector(".navbar-area");var sticky=header_navbar.offsetTop;var backToTo=document.querySelector(".scroll-top");if(document.body.scrollTop>50||document.documentElement.scrollTop>50){backToTo.style.display="flex";}else{backToTo.style.display="none";}};let navbarToggler=document.querySelector(".mobile-menu-btn");navbarToggler.addEventListener('click',function(){navbarToggler.classList.toggle("active");});})();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function loadMore()
{
    const page = $('#page').val();
    $.ajax({
        type : 'POST',
        dataType : 'JSON',
        data : { page },
        url : '/services/load-product',
        success : function (result) {
            if (result.html !== '') {
                $('#loadProduct').append(result.html);
                $('#page').val(page + 1);
            } else {
                alert('Bạn đã xem toàn bộ Sản Phẩm');
                $('#button-loadMore').css('display', 'none');
            }
        }
    })
}
function decreaseQuantity() {
    var input = document.getElementById('quantity');
    var value = parseInt(input.value);
    if (value > 1) {
        input.value = value - 1;
    }
}

function increaseQuantity() {
    var input = document.getElementById('quantity');
    var value = parseInt(input.value);
    if (value < 100) {
        input.value = value + 1;
    }
}

function checkQuantity(input) {
    var value = parseInt(input.value);
    if (value < 1) input.value = 1;
    if (value > 100) input.value = 100;
    if (isNaN(value)) input.value = 1;
}
