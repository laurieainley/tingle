$(document).ready(function(){

	/*
	 * Instance CirclePlayer inside jQuery doc ready
	 *
	 * CirclePlayer(jPlayerSelector, media, options)
	 *   jPlayerSelector: String - The css selector of the jPlayer div.
	 *   media: Object - The media object used in jPlayer("setMedia",media).
	 *   options: Object - The jPlayer options.
	 *
	 * Multiple instances must set the cssSelectorAncestor in the jPlayer options. Defaults to "#cp_container_1" in CirclePlayer.
	 */

	var player = new CirclePlayer("#tingle_player",
	{
		oga: "https://api.soundcloud.com/tracks/216345518/download?secret_token=s-qxbOP&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-587b42da21a20"
	}, {
		cssSelectorAncestor: "#cp_container_1"
	});

	$(".cp-play").unbind();
	$(".cp-play").unbind();

	$(".cp-play").taphold(function(){
		$("tingle_player").jPlayer("playHead", 0).jPlayer("play");
	});

});