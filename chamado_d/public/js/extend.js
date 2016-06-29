$.fn.extend({
		orderComboBox: function () {
		var opt = $(this);
        var id =  opt.attr('id');

		opt.html($('#'+ id + ' option').sort(function(a, b) {
				if(a.text == 'Selecione...'){
					return 0
				}
				if (a.text > b.text) {
					return 1;
				}
				else if (a.text < b.text) {
					return -1;
				}
			}))
			$(this).get(0).selectedIndex = 0;
	}
})