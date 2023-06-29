<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/player/volume.css">
	<link rel="stylesheet" type="text/css" href="js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>
	<!----Main Wrapper Start---->
	<div class="ms_main_wrapper ms_profile">
		<!---Side Menu Start--->
        <div class="ms_sidemenu_wrapper">
            <div class="ms_nav_close">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="ms_sidemenu_inner">
                <div class="ms_logo_inner">
                    <div class="ms_logo">
                        <a href="index.html"><img src="images/logo.png" alt="" class="img-fluid"/></a>
                    </div>
                </div>
                <div class="ms_nav_wrapper">
                    <ul>
                        <li><a href="index.html" class="active" title="Discover">
						<span class="nav_icon">
							<span class="icon icon_discover"></span>
						</span>
						<span class="nav_text">
							discover
						</span>
						</a>
                        </li>
                        <li><a href="album.html" title="Albums">
						<span class="nav_icon">
							<span class="icon icon_albums"></span>
						</span>
						<span class="nav_text">
							albums
						</span>
						</a>
                        </li>
                        <li><a href="free_music.html" title="Free Music">
						<span class="nav_icon">
							<span class="icon icon_music"></span>
						</span>
						<span class="nav_text">
							free music
						</span>
						</a>
                        </li>
                    </ul>
                    <ul class="nav_downloads">
                        <li><a href="download.html" title="Downloads">
						<span class="nav_icon">
							<span class="icon icon_download"></span>
						</span>
						<span class="nav_text">
							downloads
						</span>
						</a>
                        </li>
                        <li><a href="purchase.html" title="Purchased">
						<span class="nav_icon">
							<span class="icon icon_purchased"></span>
						</span>
						<span class="nav_text">
							purchased
						</span>
						</a>
                        </li>
                        <li><a href="favourite.html" title="Favourites">
						<span class="nav_icon">
							<span class="icon icon_favourite"></span>
						</span>
						<span class="nav_text">
							favourites
						</span>
						</a>
                        </li>
                        <li><a href="history.html" title="History">
						<span class="nav_icon">
							<span class="icon icon_history"></span>
						</span>
						<span class="nav_text">
							history
						</span>
						</a>
                        </li>
                    </ul>
                    <ul class="nav_playlist">
                        <li><a href="feature_playlist.html" title="Featured Playlist">
						<span class="nav_icon">
							<span class="icon icon_fe_playlist"></span>
						</span>
						<span class="nav_text">
							featured playlist
						</span>
						</a>
                        </li>
                        <li><a href="add_playlist.html" title="Create Playlist">
						<span class="nav_icon">
							<span class="icon icon_c_playlist"></span>
						</span>
						<span class="nav_text">
							create playlist
						</span>
						</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<!---Main Content Start--->
		<div class=" padder_top80">
			<!---Header--->
			<div class="ms_header">
                <div class="ms_top_left">
                    <div class="ms_top_search">
                        <input type="text" class="form-control" placeholder="Search Music Here..">
                        <span class="search_icon">
							<img src="images/svg/search.svg" alt="">
						</span>
                    </div>
                </div>
                <div class="ms_top_right">
                    <div class="ms_top_lang">
                        <span data-toggle="modal" data-target="#lang_modal">languages <img src="images/svg/lang.svg" alt=""></span>
                    </div>
                    <div class="ms_top_btn">
                        <a href="upload.html" class="ms_btn">upload</a>
                        <a href="javascript:;" class="ms_admin_name">Hello <span class="ms_pro_name">ns</span>													
						</a>
						<ul class="pro_dropdown_menu">
							<li><a href="profile.php">Profile</a></li>
							<li><a href="manage_acc.php" target="_blank">Pricing Plan</a></li>
							<li><a href="">Setting</a></li>
							<li><a href="">Logout</a></li>
						</ul>
                    </div>
                </div>
            </div>
			<!----Edit Profile Wrapper Start---->
			<div class="ms_account_wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2>Manage Account</h2>
							<div class="ms_heading">
								<h1>Subscription Plans</h1>
							</div>
						</div>
						<div class="col-lg-4">
						 <div class="ms_plan_box">
							<div class="ms_plan_header">
								<div class="ms_plan_img">
									<img src="images/plan_icon1.png" alt="">
								</div>
							</div>
							<h3 class="plan_heading">Basic</h3>
							<div class="plan_price"><div class="plan_dolar"><sup>$</sup>15</div></div>
							<ul>
								<li>Monthly Downloads - 50 Songs</li>
								<li>Monthly Upload - 50 Minutes</li>
								<li>Plan Validity - 1 Month</li>
								<li>Streaming - Unlimited</li>
							</ul>
							<div class="ms_plan_btn">
							<a href="#" class="ms_btn">buy now</a>
							</div>
						</div>
						</div>
						<div class="col-lg-4">
						 <div class="ms_plan_box paln_active">
							<div class="ms_plan_header">
								<div class="ms_plan_img">
									<img src="images/plan_icon2.png" alt="">
								</div>
							</div>
							<h3 class="plan_heading">Professional</h3>
							<div class="plan_price"><div class="plan_dolar"><sup>$</sup>50</div></div>
							<ul>
								<li>Monthly Downloads - 50 Songs</li>
								<li>Monthly Upload - 50 Minutes</li>
								<li>Plan Validity - 1 Month</li>
								<li>Streaming - Unlimited</li>
							</ul>
							<div class="ms_plan_btn">
								<a href="#" class="ms_btn">buy now</a>
							</div>
						</div>
						</div>
						<div class="col-lg-4">
						 <div class="ms_plan_box">
							<div class="ms_plan_header">
								<div class="ms_plan_img">
									<img src="images/plan_icon3.png" alt="">
								</div>
							</div>
							<h3 class="plan_heading">Standard</h3>
							<div class="plan_price"><div class="plan_dolar"><sup>$</sup>80</div></div>
							<ul>
								<li>Monthly Downloads - 50 Songs</li>
								<li>Monthly Upload - 50 Minutes</li>
								<li>Plan Validity - 1 Month</li>
								<li>Streaming - Unlimited</li>
							</ul>
							<div class="ms_plan_btn">
							<a href="#" class="ms_btn">buy now</a>
							</div>
						</div>
						</div>						
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="ms_acc_overview">
								<div class="ms_heading">
									<h1>Account Overview</h1>
								</div>
								<div class="ms_acc_ovrview_list">
								<ul>
									<li>Your Subscribed Plan  <span>- Standard</span></li>
									<li>Amount Paid  		  <span>- $30</span></li>
									<li>Validity Expires In   <span>- 15 Days</span></li>
									<li>Downloads Remaining   <span>- 21 Tracks</span></li>
									<li>Upload Remaining      <span>- 45 Minutes</span></li>
								</ul>
								<a href="#" class="ms_btn">renew now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!----Audio Player Section---->
        <div class="ms_player_wrapper">
			<div class="ms_player_close">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</div>
            <div class="player_mid">
                <div class="audio-player">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="player_left">
                            <div class="ms_play_song">
                                <div class="play_song_name">
                                    <a href="javascript:void(0);" id="playlist-text">
                                        <div class="jp-now-playing flex-item">
                                            <div class="jp-track-name"></div>
                                            <div class="jp-artist-name"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="play_song_options">
                                <ul>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_download"></i></span>download now</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Add To Favourites</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Add To Playlist</a></li>
                                    <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Share</a></li>
                                </ul>
                            </div>
                            <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </div>
                        <!----Right Queue---->
                       <div class="jp_queue_wrapper">
                            <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> queue</span>
                            <div id="playlist-wrap" class="jp-playlist">
								<div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                                <h2>queue</h2>
								<div class="jp_queue_list_inner">
									<ul>
										<li>&nbsp;</li>
									</ul>
								</div>
                                <div class="jp_queue_btn">
                                    <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">clear</a>
                                    <a href="clear_modal" class="ms_save" data-toggle="modal" data-target="#save_modal">save</a>
                                </div>
                            </div>
                        </div>
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface flex-wrap">
                                <div class="jp-controls flex-item">
                                    <button class="jp-previous" tabindex="0">
					<i class="ms_play_control"></i>
				</button>
                                    <button class="jp-play" tabindex="0">
					<i class="ms_play_control"></i>	
				</button>
                                    <button class="jp-next" tabindex="0">
					<i class="ms_play_control"></i>
				</button>
                                </div>
                                <div class="jp-progress-container flex-item">
                                    <div class="jp-time-holder">
                                        <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                        <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                    </div>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar">
                                                <div class="bullet">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-volume-controls flex-item">
                                    <div class="widget knob-container">
                                        <div class="knob-wrapper-outer">
                                            <div class="knob-wrapper">
                                                <div class="knob-mask">
                                                    <div class="knob d3"><span></span></div>
                                                    <div class="handle"></div>
                                                    <div class="round">
                                                        <img src="images/svg/volume.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <input></input> -->
                                     </div>
                                    </div>
                                </div>
                                <div class="jp-toggles flex-item">
                                    <button class="jp-shuffle" tabindex="0" title="Shuffle">
				<i class="ms_play_control"></i></button>
				<button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i></button>
                                </div>
								<script>$("#quality-select").on('change',function(){
onChangeQuality($("#quality-select").val());
});

