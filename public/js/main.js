

$(window).resize(function () {
   var H = $(window).height();
var W = $(window).width()

$('.carousel-item img').height(H);
    $('.carousel-item img').width(W);

});

$(window).on('scroll', function() {



    var delay = 150;
    $(".progress-bar").each(function(i){
        $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );

        $(this).prop('Counter',0).animate({

        }, {
            duration: delay,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now)+'%');
            }
        });
    });
});

$(document).ready(function () {

var H = $(window).height();
var W = $(window).width()

$('.carousel-item img').height(H);






var mytext = $('#typer').data('text');
  var mytextlength = mytext.length;
 var n = 0;

setTimeout(() => {
    thetyper = setInterval(function(){
        // @ts-ignore
        $('#typer').each(function(){
            $(this).html( $(this).html() + mytext[n] )
        });

        n++
        if (n >= mytextlength ){
            clearInterval(thetyper);
        }

    },120);

}, 20);



var mytext2 = $('#typer2').data('text');
  var mytextlength2 = mytext2.length;

var b = 0;
thetyper2 = setInterval(function(){
    // @ts-ignore
    $('#typer2').each(function(){
         // @ts-ignore
        $(this).html( $(this).html() + mytext2[b] )
    });

    b++
    if (b >= mytextlength2 ){
        clearInterval(thetyper2);
    }

},350);








});






var fName = document.getElementById("name"),
    fEmail = document.getElementById("email"),
    fMessage = document.getElementById("message"),
    errorElement = document.getElementById("errorname"),
    errormessage = document.getElementById("errormessage"),
    errormail = document.getElementById("errormail"),
    myForm = document.getElementById("form");

letters = /^[A-Za-z]+$/;
// @ts-ignore
mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


myForm.addEventListener("submit" , (e) => {
    var errorname = []
    var errormess =[]


    // @ts-ignore
    if(!fName.value.match(letters)){
        errorname.push("Name must be leters");

    }
    else{
        e.preventDefault()
    }
    if (errorname.length > 0){
        e.preventDefault()
        errorElement.innerText = errorname.join(",")


    }


    // @ts-ignore
    if(!email.value.match(mailformat)){
        errormess.push("Mail must be valid");
    }
    else{
        e.preventDefault()
    }
    if (errormess.length > 0){
        e.preventDefault()
        errormail.innerText = errormess.join(",")
    }

});

fMessage.addEventListener("input", event => {
    var errorm = []
    var target = event.currentTarget;
    var maxLength = target.getAttribute("maxlength");

    var currentLength = target.value.length;

    if (currentLength >= maxLength) {
        errorm.push("You have reached the maximum number of characters.");
        errormessage.innerText = errorm.join(",");
    }


});

function ValidateEmail(mail)
{
    // @ts-ignore
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myform.email.value))
    {
        return (true)
    }
    alert("You have entered an invalid email address!")
    return (false)
}

