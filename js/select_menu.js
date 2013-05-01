option = '#' + window.location.pathname.split('/')[1];
if (option === "#"){
	option = '#index';
}
$(option).addClass('active');
