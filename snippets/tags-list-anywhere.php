<!-- from getkirby cookbook building a blog -->
<?php $articles = $page->siblings()
  ->listed()
  ->flip()
  ->paginate(10);
?>

<!-- fetch the basic set of articles -->
<?php $articles = $page->siblings()->listed()->flip();

// add the tag filter
if ($tag = param('tag')) {
  $articles = $articles->filterBy('tags', $tag, ',');
}

?>

<?php

// fetch all tags
$tags = $page->siblings()->listed()->pluck('tags', ',', true);

?>
<ul class="tags nav-colors">
  <?php foreach ($tags as $tag): ?>
    <li>
      <a href="<?= url('blogs', ['params' => ['tag' => $tag]]) ?>">
        <?= html($tag) ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>