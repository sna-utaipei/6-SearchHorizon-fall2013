var fb_status="not_authorized";
window.fbAsyncInit = function(){
	FB.init({
		appId :'496443573808733',
		cookie : true,
		status : true,
		xfbml : true
	});

	window.fbLoaded=FB.Event.subscribe('auth.authResponseChange',function(response){
		if(response.status === 'connected')
		{
			fb_status='connected';
		}
		else if(response.status === "not_authorized")
		{
			fb_status='not_authorized';
		}
		else
		{
			fb_status='else';
		}
	});
	$("div.upgrade").click(function(){
	   if(fb_status!=='connected')
		{
			FB.login(function(response){
				if (response.authResponse) {
				setCookie("9b8c48ff2615bb3a7a152f2b55cb4f05",response.authResponse.accessToken,365);
                FB.api('/me', function(response) {
                	setCookie("fb_uid",response.id,365);
                	alert("Login Success");
                });
                certify();
               } else {
                   // The person cancelled the login dialog
               }
			},{scope:'user_likes,user_friends,publish_actions,publish_stream,read_friendlists,read_stream,user_actions.news,friends_actions.news'});
			// ,friends_actions.video ,user_online_presence ,user_games_activity,friends_actions.music ,friends_games_activity ,friends_online_presence ,user_actions.music ,user_actions.video
			$("div.upgrade").remove();
		}
	   else
	   {
   		    FB.api('/me', function(response) {
            	setCookie("fb_uid",response.id,365);
            });
           $("div.upgrade").remove();
	   	}
	});
};

	// Load the SDK asynchronously
   (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       //js.src = "http://connect.facebook.net/en_US/all.js";
       // Debug version of Facebook JS SDK
       js.src = "http://connect.facebook.net/en_US/all/debug.js";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function setCookie(cname,cvalue,exdays)
{
var d = new Date();
d.setTime(d.getTime()+(exdays*24*60*60*1000));
var expires = "expires="+d.toGMTString();
document.cookie = cname + "=" + cvalue + "; " + expires;
}