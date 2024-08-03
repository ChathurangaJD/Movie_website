<?php
    session_start();

	$con=mysqli_connect('localhost','root','','movie nation');
?>
<html>
	<head>
	<style>
		body{
            margin: 0;
		background-color:#222;
        }
        #main{
            height: 60px;
            width: 100%;
            background-color: #222222;
            position: fixed;
            z-index: 9999;
        }
        #menu{
           padding-top: 5px; 
            float: left;
        }
        ul{
            list-style: none;
        }
        li{
            display: inline;
            margin-left: 50px;
            color:white;
            font-family: arial;
            font-size:15px;
        }
        li:first-child{
            color:yellow;
            text-shadow:0px 0px 10px #94c82f;
        }
        #search{
            float: right;
            padding-top: 15px;
            margin-right: 50px;
        }
        #search input{
            height: 30px;
            width: 180px;
            text-align: center;
            background-color: transparent;
            padding: 5px;
            color: #94c82f;
            border: 1px solid #94c82f;
            outline: none;
            box-shadow: 0px 0px 10px #94c82f;
            font-family: arial;
            border-radius: 5px;
            margin-right: 20px;
        }
        #logo{
            height: 80px;
            width: 100px;
            float: left;
            margin-left:17%;
            margin-top: 10px;
            transform: rotate(-10deg);
        }
		#flogo{
			height: 120px;
            width: 120px;
		}
		#fmenu li{
			font-size: 20px;
			color:yellow;
		}
        a{
            color:white;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #a3{
            color:#94c82f;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #gifts{
		color:white;
		font-family:arial;
           text-shadow:0px 0px 10px #94c82f;
		margin-right:30px;
            text-decoration: none;
	}
	#offers{
		color:white;
		font-family:arial;
           text-shadow:0px 0px 10px #94c82f;
		margin-right:30px;
            text-decoration: none;
	}
	.poster{
		height:250px;
		width:250px;
		//padding:50px;
		margin-top:50px;
	}
	#postertable{
		padding-top:100px;
	}
	#videotitle{
		font-family:arial;
		color: #fff;;
		font-size:18px;
		text-align:center;
	}
	.playbtn{
		height:250px;
		width:250px;
		background-color:rgba(34,34,34,.4);
		position:relative;
		margin-top:-250px;
		left:0%; 
		opacity:0;	
		transition:all .6s;
	}
	.playbtn img{
		position:relative;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
	}
	.poster:hover .playbtn{
		opacity:1;
	}
	</style>
	</head>
	<body>
		<div id="main">
            <div id="menu">
                <ul>
                    <li><a href="Home.php" id="a1">HOME</a></li>
                    <li><a href="Movies.php" id="a2">MOVIES</a></li>
                    <li><a href="Videos.php" id="a3">VIDEOS</a></li>
                </ul>
            </div>
            <div id="logo">
                <img src="logo1.png" height="100%" width="100%"/>
            </div>
            <div id="search">
                <table border="0">
                    <tr>
			<td>
				<a href="Offers.php" id="offers">OFFERS</a>
			</td>
			<td>
				<a href="Gift.php" id="gifts">GIFTS</a>
			</td>
                        <td>
                            <?php
                                if(isset($_SESSION['uname']))
                                {
                                    ?>
                                        <a href="" id="una"><?php echo $_SESSION['uname'];?></a>
                                    <?php
                                }
                                else
                                {
                                  ?>
                                <a href="User Login.php" id=""><img src="user icon.png" height="30px" width="30px"/></a>
                                <?php
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
	<div id="video">
		<table border="0" id="postertable" align="center" cellspacing="50">
		<tr>
			<td align="center" id="videotitle" colspan="4">UPCOMING SHOWS</td>
		</tr>
		<tr>
		<?php
			$query="select * from video where id>=1 AND id<=4";
			$res=mysqli_query($con,$query);
			while($data=mysqli_fetch_array($res))
			{
		?>
			<td class="poster">
				<a href="video.php?vid=<?php echo $data['id'];?>">
				<img src="poster\<?php echo $data['poster'];?>" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
                      
		 		</a>
			</td>
			
			<?php
				}
			?>
			</tr>
			<tr>
			<?php
				$query="select * from video where id>=5 AND id<=8";
				$res=mysqli_query($con,$query);
				while($data=mysqli_fetch_array($res))
				{
			?>
			<td class="poster">
				<a href="video.php?vid=<?php echo $data['id'];?>">
				<img src="poster\<?php echo $data['poster'];?>" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</a>
			</td>
			<?php
				}
			?>
			</tr>
			<tr>
			<?php
				$query="select * from video where id>=9 AND id<=12";
				$res=mysqli_query($con,$query);
				while($data=mysqli_fetch_array($res))
				{
			?>
			?>
			<td class="poster">
				<a href="video.php?vid=<?php echo $data['id'];?>">
				<img src="poster\<?php echo $data['poster'];?>" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			</a>
			<?php
				}
			?>
			</tr>
			<!--<td class="poster">
				<img src="poster\captain-nawab-emraan-hashmi-upcoming-movie-release-date-poster-star-cast-mt-wiki-2017.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
		</tr>
		<tr>
			<td class="poster">
				<img src="poster\don 3.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\Tubelight-Releasing-on-June-2017-Upcoming-Bollywood-Movies.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\Coffee-with-D-Full-Movie-Watch-Online-Download.jpg.pagespeed.ce.AOJcJblChJ.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\captain-nawab-emraan-hashmi-upcoming-movie-release-date-poster-star-cast-mt-wiki-2017.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
		</tr>
		<tr>
			<td class="poster">
				<img src="poster\don 3.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\Tubelight-Releasing-on-June-2017-Upcoming-Bollywood-Movies.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\Coffee-with-D-Full-Movie-Watch-Online-Download.jpg.pagespeed.ce.AOJcJblChJ.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\captain-nawab-emraan-hashmi-upcoming-movie-release-date-poster-star-cast-mt-wiki-2017.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
		</tr>
		<tr>
			<td class="poster">
				<img src="poster\don 3.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\Tubelight-Releasing-on-June-2017-Upcoming-Bollywood-Movies.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\Coffee-with-D-Full-Movie-Watch-Online-Download.jpg.pagespeed.ce.AOJcJblChJ.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
			<td class="poster">
				<img src="poster\captain-nawab-emraan-hashmi-upcoming-movie-release-date-poster-star-cast-mt-wiki-2017.jpg" height="250px" width="250px"/>
				<div class="playbtn"><img src="play-button.png" height="100px" width="100px"/></div>
			</td>
		</tr>-->
	</div>
<div id="fottor">
		<table border="0" width="100%">
			<tr align="center">
				<td>
					<div id="flogo">
             				   <img src="logo1.png" height="100%" width="100%"/>
         				</div>
				</td>
				<td>
					<ul id="fmenu">
						<li> <a href="Home.php">HOME</a></li><br>
						<li>VIDEOS</li>	<br>
						<li>2024</li><br>
				
					</ul>
				</td>
				<td>
					<table border="0">
						<tr align="center">
							<td colspan="3" id="follow">
								FOLLOW US
							</td>
						</tr>
						<tr>
						<td>	
								<a href="https://www.facebook.com/dimuthu.perera.1023?mibextid=D4KYlr" > <img src="poster/facebook.png" height="50px" width="50px"/>
							</td>
							<td>	
							<a href="https://instagram.com/thuwan_sajin?igshid=OGQ5ZDc2ODk2ZA==" >	<img src="poster/insta.png" height="50px" width="50px"/>
							</td>
							<td>	
							<a href="https://twitter.com/sajin_thuwan" ><img src="poster/twitter.png" height="50px" width="50px"/>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	
	</body>
</html>