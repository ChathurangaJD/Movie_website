<?php
    session_start();
	$con=mysqli_connect('localhost','root','','movie nation');

    $query="select * from gift" ;

    $res=mysqli_query($con,$query);
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
            color:#94c82f;
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
	padding-right:2px;
            margin-left:17%;
            margin-top: 10px;
		background-color:#222;
            transform: rotate(-10deg);
		z-index:9999;
        }
        a{
            color:white;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        
        #gifts{
		font-family:arial;
		margin-right:30px;
		color:#94c82f;
            	text-shadow:0px 0px 10px #94c82f;
            	text-decoration: none;
	}
	#offers{
		
		font-family:arial;
		margin-right:30px;
		 color:white;
            	text-shadow:0px 0px 10px #94c82f;
            	text-decoration: none;
	}
	#postertable{
		padding-top:100px;
	}
	#videotitle{
		font-family:arial;
		color:#94c82f;
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
	#cardtable{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
	}
	#card1{
		height:450px;
		width:300px;
		background-color:#222;
		background-image:url('poster/Card 1.png');
		background-size:100% 100%;
		overflow:hidden;
	}
	/*#card2{
		height:450px;
		width:300px;
		background-color:white;
		background-image:url('poster/Card 2.png');
		background-size:100% 100%;
		overflow:hidden;
	}*/
	/*#card3{
		height:450px;
		width:300px;
		background-color:white;
		background-image:url('poster/Card 3.png');
		background-size:100% 100%;
		overflow:hidden;
	}*/
	#cardtitle{
		font-family:arial;
		color:#fff;
		font-size:18px;
		text-align:center;
	}
	.btnbook{
		height:50px;
		width:100%;
		background-color:#94c82f;
		position:relative;
		top:450;
		font-family:arial;
		font-size:18px;
		color:white;
		text-align:center;
		line-height:50px;
		transition:all 1s;
	}
	#card1:hover .btnbook{
		top:400;
	}
	#card2:hover .btnbook{
		top:400;
	}
	#card3:hover .btnbook{
		top:400;
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
                                        <a href="User%20Logout.php" id="una"><?php echo $_SESSION['uname'];?></a>
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
	
	<table border="0" id="cardtable" cellspacing="50px">
		<tr>
			<td colspan="3" align="center" id="cardtitle">GIFT CARD FOR YOU</td>
		</tr>
		<tr>
			
		<Td>
			<?php
			
				$query="select * from gift where id=1";
				$res=mysqli_query($con,$query);
				while($data=mysqli_fetch_array($res))
				{
				?>
				<div id="card1">
					<a href="giftinfo.php?gid=1">

		            <div class="btnbook">
						BUY NOW
					</div>

					</a>
					<img id="poster" src="poster/<?php echo $data['img'];?>" height="400px" width="300px" /></div>
					<?php
                    }
                ?>
					
			
				
			</Td>
			<div>
			<Td>
			<?php
			
			$query="select * from gift where id=2";
			$res=mysqli_query($con,$query);
			while($data=mysqli_fetch_array($res))
			{
			?>
			<div id="card1">
				<a href="giftinfo.php?gid=2">
				
				<div class="btnbook">
					BUY NOW
				</div>
				</a>
				<img id="poster" src="poster/<?php echo $data['img'];?>" height="400px" width="300px"/>
			</div>
			<?php
				}
			?>
			</Td>
				</div>
				<Td>
			<?php
			
				$query="select * from gift where id=3";
				$res=mysqli_query($con,$query);
				while($data=mysqli_fetch_array($res))
				{
				?>
				<div id="card1">
					<a href="giftinfo.php?gid=3">

		            <div class="btnbook">
						BUY NOW
					</div>

					</a>
					<img id="poster" src="poster/<?php echo $data['img'];?>" height="400px" width="300px" /></div>
					<?php
                    }
                ?>
					
			
				
			</Td>
			<div>
			<Td>
			
		</tr>
	</table>
		
	</body>
</html>