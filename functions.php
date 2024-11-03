<?php
add_theme_support('post-thumbnails');
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( // カスタム投稿タイプの追加関数
    'STAFF', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
    'label' => 'STAFF', // 管理画面上の表示（日本語でもOK）
    'public' => true, // 管理画面に表示するかどうかの指定
    'has_archive' => true, // 投稿した記事の一覧ページを作成する
    'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
    'show_in_rest' => true, // Gutenbergの有効化
    'supports' => array( // サポートする機能（以下）
    'title',  // タイトル
    'editor', // エディター
    'thumbnail', // アイキャッチ画像
    'revisions', // リビジョンの保存
    'custom-fields'
    ),
  ));

  register_post_type( // カスタム投稿タイプの追加関数
    'BLOG', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
    'label' => 'BLOG', // 管理画面上の表示（日本語でもOK）
    'public' => true, // 管理画面に表示するかどうかの指定
    'has_archive' => true, // 投稿した記事の一覧ページを作成する
    'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
    'show_in_rest' => true, // Gutenbergの有効化
    'supports' => array( // サポートする機能（以下）
    'title',  // タイトル
    'editor', // エディター
    'thumbnail', // アイキャッチ画像
    'revisions', // リビジョンの保存
    'custom-fields'
    ),
  ));
}


remove_filter( 'the_content', 'wpautop' );

