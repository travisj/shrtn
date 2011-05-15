(function(global){ 
	var head = document.getElementsByTagName('head')[0];
	_my_css=document.createElement('LINK');
	_my_css.type='text/css'; 
	_my_css.rel='stylesheet';
	_my_css.href='http://localhost:8888/assets/lib/aristo/css/Aristo/jquery-ui-1.8.7.custom.css';
	document.getElementsByTagName('head')[0].appendChild(_my_css); 

	_my_script=document.createElement('SCRIPT');
	_my_script.type='text/javascript'; 
	_my_script.src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js'; 
	document.getElementsByTagName('head')[0].appendChild(_my_script); 

	_my_script=document.createElement('SCRIPT');
	_my_script.type='text/javascript'; 
	_my_script.src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js'; 
	document.getElementsByTagName('head')[0].appendChild(_my_script); 

	_my_script=document.createElement('SCRIPT');
	_my_script.type='text/javascript'; 
	_my_script.src='http://localhost:8888/assets/js/bookmark.js'; 
	document.getElementsByTagName('head')[0].appendChild(_my_script); 

	global._shrtn_host = 'localhost:8888';
}
)(this);

