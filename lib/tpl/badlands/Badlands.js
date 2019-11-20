;
const $ = jQuery;
;
const Badlands = function(){ //Define Global object.
	let self = {} 
	
	
	self.Initialize = function(){
		
		$("a[href='/doku.php?id=show_hide_table'], a[href='/doku.php?id=wiki:show_hide_table']").each(function(){
			var that = $(this);
			that.removeClass('wikilink2').addClass('tableToggle');
			that.attr('href', '#!');
			that.parent().next('.table').addClass('displayNone');//Auto hides all tables that have the clickable link.
			$(this).click(function(){
				$(this).parent().next(".table").toggleClass('displayNone');
				return false;
			});
		});
		
		self.SetUpButtons();
	}
	
	$(document).ready(function(){
		Badlands.Initialize();		
	})
	
	self.SetUpButtons = function(){
		
		$('button.blockButton').each(function(){
			
			if($(this).text() == "Show/Hide Table"){
					$(this).parent().next('.table').addClass('displayNone');
					$(this).addClass('tableToggle')
					$(this).click(function(){
						$(this).parent().next(".table").toggleClass('displayNone');
					})			
			} else {
				
				$(this).click(function(){
						window.location = "/doku.php?id=" + self.ScrubText($(this).text())
				});				
			}
			
			
		})
		
		
		
	}
		
	self.ScrubText = function(textToScrub){
		//This may get more complex later. For now, this is all we need. 
		return textToScrub.replace(/(\ |')/g, '_');
	}
	
	return self; //sets the global object to the object we just created.
}()