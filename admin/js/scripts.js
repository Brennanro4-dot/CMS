$(document).ready(function() //check that document is ready
{
    

    //CDK editor for textarea
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );
    


   $('#selectAllBoxes').click(function(event)
    {
        if(this.checked)
            {
                $('.cB').each(function()
                {
                    this.checked =true;
                });
            }
            else
                {
                    $('.cB').each(function()
                    {
                        this.checked =false;
                    });
                }

            });

});


// function loadUsersOnline()
// {
    
//     $.get("functions.php?onlineCount=result", function(data){
//         $(".usersonline").text(data);

//     });

// }

// setInterval(function(){

//     loadUsersOnline();

// },500);







