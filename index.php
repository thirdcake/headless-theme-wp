<?php
if( ! current_user_can( 'edit_posts' )): // 編集できない人には404を返す
  http_response_code( 404 ) ;
else:
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認用</title>
  <?php wp_head(); ?>
</head>
<body>
<?php
if ( have_posts() ) {  // wpの内容表示
	while ( have_posts() ) {
  	the_post();
    if(is_page() || is_single()) {  // 固定、投稿ページのとき
      get_template_part('template-parts/article');
    }else {  // 一覧ページのとき
      get_template_part('template-parts/list');
    }
  }
} else {  // wpの内容が無いとき
  echo '記事がありませんでした';
}
?>
<?php wp_footer(); ?>
</body>
</html>
<?php
endif;
