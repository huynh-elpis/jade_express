$(document).ready(function()
{
	$("<p>dùng jquery trong public không module.</p>").appendTo("h1");
	$('#anhien-noidung').on('click',function(){
		$('#noidung-data').toggle();
	});
});