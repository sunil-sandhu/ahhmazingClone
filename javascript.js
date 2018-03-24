function clickOnOne()
{
  
    document.getElementById('pic2').style.display = 'block';
    document.body.style.backgroundColor = "#28a1ff";
    document.getElementById('pic1').style.display = 'none';
    document.getElementById('audio1').play();
    numberChange();

}


function clickOnTwo()
{
  
    document.getElementById('pic2').style.display = 'none';
    document.body.style.backgroundColor = "#00ffa2";
    document.getElementById('pic3').style.display = 'block';
    document.getElementById('audio2').play(); 
    numberChange();

}

function clickOnThree()
{
  
    document.getElementById('pic3').style.display = 'none';
    document.body.style.backgroundColor = "#ff1f79";
    document.getElementById('pic1').style.display = 'block';
    document.getElementById('audio3').play(); 
    numberChange();
  
 
}




function numberChange()

{

    var ajax = jQuery.ajax({
        method : 'get',
        data : { 'increase' : '1' },
        cache: false
    }) ;
    ajax.done(function(data){
        jQuery('#counter').html(data) ;
    }) ;
    ajax.fail(function(data){
        alert('ajax fail : url of ajax request is not reachable') ;
    }) ;

}




$.ajax({
    url: "counter.php", success: function (newNumber)

    {
        if(Number(newNumber) > 0)



        {
            document.getElementById('number').innerHTML = newNumber
        }


    }
})


}


var outide = 1;




function dice(sides)
{

    var number = Math.ceil(   Math.random()*sides    );

    return number;

}



function say(words)
{

    var random_dice_number = dice(100);

    return (words + ' ' + random_dice_number);

}



