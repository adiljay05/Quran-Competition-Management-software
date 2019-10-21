

    $(window).load(function(){
      
//Wrap selected text in  tags with the class 'hl'
//Take some action after (in this case, a simple alert)
$("p").live("mouseup",
    function() {
        var selection = getSelectedText(); 
        if(selection.length >= 1) {
            console.log(selection);
            
            var replacement = $('<span></span>').attr({'class':'hl'}).html(selection);
            console.log(replacement);
            
            var replacementHtml = $('<div>').append(replacement.clone()).remove().html();
            console.log(replacementHtml);

            $(this).html( $(this).html().replace(selection, replacementHtml) );
            //alert(selection);
        }        
    }
); 

//Grab selected text
function getSelectedText(){ 
    if(window.getSelection){ 
        return window.getSelection().toString(); 
    } 
    else if(document.getSelection){ 
        return document.getSelection(); 
    } 
    else if(document.selection){ 
        return document.selection.createRange().text; 
    } 
} 


    });

