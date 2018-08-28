function sendNoty(type, msg = 'Empty Message', modal = false, timeout = 3000) {
	switch (type) {
		case 'alert':
			noty({
				type : type,
				text : msg,
				layout : 'topRight',
				theme : 'relax',
				dismissQueue : true,
				modal : modal,
				maxVisible : 5,
				timeout : timeout,
				closeWith : [ 'button' ],
				progressBar: true,
				animation: {
			        open: {
			        	height: 'toggle'
	        		},
			        close: {
			        	height: 'toggle'
	        		},
			        easing: 'swing',
			        speed: 500
			    }
			});
			break;
		case 'success':
			noty({
				type : type,
				text : msg,
				layout : 'topRight',
				theme : 'relax',
				dismissQueue : true,
				modal : modal,
				maxVisible : 5,
				timeout : timeout,
				closeWith : [ 'button' ],
				progressBar: true,
				animation: {
			        open: {
			        	height: 'toggle'
	        		},
			        close: {
			        	height: 'toggle'
	        		},
			        easing: 'swing',
			        speed: 500
			    }
			});
			break;
		case 'warning':
			noty({
				type : type,
				text : msg,
				layout : 'topRight',
				theme : 'relax',
				dismissQueue : true,
				modal : modal,
				maxVisible : 5,
				timeout : timeout,
				closeWith : [ 'button' ],
				progressBar: true,
				animation: {
			        open: {
			        	height: 'toggle'
	        		},
			        close: {
			        	height: 'toggle'
	        		},
			        easing: 'swing',
			        speed: 500
			    }
			});
			break;
		case 'error':
			noty({
				type : type,
				text : msg,
				layout : 'topRight',
				theme : 'relax',
				dismissQueue : true,
				modal : modal,
				maxVisible : 5,
				timeout : timeout,
				closeWith : [ 'button' ],
				progressBar: true,
				animation: {
			        open: {
			        	height: 'toggle'
	        		},
			        close: {
			        	height: 'toggle'
	        		},
			        easing: 'swing',
			        speed: 500
			    }
			});
			break;
		case 'information':
			noty({
				type : type,
				text : msg,
				layout : 'topRight',
				theme : 'relax',
				dismissQueue : true,
				modal : modal,
				maxVisible : 5,
				timeout : timeout,
				closeWith : [ 'button' ],
				progressBar: true,
				animation: {
			        open: {
			        	height: 'toggle'
	        		},
			        close: {
			        	height: 'toggle'
	        		},
			        easing: 'swing',
			        speed: 500
			    }
			});
			break;
		default:
			noty({
				type : 'alert',
				text : msg,
				layout : 'topRight',
				theme : 'relax',
				dismissQueue : true,
				modal : modal,
				maxVisible : 5,
				timeout : timeout,
				closeWith : [ 'button' ],
				progressBar: true,
				animation: {
			        open: {
			        	height: 'toggle'
	        		},
			        close: {
			        	height: 'toggle'
	        		},
			        easing: 'swing',
			        speed: 500
			    }
			});
			break;
	}
}

function blockUI(content) {
    if(!content)
        content = '<i class="fa fa-spinner fa-spin" style="font-size:54px"></i>'

	$.msg({
        fadeIn : 0,
        autoUnblock : false,
        clickUnblock : false,
        content : content
    });
};

function unblockUI() {
	$.msg('unblock');
};
