<?     


	// set up the meta stuff for easy editing here
	
	$keywords="crypkey, copy protection software,software copy protection,cd protection,software licence software,licensing software,software licensing,software protection,copy protection, software piracy,software license,PDF protection,secure pdf,PDF security";
	$description="Award winning copy protection since 1992, feature rich, yet very easy to use.";
	$page_title="CrypKey Instant - Free Trial";
                                     
	$section_on = "support" ; // home, about, contact, order,
	$page_on = "downloads" ; // see /inc/navigation.php for variables
     
  // pull in php includes
	include_once($_SERVER['DOCUMENT_ROOT'] . "/inc/form_processing.php"); 
   	include_once($_SERVER['DOCUMENT_ROOT'] . "/inc/base.php"); // this pulls in the navigation / head info    
	    
	
		
?>     



	<body>
	 <a name="top" id="top"></a>
	 <div class="top"></div>
		<div class="doc">
  <div class="page">
	     				  <div class='page_content_holder'>

	       <div class="header">
			   
				 <? include_once($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php") ?>
			       
					   	
				</div>  
				<!-- end header -->
					<table cellpadding="0" cellspacing="0" border="0" class='page_content'><tr>
					<td class="sub_nav"> 
						<? include_once($_SERVER['DOCUMENT_ROOT'] . "/inc/sub_navigation.php")?>
							
					 </td> 
					<td class="content_column"> 
						
						
						
<?
			   
if (!$_POST['type']=="manual" ){
			   
?> 		
						
						
					         
					
					             <h1>Free Download - CrypKey Instant</h1> 
					  <p>			A valid email address is required. After completing this form, you will be sent an email with a link to 
								download the CrypKey Instant demo.    </p>            
								<p>
								The free downloadable version of CrypKey Instant requires that you be an administrator to install the 
								software. <strong>Please ensure that you are an administrator before you install CrypKey Instant.</strong> 
					</p>            
					<p>Fields marked with an asterisk (*) are required.</p> 
					
					 <p>Your  current IP address has been logged as: <?=$_SERVER["REMOTE_ADDR"] ?>                      </p>
		              
					  <form method="post"  id="registerform" class='formt' name="registerform" onsubmit="return submitIt(this);">
				      <input type="hidden" name="IPAddress" value='<?=$_SERVER["REMOTE_ADDR"] ?>'> 
		               <table width="100%" class='formt' border="0" cellspacing="0" cellpadding="0" >
				       	  <tr>
					            <td class='l'>Name: *</td>
					            <td><input type="text" name="name" id="name" value="<?=$str_name ?>">
					            </td>
					          </tr>
					          <tr>
					            <td class='l'>E-mail: *</td>
					            <td><input type="text" name="email" id="email"  value="<?=$str_email ?>">
					            </td>
					          </tr>
					          <tr>
					            <td class='l'>Phone: *</td>
					            <td><input type="text" name="phone" id="phone" value="<?=$str_phone ?>">
					            </td>
					          </tr>
					          <tr>
					            <td class='l'>Company: </td>
					            <td><input type="text" name="company" id="company" value="<?=$str_company ?>">
					            </td>
					          </tr>
							<tr>
							  <td class='l'>Development Platform</td>
							  <td ><select name="platform" size="1">
							      <option>Select One</option>
							      <option>Borland Delphi</option>
							      <option>Borland Paradox</option>
							      <option>Borland Visual dBase</option>
							      <option>C</option>
							      <option>C++</option>
							      <option>CA Clipper</option>
							      <option>Delphi</option>
							      <option>Fortran</option>
							      <option>Java</option>
							      <option>Microsoft Access</option>
							      <option>Microsoft FoxPro</option>
							      <option>Microsoft Visual Basic</option>
							      <option>Other</option>
							      <option>Pascal</option>
							      <option>Perl</option>
							      <option>Powersoft PowerBuilder</option>
							      <option>Smalltalk</option>
							    </select>
							  </td>
							</tr>
							<tr>
							  <td class='l'>Protection Required date</td>
							  <td ><select name="timeframe" size="1">
							      <option>Select One</option>
							      <option>Today</option>
							      <option>1 Week</option>
							      <option>1 Month</option>
							      <option>3 Months</option>
							      <option>6 Months</option>
							      <option>Research Only</option>
							    </select>
							  </td>
							</tr>
							<tr>
							  <td class='l'>How 
							      did you hear about CrypKey?</td>
							  <td ><select name="hearabout" size="1">
							      <option selected>Select One</option>
							      <option value="Web search">Web search</option>
							      <option value="Word of mouth">Word of mouth</option>
							      <option value="Dr. Dobbs">Dr. Dobbs</option>
							      <option value="Visual Basic Programmer's Journal">Visual 
							      Basic Programmer's Journal</option>
							      <option value="Visual Developer Journal">Visual 
							      Developer Journal</option>
							      <option value="Microsoft Systems Journal">Microsoft 
							      Systems Journal</option>
							      <option value="Windows Developer Journal">Windows 
							      Developer Journal</option>
							      <option value="Software Development Magazine">Software 
							      Development Magazine</option>
							      <option value="C/C++ User's Journal">C/C++ User's 
							      Journal</option>
							      <option value="Visual C++ Developer Journal">Visual 
							      C++ Developer Journal</option>
							      <option value="Access Office VB Advisor">Access 
							      Office VB Advisor</option>
							      <option value="E-Business Advisor">E-Business Advisor</option>
							      <option value="Direct mail">Direct mail</option>
							      <option value="Link from other website">Link from 
							      other website</option>
							      <option value="Trade show">Trade show</option>
							      <option value="News media">News media</option>
							      <option value="Other">Other</option>
							    </select>
							  </td>
							</tr>
				          
				          
				        </table>      
				 <div style="margin:10px 0 0 0px;"><input type="submit" name="Submit" value="Send"></div> 
				
				        <input type="hidden" name="type" value="instant_free_trial" />
				      </form>
				    
 <?
 } else {   
	
	
	
                  
  
	
	
	
 ?>   				                                                                    
		   <h1>Thank you for downloading CrypKey Instant!  </h1> 
<h2>  
		Please check your email to download the 
		software.</h2>
 

<? } ?>   			    		
									
									
					
						<br />
						<br />
					 </td>
					<td class="callout_column"> 
						  <div class='butshell'><a href="/contact_us.php" rel='boxed' class='button'>Questions? Contact Us</a> </div>  
				      <br />
				      <br />
					   	<div class="quotes">
						<?
						$q = getQuotes(1) ;
						foreach($q as $quote){?>
							 <div class="quote_container">
								<div class="q">
									<?=$quote[0]?>                        
									</div>
									<div class="a">
										<?=$quote[1]?>                        
									</div> 
							</div>
						<? } ?>  
						</div>
					 </td>
				   
					</tr>
					</table>
				   </div>
				<!-- end page -->
				<div class="footer">
					<? include_once($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php")?>
				</div>
			   </div>
			</div> 
			<!-- end doc -->
	</body>
</html>  
<?




?>
