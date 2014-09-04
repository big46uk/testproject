<!doctype html>
<html>
<head>
    <title>My Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css">
   
	<style>
    @media all and (max-width: 35em) {
    .my-breakpoint .ui-block-a,
    .my-breakpoint .ui-block-b,
    .my-breakpoint .ui-block-c,
    .my-breakpoint .ui-block-d,
    .my-breakpoint .ui-block-e {
      width: 100%;
      float:none;
    }
  }
 
  @media all and (min-width: 45em) {
    .my-breakpoint.ui-grid-b .ui-block-a { width: 49.95%; }
    .my-breakpoint.ui-grid-b .ui-block-b,
    .my-breakpoint.ui-grid-b .ui-block-c { width: 24.925%; }
  }
  </style>
</head>
<body>
    <div data-role="page">
 
        <div data-role="header">
            <h1>My Title</h1>
        </div><!-- /header -->
 
        <div data-role="content" class="ui-content">
			<div class="ui-grid-b my-breakpoint">
				<div class="ui-block-a"><div class="ui-body ui-body-d">Block A</div></div>
				<div class="ui-block-b"><div class="ui-body ui-body-d">Block B</div></div>
				<div class="ui-block-c"><div class="ui-body ui-body-d">Block C</div></div>
			</div>
        </div><!-- /content -->
 
        <div data-role="footer">
            <h4>My Footer</h4>
        </div><!-- /footer -->
 
    </div><!-- /page -->
</body>
</html>

 <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>