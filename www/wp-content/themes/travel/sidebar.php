<div class="sidebar">

<?php if (!dynamic_sidebar('sidebar')): ?>
    <div class="vidget">
        <h2>Категории</h2>
        <ul>
            <?php wp_list_categories(array('title_li' => '')); ?>
        </ul>
    </div>
<?php endif; ?>

	<!--<div class="vidget">
		<h2>Категории</h2>
		<ul>
			<li>- <a href="#">Италия</a></li>
			<li>- <a href="#">Германия</a></li>
			<li>- <a href="#">Франция</a></li>
			<li>- <a href="#">Великобритания</a></li>
			<li>- <a href="#">Египет</a></li>
			<li>- <a href="#">АОЭ</a></li>
		</ul>
	</div>-->
</div>