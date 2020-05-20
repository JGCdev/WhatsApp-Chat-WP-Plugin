
jQuery(document).ready(function($){

    if (document.getElementById('wcw_opening').checked=== true) {
        $("#delay_field")[ "show"]();
        document.getElementById('wcw_opening').value = true;
    }

	$("#wcw_opening").click(function() {
        $("#delay_field")[this.checked ? "show" : "hide"]();
        var checkedValue = this.checked;
        this.value = checkedValue;
        console.log(checkedValue);
        
	});
});