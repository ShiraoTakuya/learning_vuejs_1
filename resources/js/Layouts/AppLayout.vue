<template>
    <div>
      <header>
        <!-- 共通ヘッダー -->
        <h1>My Site</h1>
      </header>
      
      <main>
        <!-- ページ固有コンテンツがここに入る -->
        <slot />
      </main>
      
      <footer>
        <!-- 共通フッター -->
        <p>&copy; 2025 My Company</p>
      </footer>
    </div>
  </template>