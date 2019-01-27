
///// Start of Jquery code ////////////
$(document).ready(function(){
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $(".tooltipped").tooltip();
    $('select').formSelect();

    $('input#icon_prefix,input#icon_telephone').characterCounter();


    $('#icon_prefix').focusout(function(){

        var id = $(this).val();

        if(id == '')
        {
            M.toast({html: 'PLease Enter Your ID'})
        }


    });


    $('#icon_telephone').focusout(function(){

        var pass = $(this).val();

        if(pass == '')
        {
            M.toast({html: 'PLease Enter Your Password'})
        }


    });

    $('#bt').click(function(){

        var id = $('#icon_prefix').val();
        var pass = $('#icon_telephone').val();

        if(id == '' && pass == '')
        {
            M.toast({html: 'PLease Enter Your InfoCard'})
        }


    });

    /////TypeWriter of Login Page////////////

    $("#ghost").ghosttyper({
        messages: ['Welcome to Smart School', 'Please Enter InfoCard', 'Developed By','Software Group','Enjoy!!!'],

        // animation speed for typing effect
        timeWrite: 80,

        // animation speed for deleting effect
        timeDelete: 50,

        // animation delay
        timePause: 1000});

    /////End of TypeWriter of Login Page////////


/////Sound Icon of Login Page/////////////
    var x = document.getElementById("myAudio");
    $("#vu #play").click(function(){
        $("#play").slideUp(300);
        $("#pause").slideDown(1000);
        x.play();
    });
    $("#vu #pause").click(function(){
        $("#play").slideDown(1000);
        $("#pause").slideUp(300);
        x.pause();
    });
/////////End of Sound Icon of Login Page////////////



});
//////// End of Jquery code ////////////




////// InfoCard for Login Page//////////
var i = 0;
var txt = 'Info card'; /* The text */
var speed = 200; /* The speed/duration of the effect in milliseconds */
function typeWriter() {
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}
//////End InfoCard for Login Page//////////

$()


$('.bgid').click(function () {

    $.ajax({

        url:"idgen.php",
        success:function (data) {

            $('#ID').val(data);



        }

    });


    $("form").submit(function (a) {
        a.preventDefault();
    });

});

$('.bgpass').click(function () {

    $.ajax({

        url:"passgen.php",
        success:function (data) {

            $('#Pass').val(data);
        }


    });

    $("form").submit(function (a) {
        a.preventDefault();
    });




});


/**
 * Created by M-ENG on 1/21/2019.
 */
