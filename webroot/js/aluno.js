$('#data-eletiva').datepicker({
	autoClose: true,
    onSelect: function(formattedDate, date, inst) {
    	submittedDate = date.toISOString().slice(0,10).replace(/-/g, "-");
        $('#data-submit').val(submittedDate);
    }
});