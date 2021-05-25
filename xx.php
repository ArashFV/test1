<?php 
$g='f';

if($g=='f')
{
	$g2='female';
	$code='01';
	$face_count=10;
	$ear_count=8;
	$eye_count=31;
	$eyeb_count=20;
	$mouth_count=21;
	$nose_count=21;
	$hair_count=17;
}
else
{
	$g2='male';
	$code='00';
	$face_count=12;
	$ear_count=3;
	$eye_count=23;
	$eyeb_count=17;
	$mouth_count=18;
	$nose_count=18;
	$hair_count=18;
}



function a($a)
{
	if($a<10)
		return '0'.$a;
	else
		return $a;	
}
?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="AvatarBuilder.css" type="text/css" rel="stylesheet">
<title>Untitled Document</title>
<style>
ul{padding:0}
</style>
</head>

<body>

<div id="content">
    <div id="feature-panel">
     <div id="categorybox">
     <ul>
         <li class="face current male" data="face">
             <span>Face</span>
             <div class="loadingIndicator big"></div>
         </li>
         <li class="eyes male" data="eye">
             <span>Eyes</span>
             <div class="loadingIndicator big"></div>
         </li>
         <li class="brows male" data="eyebrow">
             <span>Eyebrows</span>
             <div class="loadingIndicator big"></div>
         </li>
         <li class="nose male" data="nose">
             <span>Nose</span>
             <div class="loadingIndicator big"></div>
         </li>
         <li class="mouth male" data="mouth">
             <span>Mouth</span>
             <div class="loadingIndicator big"></div>
         </li>
         <li class="ears male" data="ear">
             <span>Ears</span>
             <div class="loadingIndicator big"></div>
         </li>
         
         <li class="hair <?php echo $g2 ?>" data="hair">
    		<span>Hair</span>
			<div class="loadingIndicator big"></div>
		</li>

     </ul>
    </div>
        <div id="itembox">
            <div id="featureContainer">
                <ul id="face_list">
				<?php 
					for($i=1;$i<=$face_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/faces-'.$g2.'-'.$i.'.png"></img>
                    </li>';
				?>
             	</ul>
                <ul id="mouth_list">
				<?php 
					for($i=1;$i<=$mouth_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/mouth-'.$g2.'-'.$i.'.png"></img>
                    </li>';
				?>
             	</ul>
                <ul id="nose_list">
				<?php 
					for($i=1;$i<=$nose_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/nose-'.$g2.'-'.$i.'.png"></img>
                    </li>';
				?>
             	</ul>
                <ul id="eye_list">
				<?php 
					for($i=1;$i<=$eye_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/eyes-'.$g2.'-'.$i.'.png"></img>
                    </li>';
				?>
             	</ul>
                <ul id="eyebrow_list">
				<?php 
					for($i=1;$i<=$eyeb_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/eyebrows-'.$g2.'-'.$i.'.png"></img>

                    </li>';
				?>
             	</ul>
                <ul id="ear_list">
				<?php 
					for($i=1;$i<=$ear_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/ears-'.$g2.'-'.$i.'.png"></img>
                    </li>';
				?>
             	</ul>
                
                
                <ul id="hair_list">
				<?php 
					for($i=1;$i<=$hair_count;$i++)
						echo '<li data="'.a($i).'">
                    	<em><span class="actionItem">Click to select</span></em>
						<img width="69" height="69" alt="" src="parts/prev/hair-'.$g2.'-'.$i.'.png"></img>
                    </li>';
				?>
             	</ul>
                
                
            </div>
        </div> 
        <div id="schemepicker" class="">
            <div id="paletteContainer">
            
                <ul class="schemes" id="face_color">
                    <li style="background-color: #fff3ea;" data="01">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #ffe5d6;" data="02">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #ffd6c2;" data="03">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #edc0ab;" data="04">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #d0a189;" data="05">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #d79478;" data="06">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #896c5e;" data="07">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                </ul>
                
				<ul class="schemes" id="mouth_color">
                    <?php if($g=='f') echo '<li style="background-color: #f6e6de;" data="01">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #efd3c4;" data="02">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #ddb29b;" data="03">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #bd9784;" data="04">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #ba8d76;" data="05">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #996e56;" data="06">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #e479da;" data="07">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #a238c8;" data="08">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #e02525;" data="09">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #bd3676;" data="10">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #b39024;" data="11">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #66b72e;" data="12">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>';?>
                </ul>
                
                <ul class="schemes" id="nose_color"></ul>
                
                <ul class="schemes" id="eye_color">
                 	<li style="background-color: #333;" data="01">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #145eb1;" data="02">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #4d8fd8;" data="03">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #256425;" data="04">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #3ac57f;" data="05">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #5b3e22;" data="06">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #77611c;" data="07">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                </ul>
                
				<ul class="schemes" id="eyebrow_color">
                	<li style="background-color: #000;" data="01">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #333;" data="02">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #797979;" data="03">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #d1d1d1;" data="04">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #eee;" data="05">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #564530;" data="06">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #735b3c;" data="07">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #8c683b;" data="08">
                        <span class="circle"></span>
                    </li>
                    <li style="background-color: #68331d;" data="09">
                        <span class="circle"></span>
                    </li>
                </ul> 
                    
                <ul class="schemes" id="ear_color"></ul>
         
         		<ul class="schemes" id="hair_color">
                 	<li style="background-color: #000;" data="01">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #e7d48f;" data="02">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #e2cb77;" data="03">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #dcc05b;" data="04">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #d4b135;" data="05">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #b29326;" data="06">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #90771f;" data="07">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #6f5c18;" data="08">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #ce8a2c;" data="09">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #b17726;" data="10">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #8c5e1e;" data="11">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #654416;" data="12">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #d26363;" data="13">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #b93636;" data="14">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #962c2c;" data="15">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #9e1616;" data="16">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #0dd2d2;" data="17">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #1cc2c2;" data="18">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #2db2b2;" data="19">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #3ea1a1;" data="20">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #277b7b;" data="21">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #30d30b;" data="22">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #3bc21c;" data="23">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #46b22d;" data="24">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #50a13e;" data="25">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #367b27;" data="26">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #434343;" data="27">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #5a5a5a;" data="28">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #989898;" data="29">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #ac643d;" data="30">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                    <li style="background-color: #3d95ac;" data="31">
                        <span class="circle identifier-skin-bright-1"></span>
                    </li>
                </ul>
            </div>
    	</div>
       </div>

	<div id="preview-panel">



        <span id="avatarDummy-iTHNJOc4hY" class="avatar profile">
            <span class="imageContainer">
                <img id="preview" alt="" src="" style="opacity: 1;"></img>
                <div class="loadingAV" style="display:none" id="loading"></div>
            </span>
        </span>
        <div class="yellow">
            <button id="save" class="button green l widthS symbol-rightArrow" data-saveurl="/avatarbuilder/save/873675a4956005266b9a1c007cbff631">
                <span>Save<em></em>
                </span>
            </button>
            <p class="subtext">
                <small>21</small>
            </p>
        </div>
        
	</div>
</div>
<script src="../js/jquery-1.9.1.js"></script>
<script>

var code='',mco='05',nco='01',eaco='01',eyco='01',fco='01',eybco='05',colco='05',mocolco<?php if($g=='m') echo '="01"'; else echo '="06"'; ?>,eycolco='06',eybcoco='02',haco='15',hacoco='12';

$('#face_list li').click(function() {
	fco=$(this).attr( "data" );
});
$('#face_color li').click(function() {
	colco=$(this).attr( "data" );
});

$('#mouth_list li').click(function() {
	mco=$(this).attr( "data" );
});
$('#mouth_color li').click(function() {
	mocolco=$(this).attr( "data" );
});

$('#nose_list li').click(function() {
	nco=$(this).attr( "data" );
});
$('#ear_list li').click(function() {
	eaco=$(this).attr( "data" );
});

$('#eye_list li').click(function() {
	eyco=$(this).attr( "data" );
});
$('#eye_color li').click(function() {
	eycolco=$(this).attr( "data" );
});

$('#eyebrow_list li').click(function() {
	eybco=$(this).attr( "data" );
});
$('#eyebrow_color li').click(function() {
	eybcoco=$(this).attr( "data" );
});

$('#hair_list li').click(function() {
	haco=$(this).attr( "data" );
});
$('#hair_color li').click(function() {
	hacoco=$(this).attr( "data" );
});


$('#save').click(function() {
	code='<?php echo $code ?>'+fco+''+colco+''+eaco+''+mco+''+mocolco+''+nco+''+eybco+''+eybcoco+''+eyco+''+eycolco+''+haco+''+hacoco;
	$.get( "build.php", { d: code } )
	.done(function( data ) {
		alert( "Data Loaded: " + data );
	});
});
$('#schemepicker li').click(function() {
	render()
});
$('#itembox li').click(function() {
	render()
});
$('#categorybox li').click(function() {
	$('#itembox ul').hide();
	$('#schemepicker ul').hide();
	
	$('#categorybox li').removeClass('current');
	$('#'+$(this).attr( "data" )+'_list').show();
	$('#'+$(this).attr( "data" )+'_color').show();
	$(this).addClass('current');
});



$('#schemepicker li').click(function() {
	$(this).parent().children('li').children('span').removeClass('current');
	$(this).children('span').addClass('current');
});
$('#itembox li').click(function() {
	$(this).parent().children('li').removeClass('current');
	$(this).addClass('current');
});
var busy=false
function render()
{
	if(!busy)
	{
		busy=true;
		code='<?php echo $code ?>'+fco+''+colco+''+eaco+''+mco+''+mocolco+''+nco+''+eybco+''+eybcoco+''+eyco+''+eycolco+''+haco+''+hacoco;
		//alert(code);
		$('#loading').fadeIn( "slow" )
		
		$('#preview').attr('src','m3.php?d='+code)
		.load(function() {
				busy=false
				$('#loading').fadeOut( "fast" )
		});
	}
}

</script>
</body>
</html>