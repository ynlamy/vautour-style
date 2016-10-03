$(document).ready(function() {
	var srch = $("#search");
	srch.val("Search ...");
	srch.bind({
		focus: function() {
			$(this).val( $(this).val() == "Search ..." ? "" : $(this).val());
		},
		blur: function() {
			$(this).val( $(this).val() == "" ? "Search ..." : $(this).val());
		}
	});
});