function onChangeQuality(selectedValue){</script>
<div class="jp_quality_optn custom_select">
                                    <select>
						<option>quality</option>
						<option value="1">HD</option>
						<option value="2">High</option>
						<option value="3">medium</option>
						<option value="4">low</option>
					</select>
                                </div>
<script>}</script>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <!----Register Modal Start---->
    <!-- Modal -->
    <div class="ms_register_popup">
        <div id="myModal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog register_dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
						<i class="fa_icon form_close"></i>
					</button>
                    <div class="modal-body">
                        <div class="ms_register_img">
                            <img src="images/register_img.png" alt="" class="img-fluid" />
                        </div>
                        <div class="ms_register_form">
                            <h2>Register / Sign Up</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Name" class="form-control">
                                <span class="form_icon">
							<i class="fa_icon form-user" aria-hidden="true"></i>
							</span>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <span class="form_icon">
							<i class="fa_icon form-envelope" aria-hidden="true"></i>
						</span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                                <span class="form_icon">
						<i class="fa_icon form-lock" aria-hidden="true"></i>
						</span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control">
                                <span class="form_icon">
						<i class=" fa_icon form-lock" aria-hidden="true"></i>
						</span>
                            </div>
                            <a href="#" class="ms_btn">register now</a>
                            <p>Already Have An Account? <a href="#myModal1" data-toggle="modal" class="ms_modal hideCurrentModel">login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Login Popup Start---->
        <div id="myModal1" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog login_dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
						<i class="fa_icon form_close"></i>
					</button>
                    <div class="modal-body">
                        <div class="ms_register_img">
                            <img src="images/register_img.png" alt="" class="img-fluid" />
                        </div>
                        <div class="ms_register_form">
                            <h2>login / Sign in</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <span class="form_icon">
							<i class="fa_icon form-envelope" aria-hidden="true"></i>
						</span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                                <span class="form_icon">
						<i class="fa_icon form-lock" aria-hidden="true"></i>
						</span>
                            </div>
                            <div class="remember_checkbox">
                                <label>Keep me signed in
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
                            </div>
                            <a href="#" class="ms_btn">login now</a>
                            <div class="popup_forgot">
                                <a href="#">Forgot Password ?</a>
                            </div>
                            <p>Don't Have An Account? <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Language Selection Modal---->
    <div class="ms_lang_popup">
        <div id="lang_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
						<i class="fa_icon form_close"></i>
					</button>
                    <div class="modal-body">
                        <h1>language selection</h1>
                        <p>Please select the language(s) of the music you listen to.</p>
                        <ul class="lang_list">
                            <li>
                                <label class="lang_check_label">
							English 
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							hindi
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							punjabi
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							French
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							 German 
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							Spanish
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							Chinese
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							Japanese 
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							Arabic
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                            <li>
                                <label class="lang_check_label">
							 Italian
							<input type="checkbox" name="check"> 
							<span class="label-text"></span>
							</label>
                            </li>
                        </ul>
                        <div class="ms_lang_btn">
                            <a href="#" class="ms_btn">apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!----Queue Clear Model ---->
	<div class="ms_clear_modal">
		<div id="clear_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
						<i class="fa_icon form_close"></i>
					</button>
                    <div class="modal-body">
						<h1>Are you sure you want to clear your queue?</h1>
						<div class="clr_modal_btn">
							<a href="#">clear all</a>
							<a href="#">cancel</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!----Queue Save Modal---->
	<div class="ms_save_modal">
		<div id="save_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
						<i class="fa_icon form_close"></i>
					</button>
                    <div class="modal-body">
						<h1>Log in to start sharing your music!</h1>
						<div class="save_modal_btn">
							<a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> continue with google </a>
							<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> continue with facebook</a>
						</div>
						<div class="ms_save_email">
							<h3>or use your email</h3>
							<div class="save_input_group">
								<input type="text" placeholder="Enter Your Name" class="form-control">
							</div>
							<div class="save_input_group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                            </div>
							<button class="save_btn">Log in</button>
						</div>
						<div class="ms_dnt_have">
						    <span>Dont't have an account ?</span>
							<a href="javascript:;" class="hideCurrentModel" data-toggle="modal" data-target="#myModal">Register Now</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
	</div>

	<script>$(document).ready(function(){
    $("#jplayer").jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
                title: "Song Title",
                mp3: "musics/Ba Estedad.mp3",
            });
        },
        play: function() { // زمانیکه آهنگ پخش می شود
            $('.jp-play-bar').addClass('jp-play-bar-active');
        },
        pause: function() { // زمانیکه آهنگ متوقف شود
            $('.jp-play-bar').removeClass('jp-play-bar-active');
        },
        swfPath: "path/to/jquery.jplayer.swf",
        supplied: "mp3",
        wmode: "window",
        volume: 0.8,
        muted: false,
    });

    $('.jp-play-bar').click(function(e) { // وقتی روی نوار پخش کلیک شد، آهنگ را پخش می کند
        var posX = $(this).offset().left;
        var barWidth = $(this).outerWidth();
        var percentageClicked = (e.pageX - posX) / barWidth;
        var player = $("#jplayer");
        player.jPlayer("play", player.data().jPlayer.status.currentTime * percentageClicked);
    });
});
	
	$(document).ready(function() {
    $("#jplayer").bind($.jPlayer.event.setvolume, function(event) {
        var value = event.jPlayer.options.volume;
        $('.knob').trigger('configure', {
            "max": 1,
            "fgColor":"#77C151",
            "inputColor":"#736757",
            "release": function(event, ui) {
                $('#jplayer').jPlayer('volume', ui.value);
            },
            "change": function(event, ui) {
                $('#jplayer').jPlayer('volume', ui.value);
            }
        });
        $('.knob').val(value).trigger("change");
    });
});
		
		

		
	</script>

    <!--Main js file Style-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/audio-player.js"></script>
	<script type="text/javascript" src="js/plugins/player/volume.js"></script>
    <script type="text/javascript" src="js/plugins/nice_select/jquery.nice-select.min.js"></script>
	<script type="text/javascript" src="js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>