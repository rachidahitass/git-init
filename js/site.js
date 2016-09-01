$(function(){

// Recherche enter

$("#champ-search").focusin( function() {
	$("#enter").fadeIn("slow");
});

$("#champ-search").focusout( function() {
	$("#enter").fadeOut("slow");
});

// Charger tweets

$("#tweet").tweet({
            username: "spykrew07",
            join_text: "auto",
            avatar_size: 24,
            count: 2,
            auto_join_text_default: "", 
            auto_join_text_ed: "",
            auto_join_text_ing: "",
            auto_join_text_reply: "",
            auto_join_text_url: "",
            loading_text: "Chargement..."
        });

// Folio

$('.detail').hide();
		$('.work').live('mouseenter', function() {
				$(this).find('.detail').stop().fadeTo(300,1);
		}).live('mouseleave', function() {
				$(this).find('.detail').stop().fadeTo(300,0);
});


// Filtre

$('#filtre li a').click(function() {					
	
		$('#filtre li').removeClass('filtre-actif');				
		$(this).parent().addClass('filtre-actif');				
		
		var valeurFiltre = $(this).text().toLowerCase();	
		
		$('div.work').hide();							
		
		if (valeurFiltre == 'tout') {						
            $('div.work').show('fast');  				
        }
		else {  
			$('div.work').each(function() {			
				if(!$(this).hasClass(valeurFiltre)) {  		
                    $(this).hide('fast');					
                } else {  
                    $(this).show('fast');  					
                }  
			});
        }  

		return false;										
	});


// Slider

$('#slider').nivoSlider({
controlNav: false
});

	
// Vide les champs automatiquement */
						   
	$(".autoEmpty").each(function(){
        var defaultText = $(this).val();
        $(this).focus(function(){
            if($(this).val()==defaultText){
                $(this).val("");
            }
        });
        $(this).blur(function(){
            if($(this).val()==""){
                $(this).val(defaultText);
            }
        });
    });

});