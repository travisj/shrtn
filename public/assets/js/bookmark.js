(function(global, undefined) {
	// objects
	var Shrtn = function() {
		var $ = null,
			_$shrtn;

		this.init = function() {
			jQuery.noConflict();
			$ = jQuery;

			$("<div id='_shrtn'></div>")
				.append('Shorting as we speak...')
				.dialog({
					title: 'hey shorty',
					open: function() {
						$.ajax({
							url: 'http://' + global._shrtn_host + '/add',
							data: {
								url: escape(document.location.href),
								title: escape(document.title),
								public: 1
							},
							dataType: 'jsonp',
							success: function(data) {
								_$shrtn = $("#_shrtn");
								_$shrtn.html("<input type='text' value='" + data.url + "'>");
								_$shrtn.find('input').focus();
							}
						})
					},
					close: function() {
					}
				});
		}
	}

	var shrtn = new Shrtn();
	shrtn.init();
})(this);

