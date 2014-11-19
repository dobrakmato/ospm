function loadAjax(uri) {
	$('#ajax_content').load(uri + "?use_ajax=true", function () {
		window.history.pushState("none", "Title", uri);
	});
}

$(document).ready(function() {
    $('a').click(function() {
        loadAjax($(this).attr('href'));
        return false; // cancel the event
    });
});