document.read (function(){
	$("submit").bind("click"),function() {
		var base = $("base").val();
		var conv = $("conv").val();
		var amount = $("amount").val();
			$.ajax({
				url: "index.php",
				type: "GET",
				data: ({base, conv, amount}),
				dataType: "html"
			});
	});
});