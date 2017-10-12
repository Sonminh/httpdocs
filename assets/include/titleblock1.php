<?php if($id!="index"){ ?>

<div class="c-titleBlock1">
<div class="c-titleBlock1__inner openMenu">

<?php
/*==============================================
MSD3
===============================================*/
if(
	$id=="msd3"||
	$id=="msd3-2"||
	$id=="msd3-3"
){ ?>
	<div class="c-title4">
		<span>Minnie Tiller</span>
		<h2>MSD3</h2>
	</div>

	<nav class="c-navi2">
		<ul>
			<li<?php if($id=="msd3"){ echo ' class="is-active"';}?>><a href="msd3.php">コンセプト</a></li>
			<li<?php if($id=="msd3-2"){ echo ' class="is-active"';}?>><a href="msd3-2.php">基本性能</a></li>
			<li<?php if($id=="msd3-3"){ echo ' class="is-active"';}?>><a href="msd3-3.php">多彩なアタッチメント</a></li>
		</ul>
	</nav>
<?php }?>

</div>
</div>
<?php } ?>