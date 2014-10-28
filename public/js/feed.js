var feed_currentPage = 0;

function feed_loadItems() {
	$('#feedentries').hide('fast', function(){
		$('#feedentries').load('./feed/ajax/0', function(responseTxt, statusTxt, xhr){
			$('#feedentries').fadeIn('slow');
			
		    if(statusTxt=="success") {
		    	$('#feedstatus').text('load more items.');
		    	feed_currentPage++;
		    }        
		    if(statusTxt=="error") {
		    	$('#feedstatus').text('error occured! please reload.');
		    }
		});
	});
}

function feed_loadMore() {
	var e = $("<div>").load("./feed/ajax/" + feed_currentPage);
	e.hide();
	$("#feedentries").append(e);
	e.fadeIn('slow');
}