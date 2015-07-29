<body id="error404">
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<div class="branding">
				<div class="logo">
                                    <img src="<?php echo base_url(); ?>assets/img/logo.png" width="168" height="40" alt="Logo">
				</div>
			</div>

		</div>
	</div>
</div>
<!--Always use id="error404" here then it will not conflict with your website css-->
<div class="container error-page-cntainer">
	<div class="row">
		<!--404 with error message show area start here-->
		<div class="span8">
			<div class="leftSide">
				<div class="errorCode">
					404
				</div>
				<div class="bubble">
					<h3><span>Oops!</span>Page not found...</h3>
					<h4>We are sorry</h4>
					<p>
						We are sorry but the page you are looking for does not exist. :(
					</p>
				</div>
			</div>
		</div>
		<!--404 with error message show area end here-->
		<!--Right side sugestions area start here-->
		<div class="span4">
			<div class="rightSide">
				<h3><span>Lost?</span> We suggest...</h3>
				<ol>
					<li>Checking the web address for typos.</li>
                                        <li>Visiting the <a href="<?php echo base_url()."index"?> ">home</a> page.</li>
					<!--<li>Visiting our full website <a href="#">sitemap</a> here.</li>-->
					<!--<li>Using our site search</li>-->
				</ol>
				<p>
					You may have mistyped the URL or the page may have been removed from our system. Try searching by entering keyword in the search field or try one of the links below.
				</p>
				
				
			</div>
		</div>
		<!--Right side sugestions end start here-->
	</div>
</div>
