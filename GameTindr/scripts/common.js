$(document).ready(function()
{
  $('#headerLoginDialog').click(function()
  	{
  		$('#headerLoginBox').slideDown();
  	});
  	$('#login-submit').click(function()
  	{
  		$('#headerLoginBox').slideUp();
  	});
});
