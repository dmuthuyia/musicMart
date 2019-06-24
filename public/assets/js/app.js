var whistleId = 0;
var whistleBodyElement = null;

$('.whistle').find('.interaction').find('.edit').on('click', function (event) {
    event.preventDefault();

    whistleBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var whistleBody = whistleBodyElement.textContent;
    whistleId = event.target.parentNode.parentNode.dataset['whistleid'];
    $('#whistle-body').val(whistleBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function () {
    $.ajax({
            method: 'POST',
            url: urlEdit,
            data: {body: $('#whistle-body').val(), whistleId: whistleId, _token: token}
        })
        .done(function (msg) {
            $(whistleBodyElement).text(msg['new_body']);
            $('#edit-modal').modal('hide');
        });
});


$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('[name="_token"]').val()
        }
});




$('.light').on('click', function(event) {
    event.preventDefault();
    whistleId = event.target.parentNode.parentNode.dataset['whistleid'];
    var isLight = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLight,
        data: {isLight: isLight, whistleId: whistleId, _token: token}
    })
        .done(function() {
            event.target.innerText = isLight ? event.target.innerText == 'light' ? 'You lit this whistle' : 'light' : event.target.innerText == 'Chill' ? 'You don\'t light this whistle' : 'Chill';
            if (isLight) {
                event.target.nextElementSibling.innerText = 'Chill';
            } else {
                event.target.previousElementSibling.innerText = 'light';
            }
        });
});



$(function() {
    
    $("textoverlay")
        .wrapInner("<span>")

    $("textoverlay br")
        .before("<span class='spacer'>")
        .after("<span class='spacer'>");

});


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    //captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}



$('#repo').on('click' , function(e){
   e.preventDefault();
  $('reportModal').modal();
});






var scale = Math.min( 
  availableWidth / contentWidth, 
  availableHeight / contentHeight 
);

// Combine transform components to create isometric 3d transform.
var transforms = [
    'skewY(-45deg) scale(.66)',
    'translate(20px) skewY(-45deg) scale(.66)',
    'translate(150px,50px) scale(1.5,1)',
    'translate(280px) skewY(45deg) scale(.66)',
    'translate(300px) skewY(45deg) scale(.66)'
  ],
  $squares = $('.square').each(function(i) {
    $(this).css({ transform: transforms[i] });
  });
$('#cover').mouseenter(function() {
  $squares.each(function(i) {
    $(this).animate({ transform: transforms[i+1] });
  });
}).mouseleave(function() {
  $squares.each(function(i) {
    $(this).animate({ transform: transforms[i] });
  });
});


$('#div').css({ transform: 'scale(.5)' });



var maxWidth  = $('#outer').width();
var maxHeight = $('#outer').height();

$(window).resize(function(evt) {
    var $window = $(window);
    var width = $window.width();
    var height = $window.height();
    var scale;

    // early exit
    if(width >= maxWidth && height >= maxHeight) {
        $('#outer').css({'-webkit-transform': ''});
        $('#wrap').css({ width: '', height: '' });
        return;
    }

    scale = Math.min(width/maxWidth, height/maxHeight);

    $('#outer').css({'-webkit-transform': 'scale(' + scale + ')'});
    $('#wrap').css({ width: maxWidth * scale, height: maxHeight * scale });
});

jQuery(document).ready(function ($) {
    var newWidth = '300px';
    $('.mydiv').css('width', newWidth);
});


    jQuery(document).ready(function ($) {
        var percentChange = .66;
        var newWidth = $(window).width() * percentChange; 
        $('#primary').css('width', newWidth + 'px');
    });



    $('#hide').click(function()
    {
        $('#content').hide('blind');
        $('#hide').hide();
        $('#show').show();

    });


    $('#show').click(function()
    {
        $('#content').show('blind');
        $('#show').hide();
        $('#hide').show();

    });  

jQuery(document).ready(function() {
    jQuery('.denzintro1').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
        offset: 100    
       });   
});  



    $(document).ready(function () {
        
        $('#m-nav').click(function() {

            $('#wazo5').toggleClass('show');

            

        });
    }); 
