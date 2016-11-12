<?php

	$name = 'name';
	$email = 'email';
	
	$emailTo = 'hellosachindev@gmail.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = 'Message from your website.';
	}
	$body = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Business Email Template</title>
<style type='text/css'>

body *{font-family: 'Open Sans', Arial, sans-serif !important}

div, p, a, li, td { -webkit-text-size-adjust:none; }

*{-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;}
td{word-break: break-word;}
a{word-break: break-word; text-decoration: none; color: inherit;}

body .ReadMsgBody
{width: 100%; background-color: #ffffff;}
body .ExternalClass
{width: 100%; background-color: #ffffff;}
body{width: 100%; height: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
html{ background-color:#ffffff; width: 100%;}

body p {padding: 0!important; margin-top: 0!important; margin-right: 0!important; margin-bottom: 0!important; margin-left: 0!important; }
body img {user-drag: none; -moz-user-select: none; -webkit-user-drag: none;}
body a.rotator img {-webkit-transition: all 1s ease-in-out;-moz-transition: all 1s ease-in-out; -o-transition: all 1s ease-in-out; -ms-transition: all 1s ease-in-out; }
body a.rotator img:hover { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -o-transform: rotate(360deg);-ms-transform: rotate(360deg); }
body .hover:hover {opacity:0.85;filter:alpha(opacity=85);}
body .jump:hover {opacity:0.75; filter:alpha(opacity=75); padding-top: 10px!important;}
body .underline:hover {text-decoration: underline!important;}
body .hoverGreen img {opacity: 1;transition: opacity .40s ease-in-out;-moz-transition: opacity .40s ease-in-out;-webkit-transition: opacity .40s ease-in-out;}
body .hoverGreen img:hover {opacity:0.1;filter:alpha(opacity=10)transition: opacity .40s ease-in-out;-moz-transition: opacity .40s ease-in-out;-webkit-transition: opacity .40s ease-in-out;}

#animate {-webkit-animation:Animate 8s;-moz-animation:Animate 8s;-o-animation:Animate 8s;animation:Animate 8s;}

@-webkit-keyframes Animate {0%{opacity: 0;}100%{opacity:1;}}
@-moz-keyframes Animate {0%{opacity:0;}100%{opacity:1;}}
@-o-keyframes Animate {0%{opacity:0;}100%{opacity:1;}}
@keyframes Animate {0%{opacity:0;}100%{opacity:1;}}

body .image154 img {width: 154px; height: auto;}
body .icon27 img {width: 27px; height: auto;}
body .image274 img {width: 274px; height: auto;}
body .image560 img {width: 560px; height: auto;}
body .image310 img {width: 310px; height: auto;}
body .icon35 img {width: 35px; height: auto;}
body .image197 img {width: 197px; height: auto;}
body .image228 img {width: 228px; height: auto;}
body .image217 img {width: 217px; height: auto;}
body .image189 img {width: 189px; height: auto;}
body .icon22 img {width: 22px; height: auto;}
body .icon52 img {width: 52px; height: auto;}
body .icon19 img {width: 19px; height: auto;}
body .logoTop img {width: 122px; height: auto;}
body .logoBottom img {width: 122px; height: auto;}

</style>

<style type='text/css'>@media only screen and (max-width: 640px){
		body body{width:auto!important;}
		body table[class=full] {width: 100%!important; clear: both; }
		body table[class=mobile] {width: 100%!important; padding-left: 30px; padding-right: 30px; clear: both; }
		body table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body .erase {display: none;}
		body .buttonScale {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
		body td[class=pad20] {padding-left: 20px!important; padding-right: 20px!important; text-align: center!important; clear: both; }
		body .h20 {width: 100%!important; height: 20px!important;}
		body .h40 {width: 100%!important; height: 40px!important;}
		body.h30 {width: 100%!important; height: 30px!important;}
		body .image197 img {width: 100%!important;}	
		body .image560 img {width: 100%!important;}
}</style>

<style type='text/css'>@media only screen and (max-width: 479px){
		body body{width:auto!important;}
		body table[class=full] {width: 100%!important; clear: both; }
		body table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
		body table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body .erase {display: none;}
		body .buttonScale {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
		body .eraseMob {display: none!important;}
		body .image310 img {width: 100%!important;}
		body td[class=pad20] {padding-left: 20px!important; padding-right: 20px!important; text-align: center!important; clear: both;}
		body .h20 {width: 100%!important; height: 20px!important;}
		body .h30 {width: 100%!important; height: 30px!important;}
		body .h40 {width: 100%!important; height: 40px!important;}
		body .image197 img {width: 100%!important;}
		body .image560 img {width: 100%!important;}
}</style>

</head>
<body style='margin: 0; padding: 0;'>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td align='center'>
		
			<table class='mobile' align='center' border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tbody><tr>
					<td align='center'>
					
						<!-- Start Nav -->
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='10' class='h20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
							<tr>
								<td width='100%' valign='middle' align='center' class='logoTop'>
								
									<!-- Logo -->
									<table width='122' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td height='50' valign='middle' align='center' width='100%' class='fullCenter' style='line-height: 1px;'>
												<a href='#' style='text-decoration: none;'> 
													<img src='images/logo.png' width='122' alt='' border='0' class='hover'>
												</a>
											</td>
										</tr>
									</tbody></table>
									
									<table width='30' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='erase'>
										<tbody><tr>
											<td width='100%' height='40'>									
											</td>
										</tr>
									</tbody></table>
								
									<!-- Nav --> 
									<table width='310' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td height='50' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #282828; font-weight: 700;'>
												<a href='#' style='text-decoration: none; color: #282828;' class='underline'>Pricing</a>
												 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 <a href='#' style='text-decoration: none; color: #282828;' class='underline'>Marketing</a>
												 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 <a href='#' style='text-decoration: none; color: #282828;' class='underline'>View online</a>
												
											</td>
										</tr>
									</tbody></table>
									
									
								</td>
							</tr>
							<tr>
								<td width='100%' height='10' class='h20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table>
						<!-- End Nav -->
					
					</td>
				</tr>
			</tbody></table>
			
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td align='center' valign='top'>
		
			<table class='mobile' align='center' border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tbody><tr>
					<td align='center'>
					
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full' align='center' border='0' width='100%' cellpadding='0' cellspacing='0'>
										<tbody><tr>
											<td height='50' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table> 
			
									<!-- Big Headline -->
									<table width='270' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter' border='0' cellpadding='0' cellspacing='0'>
										<tbody><tr>
											<td align='center' width='100%'>
												
												<table width='270' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' style='color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; line-height: 30px; font-weight: 800; vertical-align: top; font-size: 24px; text-align: left; padding-top: 3px; text-transform: uppercase; word-break: break-word;' class='fullCenter'>
															Marketing / sales
														</td>
													</tr>
													<tr>
														<td height='20' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' style='color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; line-height: 22px; font-weight: 400; vertical-align: top; font-size: 13px; text-align: left; padding-top: 3px;' class='fullCenter'>
															Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh..
														</td>
													</tr>
													<tr>
														<td height='20' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%'>
															
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='20' class='erase'></td>
																	<td width='250'>
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																			<tbody><tr>
																				<td width='250' style='color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; line-height: 30px; font-weight: 400; vertical-align: top; font-size: 13px; text-align: left; padding-top: 3px;' class='fullCenter'>
																					
																					<span style='color: #919191; font-size: 16px;'>●</span>&nbsp; 1 Layered PSD File.
																					<br>
																					<span style='color: #919191; font-size: 16px;'>●</span>&nbsp; Online Template Builder.
																					<br>
																					<span style='color: #919191; font-size: 16px;'>●</span>&nbsp; MailChimp, Campaign Monitor.
																					
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
															
															
														</td>
													</tr>
													<tr>
														<td height='40' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='left' class='buttonScale'>
														
															<table border='0' cellpadding='0' cellspacing='0' align='left' class='buttonScale'>
																<tbody><tr>
																	<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
																		<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>Purchase Now</a>
																	</td>
																</tr>
															</tbody></table>
														
														</td>
													</tr>
													<tr>
														<td height='30' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
									<!-- Image 310px -->
									<table width='310' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='100%' align='center' class='image310' style='line-height: 1px; display: block;'>
												<a href='#' style='text-decoration: none;'><img src='images/image_310px.png' width='310' alt='' border='0' class='hover' id='animate' style='display: block;'></a>
											</td>
										</tr>
									</tbody></table>
						
								</td>
							</tr>
						</tbody></table>
			
					</td>
				</tr>
			</tbody></table> 
			
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#489c97'>
	<tbody><tr>
		<td align='center' valign='top'>
		
			<table class='full' align='center' border='0' width='100%' cellpadding='0' cellspacing='0'>
				<tbody><tr>
					<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
				</tr>
			</tbody></table> 
			
		</td>
	</tr>
</tbody></table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='60'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 22px; color: #30353a; line-height: 30px; font-weight: 800;' class='fullCenter'>
												Startup Marketing Newsletter
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
												Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla.
											</td>
										</tr>
										<tr>
											<td width='100%' height='40'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Image 154 - 1 -->
									<table width='154' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='154' align='center' class='image154'>
												<table width='154' border='0' cellpadding='0' cellspacing='0' align='center'>
													<tbody><tr>
														<td width='154' height='auto' style='text-align: center;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_154px_1.png' width='154' alt='' border='0'>
															</a>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 16px; color: #30353a; line-height: 24px; font-weight: 600; text-transform: uppercase;' class='fullCenter'>
												Think
											</td>
										</tr>
									</tbody></table>
									
									<table width='70' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='40' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<!-- Image 154 - 1 -->
									<table width='154' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='154' align='center' class='image154'>
												<table width='154' border='0' cellpadding='0' cellspacing='0' align='center'>
													<tbody><tr>
														<td width='154' height='auto' style='text-align: center;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_154px_1.png' width='154' alt='' border='0'>
															</a>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 16px; color: #30353a; line-height: 24px; font-weight: 600; text-transform: uppercase;' class='fullCenter'>
												DESIGN
											</td>
										</tr>
									</tbody></table>
									
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='40' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<!-- Image 154 - 3 -->
									<table width='154' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='154' align='center' class='image154'>
												<table width='154' border='0' cellpadding='0' cellspacing='0' align='center'>
													<tbody><tr>
														<td width='154' height='auto' style='text-align: center;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_154px_3.png' width='154' alt='' border='0'>
															</a>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 16px; color: #30353a; line-height: 24px; font-weight: 600; text-transform: uppercase;' class='fullCenter'>
												CODE
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='60' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff'>
	<tbody><tr>
		<td width='100%' align='center' valign='top' style='background-image: url('images/divider.png'); background-position: center center; background-repeat: repeat-x;'>
		
			<!--[if gte mso 9]>
            <v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='mso-width-percent:1000;height:30px;'>
              <v:fill type='tile' src='images/divider.png' color='#ffffff'></v:fill>
              <v:textbox inset='0,0,0,0'>
            <![endif]-->
		
			<table align='center' border='0' width='40' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='background-color: #ffffff;'>
				<tbody><tr>
					<td width='40' valign='top' height='13' align='center' style='line-height: 1px; display: block;'>
						<a href='#' style='text-decoration: none;' class='rotator'>
							<img src='images/heart_icon.png' style='display: block;' width='31' alt='' border='0'>
						</a>
					</td>
				</tr>
				<tr>
					<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
				</tr>
			</tbody></table> 
			
			 <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff'> 
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='75'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%'>
								
									<table width='280' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='0' class='h20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' align='center' class='image274' style='line-height: 1px;'>
												<a href='#' style='text-decoration: none;'>
													<img src='images/image_274px.png' width='274' alt='' border='0' class='hover'>
												</a>
											</td>
										</tr>
										<tr>
											<td width='100%' height='25'></td>
										</tr>
									</tbody></table>
									
									<table width='280' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td valign='top' width='100%'>
												
												<table width='280' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 18px; color: #2f353a; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															What You Need to Know...
														</td>
													</tr>
													<tr>
														<td width='100%' height='30' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
															Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<!-- Count Icon 1 -->
										<tr>
											<td valign='top' width='100%' class='icon27'>
												<table width='27' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' class='fullCenter'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/count_icon1.png' width='27' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
															</a>
														</td>
													</tr>
												</tbody></table>
												
												<table width='10' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												
												<table width='230' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
															Nullam quis risus eget urna mollis 
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<!-- Count Icon 2 -->
										<tr>
											<td valign='top' width='100%' class='icon27'>
												<table width='27' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' class='fullCenter'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/count_icon2.png' width='27' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
															</a>
														</td>
													</tr>
												</tbody></table>
												
												<table width='10' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												
												<table width='230' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
															Nullam quis risus eget urna mollis
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<!-- Count Icon 3 -->
										<tr>
											<td valign='top' width='100%' class='icon27'>
												<table width='27' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' class='fullCenter'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/count_icon3.png' width='27' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
															</a>
														</td>
													</tr>
												</tbody></table>
												
												<table width='10' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												
												<table width='230' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
															Nullam quis risus eget urna mollis 
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<!-- Count Icon 4 -->
										<tr>
											<td valign='top' width='100%' class='icon27'>
												<table width='27' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' class='fullCenter'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/count_icon4.png' width='27' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
															</a>
														</td>
													</tr>
												</tbody></table>
												
												<table width='10' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												
												<table width='230' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
															Nullam quis risus eget urna mollis
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='30'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
								
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;' class='h30'>&nbsp;</td>
										</tr>
										<!-- Button Center -->
										<tr>
											<td align='center' class='buttonScale'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='center' class='buttonScale'>
													<tbody><tr>
														<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
															<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>Call to Action</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='80'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='80'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='100%' align='center' class='image560' style='line-height: 1px;'>
												<a href='#' style='text-decoration: none;'>
													<img src='images/image_560px.jpg' width='560' alt='' border='0' class='hover'>
												</a>
											</td>
										</tr>
										<tr>
											<td width='100%' height='40' style='font-size: 1px; line-height: 1px;' class='h30'>&nbsp;</td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 24px; color: #ffffff; line-height: 34px; font-weight: 800;' class='fullCenter'>
												Video Marketing 2016
											</td>
										</tr>
										<tr>
											<td width='100%' height='16' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400; word-break: break-word;' class='fullCenter'>
												Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla.
												<br>
												<a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>http://www.youtube.com/bussiness.mp4</a>
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='80'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='65' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 22px; color: #30353a; line-height: 30px; font-weight: 800;' class='fullCenter'>
												Our Latest News
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='50'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%'>
								
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='full' bgcolor='#efefef' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; background-color: #efefef;'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' class='pad20'>
											
												<table width='240' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td valign='top' width='100%' class='icon35'>
															
															<table width='35' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' class='fullCenter'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/icon_35px_1.png' width='35' height='auto' alt='' border='0' class='hover' style='vertical-align: top;'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
															
															<table width='15' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
															<table width='183' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='36' valign='middle' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
																		Boost your sales 
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
													<tr>
														<td valign='top' width='100%'>
															
															<table width='240' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
																		Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet.. <a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>Read more</a>
																	</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='right' class='full' bgcolor='#efefef' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; background-color: #efefef;'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' class='pad20'>
											
												<table width='240' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td valign='top' width='100%' class='icon35'>
															
															<table width='35' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' class='fullCenter'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/icon_35px_2.png' width='35' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
															
															<table width='15' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
															<table width='183' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='36' valign='middle' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
																		Think outside the box
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
													<tr>
														<td valign='top' width='100%'>
															
															<table width='240' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
																		Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet.. <a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>Read more</a>
																	</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
												
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%'>
								
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='full' bgcolor='#efefef' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; background-color: #efefef;'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' class='pad20'>
											
												<table width='240' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td valign='top' width='100%' class='icon35'>
															
															<table width='35' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' class='fullCenter'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/icon_35px_3.png' width='35' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
															
															<table width='15' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
															<table width='183' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='36' valign='middle' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
																		Explore pay-per-click
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
													<tr>
														<td valign='top' width='100%'>
															
															<table width='240' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
																		Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet.. <a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>Read more</a>
																	</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='right' class='full' bgcolor='#efefef' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; background-color: #efefef;'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' class='pad20'>
											
												<table width='240' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td valign='top' width='100%' class='icon35'>
															
															<table width='35' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' class='fullCenter'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/icon_35px_4.png' width='35' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
															
															<table width='15' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
															<table width='183' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='36' valign='middle' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
																		Retweet and engage
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
													<tr>
														<td valign='top' width='100%'>
															
															<table width='240' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
																		Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet.. <a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>Read more</a>
																	</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%'>
								
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='full' bgcolor='#efefef' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; background-color: #efefef;'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' class='pad20'>
											
												<table width='240' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td valign='top' width='100%' class='icon35'>
															
															<table width='35' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' class='fullCenter'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/icon_35px_5.png' width='35' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
															
															<table width='15' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
															<table width='183' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='36' valign='middle' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
																		Give Your Stuff Away
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
													<tr>
														<td valign='top' width='100%'>
															
															<table width='240' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
																		Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet.. <a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>Read more</a>
																	</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='right' class='full' bgcolor='#efefef' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; background-color: #efefef;'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' class='pad20'>
											
												<table width='240' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
													<tbody><tr>
														<td valign='top' width='100%' class='icon35'>
															
															<table width='35' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' class='fullCenter'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/icon_35px_6.png' width='35' height='auto' alt='' border='0' class='hover' style='vertical-align: top; padding-top: 2px;'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
															
															<table width='15' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
															<table width='183' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='36' valign='middle' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
																		Trim your subjects
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
													<tr>
														<td valign='top' width='100%'>
															
															<table width='240' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%' height='30' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
																		Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet.. <a href='#' style='text-decoration: none; color: #489c97; font-weight: 600;' class='underline'>Read more</a>
																	</td>
																</tr>
															</tbody></table>
															
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='25' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='80'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='65'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 22px; color: #ffffff; line-height: 30px; font-weight: 800;' class='fullCenter'>
												Meet the Company Team
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='50'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- 3 Images -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='100%'>
												<table width='198' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' align='left' class='image197' style='line-height: 1px; padding-right: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_198px_1.jpg' width='197' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='198' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' align='left' class='image197' style='line-height: 1px; padding-right: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_198px_2.jpg' width='197' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='198' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' align='left' class='image197' style='line-height: 1px; padding-right: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_198px_3.jpg' width='197' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='1' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='40' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table> 
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
								
									<!-- Image 275px - 1 -->
									<table width='275' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;' class='fullCenter'>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel tristique elit vestibulum mattis.
											</td>
										</tr>
										<tr>
											<td width='100%' height='30' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='40' style='font-size: 1px; line-height: 1px;' class='h20'>&nbsp;</td>
										</tr>
									</tbody></table> 
									
									<!-- Text Right -->
									<table width='275' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td width='100%'>
												
												 <!-- Skills --> 
							                      <table width='275' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
							                        <tbody><tr>
							                          <td valign='middle' width='100%'>
							                          
							                          		<!-- 90% -->
															<table width='275' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%'>
																	
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																			<tbody><tr>
																				<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 600; text-transform: uppercase;'>
																					Marketing
																				</td>
																			</tr>
																		</tbody></table>
																		
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' class='fullCenter' style='text-align: center;'> 
																		
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																			<tbody><tr>
																				<td width='90%' height='7' bgcolor='#489c97' style='-webkit-border-top-left-radius: 5px; -moz-border-top-left-radius: 5px; border-top-left-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;'></td>
																				<td width='10%' height='7' bgcolor='#ffffff' style='-webkit-border-top-right-radius: 5px; -moz-border-top-right-radius: 5px; border-top-right-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;'></td>
																			</tr>
																		</tbody></table>
																		
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10'></td>
																</tr>
															</tbody></table><!-- End 90% -->
										                   
															<!-- 75% -->
															<table width='275' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%'>
																	
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																			<tbody><tr>
																				<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 600; text-transform: uppercase;'>
																					Business
																				</td>
																			</tr>
																		</tbody></table>
																		
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' class='fullCenter' style='text-align: center;'> 
																		
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																			<tbody><tr>
																				<td width='85%' height='7' bgcolor='#489c97' style='-webkit-border-top-left-radius: 5px; -moz-border-top-left-radius: 5px; border-top-left-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;'></td>
																				<td width='15%' height='7' bgcolor='#ffffff' style='-webkit-border-top-right-radius: 5px; -moz-border-top-right-radius: 5px; border-top-right-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;'></td>
																			</tr>
																		</tbody></table>
																		
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10'></td>
																</tr>
															</tbody></table><!-- End 80% -->
															
															<!-- 80% -->
															<table width='275' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																<tbody><tr>
																	<td width='100%'>
																	
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																			<tbody><tr>
																				<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 600; text-transform: uppercase;'>
																					Strategy
																				</td>
																			</tr>
																		</tbody></table>
																		
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' class='fullCenter' style='text-align: center;'> 
																		
																		<table width='100%' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
																			<tbody><tr>
																				<td width='80%' height='7' bgcolor='#489c97' style='-webkit-border-top-left-radius: 5px; -moz-border-top-left-radius: 5px; border-top-left-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;'></td>
																				<td width='20%' height='7' bgcolor='#ffffff' style='-webkit-border-top-right-radius: 5px; -moz-border-top-right-radius: 5px; border-top-right-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;'></td>
																			</tr>
																		</tbody></table>
																		
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='10'></td>
																</tr>
															</tbody></table><!-- End 70% -->
															
										                      
														</td>
													</tr>
												</tbody></table><!-- End Skills Left -->
												
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='65'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff'> 
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='80'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%'>
								
									<table width='228' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' align='center' class='image228' style='line-height: 1px;'>
												<a href='#' style='text-decoration: none;'>
													<img src='images/image_228px_1.png' width='228' alt='' border='0' class='hover'>
												</a>
											</td>
										</tr>
										<tr>
											<td width='100%' height='25'></td>
										</tr>
									</tbody></table>
									
									<table width='330' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 18px; color: #2f353a; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
												works all the time for every business
											</td>
										</tr>
										<tr>
											<td width='100%' height='30' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis.
											</td>
										</tr>
										<tr>
											<td width='100%' height='30' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' align='left' class='buttonScale'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='left' class='buttonScale'>
													<tbody><tr>
														<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
															<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>Call to Action</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='70'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff'>
	<tbody><tr>
		<td width='100%' align='center' valign='top' style='background-image: url('images/divider.png'); background-position: center center; background-repeat: repeat-x;' background='images/divider.png'>
		
			<!--[if gte mso 9]>
            <v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='mso-width-percent:1000;height:30px;'>
              <v:fill type='tile' src='images/divider.png' color='#ffffff'></v:fill>
              <v:textbox inset='0,0,0,0'>
            <![endif]-->
		
			<table align='center' border='0' width='40' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='background-color: #ffffff;'>
				<tbody><tr>
					<td width='100%' height='0' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
				</tr>
				<tr>
					<td width='40' valign='top' height='13' align='center' style='line-height: 1px; display: block;'>
						<a href='#' style='text-decoration: none;' class='rotator'>
							<img src='images/heart_icon.png' style='display: block;' width='31' alt='' border='0'>
						</a>
					</td>
				</tr>
				<tr>
					<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
				</tr>
			</tbody></table>
			
			 <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff'> 
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='65'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%'>
								
									<table width='228' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' align='center' class='image228' style='line-height: 1px;'>
												<a href='#' style='text-decoration: none;'>
													<img src='images/image_228px_2.png' width='228' alt='' border='0' class='hover'>
												</a>
											</td>
										</tr>
										<tr>
											<td width='100%' height='25'></td>
										</tr>
									</tbody></table>
									
									<table width='330' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 18px; color: #2f353a; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
												Call tracking and analytics
											</td>
										</tr>
										<tr>
											<td width='100%' height='30' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 22px; font-weight: 400;' class='fullCenter'>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis.
											</td>
										</tr>
										<tr>
											<td width='100%' height='30' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' align='left' class='buttonScale'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='left' class='buttonScale'>
													<tbody><tr>
														<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
															<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>Call to Action</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='80'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
				<tbody><tr>
					<td width='100%' height='80'></td>
				</tr>
			</tbody></table>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
						
									<table width='296' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='sponsor'>
										<tbody><tr>
											<td width='50%' style='text-align: center;'>
												<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 32px; color: #ffffff; line-height: 36px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															284
														</td>
													</tr>
													<tr>
														<td width='100%' height='15'></td>
													</tr>
													<tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
															New clients
														</td>
													</tr>
												</tbody></table>
											</td>
											<td width='50%' class='image135' style='text-align: center;'>
												<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 32px; color: #ffffff; line-height: 36px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															125
														</td>
													</tr>
													<tr>
														<td width='100%' height='15'></td>
													</tr>
													<tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
															Projects Finished
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
						
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='10' class='h40'></td>
										</tr>
									</tbody></table>
						
					
									<table width='296' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='sponsor'>
										<tbody><tr>
											<td width='50%' style='text-align: center;'>
												<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 32px; color: #ffffff; line-height: 36px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															17
														</td>
													</tr>
													<tr>
														<td width='100%' height='15'></td>
													</tr>
													<tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
															New Items
														</td>
													</tr>
												</tbody></table>
											</td>
											<td width='50%' class='image135' style='text-align: center;'>
												<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 32px; color: #ffffff; line-height: 36px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															1000+
														</td>
													</tr>
													<tr>
														<td width='100%' height='15'></td>
													</tr>
													<tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
															New Ideas
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
								
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
				<tbody><tr>
					<td width='100%' height='80'></td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='65'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 22px; color: #30353a; line-height: 30px; font-weight: 800;' class='fullCenter'>
												Projects We Finished
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='60'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- 3 Images Top -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='100%'>
												<table width='217' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Free Mockups
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image217' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_217px_1.jpg' width='217' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='189' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Business Cards
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image189' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_189px_1.png' width='189' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='189' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Custom Labels
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image189' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_189px_2.png' width='189' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
									
									<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
					
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
								
									<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
									</tbody></table>							
									
									<!-- 3 Images Middle -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='100%'>
												<table width='189' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Online Tutorials
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image189' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_189px_3.png' width='189' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='189' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Personal Cards
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image189' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_189px_4.png' width='189' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='217' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															presentation mockups
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image217' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_217px_2.jpg' width='217' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
									
									<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
								
									<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
									</tbody></table>
									
									<!-- 3 Images Bottom -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td width='100%'>
												<table width='217' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Smart layers
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image217' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_217px_3.jpg' width='217' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='189' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Branding Mockups
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image189' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_189px_5.png' width='189' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
												<table width='189' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #212222; line-height: 24px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
															Company Cards
														</td>
													</tr>
													<tr>
														<td height='15' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
													<tr>
														<td width='100%' align='center' class='image189' style='line-height: 1px;'>
															<a href='#' style='text-decoration: none;'>
																<img src='images/image_189px_6.png' width='189' alt='' border='0' class='hover'>
															</a>
														</td>
													</tr>
													<tr>
														<td height='10' width='100%' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='45'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
								
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<!-- Button Center -->
										<tbody><tr>
											<td align='center' class='buttonScale'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='center' class='buttonScale'>
													<tbody><tr>
														<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
															<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>View All Projects</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='65'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center' valign='top'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='65'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 22px; color: #ffffff; line-height: 30px; font-weight: 800;' class='fullCenter'>
												Some Important Tweets
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='50'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#383e44' style='background-color: #383e44;'>
							<tbody><tr>
								<td width='100%' align='center' valign='top'>
						
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#383e44' style='background-color: #383e44;'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
										<tr>
											<td width='100%' align='center' class='pad20' valign='top'>
												
												<table width='540' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; word-break: break-word;' class='fullCenter'>
													<tbody><tr>
														<td width='52' valign='top'>
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='100%' height='40' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400; vertical-align: top;' class='icon52'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/twitter_avatar_52px.png' width='52' alt='' border='0' class='hover'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
														
														</td>
														<td width='20' height='10'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														<td valign='top' width='500' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;'>
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;' class='icon22'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/twitter_icon_22px.png' width='22' alt='' border='0' class='hover'>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;'>
																		<span style='font-weight: 700;'>Twitter Name</span> @Twitter_Name - 25 Aug.
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;'>
																		<span style='font-weight: 700; color: #489c97;'>@BusinessTemplate</span> Please join us for <span style='font-weight: 700; color: #489c97;'>#Marketing</span> meeting tomorrow at 7pm GMT.The topic is: 'accessibility at visitor attractions' <a href='#' style='font-weight: 700; color: #489c97; text-decoration: none;' class='underline'>http://bit.ly/1eeEna1Ho</a>
																	</td>
																</tr>
															</tbody></table>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='20'></td>
										</tr>
										<tr>
											<td width='100%' height='20' bgcolor='#30353a' style='background-color: #30353a;'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#383e44' style='background-color: #383e44;'>
							<tbody><tr>
								<td width='100%' align='center' valign='top'>
						
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#383e44' style='background-color: #383e44;'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
										<tr>
											<td width='100%' align='center' class='pad20' valign='top'>
												
												<table width='540' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; word-break: break-word;' class='fullCenter'>
													<tbody><tr>
														<td width='52' valign='top'>
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='100%' height='40' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400; vertical-align: top;' class='icon52'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/twitter_avatar_52px.png' width='52' alt='' border='0' class='hover'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
														
														</td>
														<td width='20' height='10'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														<td valign='top' width='500' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;'>
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;' class='icon22'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/twitter_icon_22px.png' width='22' alt='' border='0' class='hover'>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;'>
																		<span style='font-weight: 700;'>Twitter Name</span> @Twitter_Name - 25 Aug.
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;'>
																		<span style='font-weight: 700; color: #489c97;'>@BusinessTemplate</span> Please join us for <span style='font-weight: 700; color: #489c97;'>#Marketing</span> meeting tomorrow at 7pm GMT.The topic is: 'accessibility at visitor attractions' <a href='#' style='font-weight: 700; color: #489c97; text-decoration: none;' class='underline'>http://bit.ly/1eeEna1Ho</a>
																	</td>
																</tr>
															</tbody></table>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='20'></td>
										</tr>
										<tr>
											<td width='100%' height='20' bgcolor='#30353a' style='background-color: #30353a;'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#383e44' style='background-color: #383e44;'>
							<tbody><tr>
								<td width='100%' align='center' valign='top'>
						
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#383e44' style='background-color: #383e44;'>
										<tbody><tr>
											<td width='100%' height='20'></td>
										</tr>
										<tr>
											<td width='100%' align='center' class='pad20' valign='top'>
												
												<table width='540' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; word-break: break-word;' class='fullCenter'>
													<tbody><tr>
														<td width='52' valign='top'>
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='100%' height='40' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400; vertical-align: top;' class='icon52'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/twitter_avatar_52px.png' width='52' alt='' border='0' class='hover'>
																		</a>
																	</td>
																</tr>
															</tbody></table>
														
														</td>
														<td width='20' height='10'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														<td valign='top' width='500' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;'>
															<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
																<tbody><tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;' class='icon22'>
																		<a href='#' style='text-decoration: none;'>
																			<img src='images/twitter_icon_22px.png' width='22' alt='' border='0' class='hover'>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='15' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 22px; font-weight: 400;'>
																		<span style='font-weight: 700;'>Twitter Name</span> @Twitter_Name - 25 Aug.
																	</td>
																</tr>
																<tr>
																	<td width='100%' height='5' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
																</tr>
																<tr>
																	<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #ffffff; line-height: 24px; font-weight: 400;'>
																		<span style='font-weight: 700; color: #489c97;'>@BusinessTemplate</span> Please join us for <span style='font-weight: 700; color: #489c97;'>#Marketing</span> meeting tomorrow at 7pm GMT.The topic is: 'accessibility at visitor attractions' <a href='#' style='font-weight: 700; color: #489c97; text-decoration: none;' class='underline'>http://bit.ly/1eeEna1Ho</a>
																	</td>
																</tr>
															</tbody></table>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' height='20'></td>
										</tr>
										<tr>
											<td width='100%' height='20' bgcolor='#30353a' style='background-color: #30353a;'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
							
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='60'></td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</tbody></table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
							
			<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td width='100%' align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='60'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<!-- Headline -->
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;' class='fullCenter'>
										<tbody><tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 22px; color: #30353a; line-height: 30px; font-weight: 800;' class='fullCenter'>
												Most Popular Hosting Plans
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td width='100%' height='4' align='center'>
												<table width='40' align='center' border='0' cellpadding='0' cellspacing='0'>
													<tbody><tr>
														<td height='4' width='100%' bgcolor='#489c97' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
													</tr>
												</tbody></table> 
											</td>
										</tr>
										<tr>
											<td width='100%' height='16'></td>
										</tr>
										<tr>
											<td valign='middle' width='100%' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; color: #9d9d9d; line-height: 24px; font-weight: 400;' class='fullCenter'>
												Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla.
											</td>
										</tr>
										<tr>
											<td width='100%' height='40'></td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<!-- Pricing 1 -->
						<table width='290' border='0' cellpadding='0' cellspacing='0' align='left' class='fullCenter'>
							<tbody><tr>
								<td width='290' valign='top'>
								
									<!-- Pricing 1 -->
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; border-top-right-radius: 4px; border-top-left-radius: 4px; background-color: #30353a;' class='fullCenter' bgcolor='#30353a'>
										<tbody><tr>
											<td width='100%' height='18' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #30353a;' class='fullCenter' bgcolor='#30353a'>
										<tbody><tr>
											<td width='100%' style='text-align: center; color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 18px; line-height: 24px; padding: 0px 5px; font-weight: 800; text-transform: uppercase;'>
												Optimum
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 26px; line-height: 30px; padding: 2px 5px; font-weight: 700;'>
												$9.00
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 20px; padding: 2px 5px; font-weight: 600; font-style: italic;'>
												*per month
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #e1e1e1;' class='fullCenter' bgcolor='#e1e1e1'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												Web storage
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												1 GB
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												FTP Accounts
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												5
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #e1e1e1;' class='fullCenter' bgcolor='#e1e1e1'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												Email Addresses
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												10
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												Hosted Domains
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												3
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='20'>									
											</td>
										</tr>
										<!-- Button Center -->
										<tr>
											<td align='center' class='buttonScale'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='center' class='buttonScale'>
													<tbody><tr>
														<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
															<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>Buy Now</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='35' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
							<tbody><tr>
								<td width='100%' height='30'>									
								</td>
							</tr>
						</tbody></table>
						
						<!-- Pricing 2 -->
						<table width='290' border='0' cellpadding='0' cellspacing='0' align='right' class='fullCenter'>
							<tbody><tr>
								<td width='290' valign='top'>
								
									<!-- Pricing 1 -->
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; border-top-right-radius: 4px; border-top-left-radius: 4px; background-color: #30353a;' class='fullCenter' bgcolor='#30353a'>
										<tbody><tr>
											<td width='100%' height='18' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #30353a;' class='fullCenter' bgcolor='#30353a'>
										<tbody><tr>
											<td width='100%' style='text-align: center; color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 18px; line-height: 24px; padding: 0px 5px; font-weight: 800; text-transform: uppercase;'>
												Business
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 26px; line-height: 30px; padding: 2px 5px; font-weight: 700;'>
												$29.00
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 20px; padding: 2px 5px; font-weight: 600; font-style: italic;'>
												*per month
											</td>
										</tr>
										<tr>
											<td width='100%' height='20' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #e1e1e1;' class='fullCenter' bgcolor='#e1e1e1'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												Web storage
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												5 GB
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												FTP Accounts
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												10
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #e1e1e1;' class='fullCenter' bgcolor='#e1e1e1'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												Email Addresses
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												25
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; line-height: 18px; padding: 2px 5px; font-weight: 400;'>
												Hosted Domains
											</td>
										</tr>
										<tr>
											<td width='100%' style='text-align: center; color: #30353a; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; padding: 2px 5px; font-weight: 700;'>
												10
											</td>
										</tr>
										<tr>
											<td width='100%' height='13' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='20'>									
											</td>
										</tr>
										<!-- Button Center -->
										<tr>
											<td align='center' class='buttonScale'>
												
												<table border='0' cellpadding='0' cellspacing='0' align='center' class='buttonScale'>
													<tbody><tr>
														<td align='center' height='36' bgcolor='#489c97' style='-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; color: #ffffff; text-transform: uppercase;'>
															<a href='#' style='color: #ffffff; font-size: 12px; text-decoration: none; line-height: 28px;'>Buy Now</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
									
									<table width='290' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse: collapse; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; background-color: #efefef;' class='fullCenter' bgcolor='#efefef'>
										<tbody><tr>
											<td width='100%' height='35' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
				<tbody><tr>
					<td width='100%' height='80'></td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#30353a' style='background-color: #30353a;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
				<tbody><tr>
					<td width='100%' height='60'></td>
				</tr>
			</tbody></table>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
						
									<table width='200' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td width='100%' class='logoBottom'>
												<a href='#' style='text-decoration: none;'>
													<img src='images/logo_footer.png' width='112' alt='' border='0' class='hover'>
												</a>
											</td>
										</tr>
										<tr>
											<td width='100%' height='30'></td>
										</tr>
										<tr>
											<td width='100%' class='fullCenter'>
												
												<table width='30' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' class='fullCenter'>
															<a href='#' style='text-decoration: none;'><img src='images/tel_icon.png' width='14' alt='' border='0'></a>
														</td>
													</tr>
												</tbody></table>
												
												<table width='165' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
															+123 456 789 00
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
										<tr>
											<td width='100%' class='fullCenter'>
												
												<table width='30' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' class='fullCenter'>
															<a href='#' style='text-decoration: none;'><img src='images/mail_icon.png' width='14' alt='' border='0'></a>
														</td>
													</tr>
												</tbody></table>
												
												<table width='165' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
													<tbody><tr>
														<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
															<a href='#' style='text-decoration: none; color: #ffffff;' class='underline'>info@youremail.com</a>
														</td>
													</tr>
												</tbody></table>
												
											</td>
										</tr>
									</tbody></table>
						
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='40'></td>
										</tr>
									</tbody></table>
					
									<table width='220' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td width='100%' style='text-align: left; color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
												Information
											</td>
										</tr>
										<tr>
											<td width='100%' height='30' class='h20'></td>
										</tr>
										<tr>
											<td width='100%' style='text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; color: #ffffff; line-height: 24px; font-weight: 400;' class='fullCenter'>
												Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus. Copyright DynamicXX
											</td>
										</tr>
									</tbody></table>
									
									<table width='1' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='full'>
										<tbody><tr>
											<td width='100%' height='40'></td>
										</tr>
									</tbody></table>
									
									<table width='150' border='0' cellpadding='0' cellspacing='0' align='right' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td width='100%' style='text-align: left; color: #ffffff; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 14px; line-height: 18px; font-weight: 700; text-transform: uppercase;' class='fullCenter'>
												Social Media
											</td>
										</tr>
										<tr>
											<td width='100%' height='30'></td>
										</tr>
										<tr>
											<td width='100%' class='fullCenter'>
												<table width='125' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='buttonScale'>
													<tbody><tr>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_1.png' width='19' alt='' border='0'></a>
														</td>
														<td width='15'>&nbsp;</td>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_2.png' width='19' alt='' border='0'></a>
														</td>
														<td width='15'>&nbsp;</td>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_3.png' width='19' alt='' border='0'></a>
														</td>
														<td width='15'>&nbsp;</td>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_4.png' width='19' alt='' border='0'></a>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td width='100%' height='12'></td>
										</tr>
										<tr>
											<td width='100%' class='fullCenter'>
												<table width='125' border='0' cellpadding='0' cellspacing='0' align='left' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='buttonScale'>
													<tbody><tr>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_5.png' width='19' alt='' border='0'></a>
														</td>
														<td width='15'>&nbsp;</td>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_6.png' width='19' alt='' border='0'></a>
														</td>
														<td width='15'>&nbsp;</td>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_7.png' width='19' alt='' border='0'></a>
														</td>
														<td width='15'>&nbsp;</td>
														<td width='19' class='icon19'>
															<a href='#' style='text-decoration: none;'><img src='images/social_icon_8.png' width='19' alt='' border='0'></a>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
								
								</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
			
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
				<tbody><tr>
					<td width='100%' height='60'></td>
				</tr>
			</tbody></table>
		
		</td>
	</tr>
</table>

<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full' bgcolor='#ffffff' style='background-color: #ffffff;'>
	<tbody><tr>
		<td width='100%' valign='top' align='center'>
		
			<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='mobile'>
				<tbody><tr>
					<td align='center'>
					
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='1' bgcolor='#333333' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
							<tr>
								<td width='100%' height='20'></td>
							</tr>
						</tbody></table>
						
						<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' align='center'>
									
									<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tbody><tr>
											<td valign='bottom' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 12px; color: #9d9d9d; line-height: 20px; font-weight: 400;'>
												If you no longer wish to receive the Business newsletter, simply click the unsubscribe link below.
											</td>
										</tr>
										<tr>
											<td valign='bottom' style='text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 13px; color: #ffffff; line-height: 22px; font-weight: 700;'>
												<a href='#' style='color: #489c97; text-decoration: none;'>Unsubscribe</a>
											</td>
										</tr>
									</tbody></table>
									
								</td>
							</tr>
						</tbody></table>
						
						<table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='full'>
							<tbody><tr>
								<td width='100%' height='20'></td>
							</tr>
							<tr>
								<td width='100%' height='1' style='font-size: 1px; line-height: 1px;'>&nbsp;</td>
							</tr>
						</tbody></table>
						
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>
</body>
</html>";
	$headers = 'From: '.$email.'\r\n' .
        'Reply-To: '.$email.'\r\n';

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('SEND');
	
?>
