<?php  $title='工具栏测试' ?>
<?php include("../templates/header.php"); ?>

<div id="bar"></div>
<div id="log"></div>
<div id="pbar"></div>
<div id="pbar1"></div>
<div id="numpbar"></div>
<div id="numpbar1"></div>
<div id="numpbar2"></div>
<div id="numpbar3"></div>

  <?php $url = 'bui/toolbar'?>
  <?php include("../templates/script.php"); ?>

  <script type="text/javascript" src="../../src/toolbar/baritem.js"></script>
  <script type="text/javascript" src="../../src/toolbar/bar.js"></script>
  <script type="text/javascript" src="../../src/toolbar/pagingbar.js"></script>
	<script type="text/javascript" src="../../src/toolbar/numberpagingbar.js"></script>
  <script type="text/javascript" src="../../src/toolbar/toolbar.js"></script>
  <script type="text/javascript" src="specs/bar-spec.js"></script>
  <script type="text/javascript" src="specs/pagingbar-spec.js"></script>
	<script type="text/javascript" src="specs/numberpagingbar-spec.js"></script>

<?php include("../templates/footer.php"); ?>