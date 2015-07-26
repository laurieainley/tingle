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

  var clips = ["https://api.soundcloud.com/tracks/216401297/download?secret_token=s-BlM2I&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-6b668b68c082b",
  "https://api.soundcloud.com/tracks/216401244/download?secret_token=s-4LYuj&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-6b668b68c082b",
  "https://api.soundcloud.com/tracks/216401532/download?secret_token=s-VBJLs&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-6b668b68c082b"
  ];

  var index = 0;

	var player = new CirclePlayer("#tingle_player",
	{
		oga: "https://api.soundcloud.com/tracks/216401156/download?secret_token=s-ecL0w&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-6b668b68c082b",
		// oga: "https://api.soundcloud.com/tracks/216393180/download?secret_token=s-fY6Cf&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-587b42da21a20"
		// oga: "https://api.soundcloud.com/tracks/216393354/download?secret_token=s-jZbNr&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-587b42da21a20"
		// oga: "https://api.soundcloud.com/tracks/216393283/download?secret_token=s-FYzkP&client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea&oauth_token=1-138878-164967880-587b42da21a20"
	}, {
		cssSelectorAncestor: "#cp_container_1"
	});

	$('#tingle_player').bind($.jPlayer.event.ended, function() {
		console.log(clips[index]);
		$(this).jPlayer("clearMedia").jPlayer("setMedia", {
			oga: clips[index]
		});
		index++;
	});

	$(".cp-play").unbind();
	$(".cp-circle-control").unbind();
	$(".cp-play").on('vmousedown', function(e){
		e.preventDefault();
		alert("test");
		$("#tingle_player").jPlayer("playHead", 0).jPlayer("play");
		return false;
	});
	$(".cp-play").on('vmouseup', function(e){
		e.preventDefault();
		alert("test2");
		$("#tingle_player").jPlayer("stop");
		return false;
	});
	if($(".main-container").attr("id") == "discover") {
		$.get("../api/prospect.php", "user_id=4", function(data) {
			console.log(data);
			prospects = data;
			currentProspect = 0;
			loadProspect(currentProspect);
		});

	}

	var recordings = user[0];
	var currentClip = 0; 
	
	function loadProspect(index) {
		user = prospects[index];
		currentClip = 0;
		$("#match-name").html(user.name);
		$("#match-age").html(user.age);
		$("#match-location").html(user.location);
	
		for(i = 0; i < recordings.length; i++) {

			$("#tingle_player").jPlayer("clearMedia").jPlayer("setMedia", {
				oga: recordings[currentClip]		
			}

		});

		}

	}
});

$(document).on('pagebeforeshow', '.ui-page', function(){ 

});