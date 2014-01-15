(function(){
	var bowser_version=getBrowserVersion();
	$("div#panel-configuration").append("<h3>How to display search results:</h3>");
	if(bowser_version.search("Chrome")>=0)
	{
		$("head").append("<link rel='stylesheet' href='css/effekt.css' type='text/css' />");
		$("div#panel-configuration").append('<span class="config-list">List&emsp;<input type="radio" name="group2" class="effeckt-rdio-ios7" checked></span>&emsp;');
		$("div#panel-configuration").append('<span class="config-box">Box&emsp;<input type="radio" name="group2" class="effeckt-rdio-ios7"></span>');
		
		$("div#panel-configuration").append("<h3>How to rank search results:</h3>");
		$("div#panel-configuration").append('<span class="config-normal">Normal&emsp;<input type="radio" name="group3" class="effeckt-rdio-ios7" checked></span>&emsp;');
		$("div#panel-configuration").append('<span class="config-round">Round Robin&emsp;<input type="radio" name="group3" class="effeckt-rdio-ios7"></span>');


		$("div#panel-configuration span input").click(function(){
			config_result($(this).parent().attr("class"));
		});
	}
	else
	{
		$("div#panel-configuration").append('<span class="other config-list active">List <i class="fa fa-list"></i></span>&emsp;');
		$("div#panel-configuration").append('<span class="other config-box">Box <i class="fa fa-th-large"></i></span>');

		$("div#panel-configuration").append("<h3>How to rank search results:</h3>");
		$("div#panel-configuration").append('<span class="other2 config-normal active">Normal <i class="fa fa-list-ol"></i></span>&emsp;');
		$("div#panel-configuration").append('<span class="other2 config-round">Round Robin <i class="fa fa-tasks"></i></span>');

		$("div#panel-configuration span.other").click(function(){
			$("div#panel-configuration span.other").removeClass("active");
			config_result($(this).toggleClass("other").attr("class"));
			$(this).addClass("other active");
		});

		$("div#panel-configuration span.other2").click(function(){
			$("div#panel-configuration span.other2").removeClass("active");
			config_result($(this).toggleClass("other2").attr("class"));
			$(this).addClass("other2 active");
		});
	}
})();
function config_result(exec)
{
	if(exec.localeCompare("config-list")==0)
	{
		$("link[href='css/box.css']").remove();
		$("head").append("<link rel='stylesheet' href='css/list.css' type='text/css' />");
	}
	else if(exec.localeCompare("config-box")==0)
	{
		$("link[href='css/list.css']").remove();
		$("head").append("<link rel='stylesheet' href='css/box.css' type='text/css' />");
	}
	else if(exec.localeCompare("config-normal")==0)
	{
		direct_rank();
	}
	else if(exec.localeCompare("config-round")==0)
	{
		round_robin();
	}
	else
			;
}
function resetConfigs()
{
	var bowser_version=getBrowserVersion();
	if(bowser_version.search("Chrome")>=0)
	{
		$("span.config-round input.effeckt-rdio-ios7").attr("checked",false);
	}
	else
	{
		$("span.other2").removeClass("active");
		$("span.config-normal").toggleClass("active");
	}
}