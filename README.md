# inertiaの導入手順メモ

## 手順

1. **ComposerでInertiaをインストール**
   ```bash
   composer require inertiajs/inertia-laravel
   ```

2. **npmでVueとInertiaのVueバインディングをインストール**
   ```bash
   npm install vue@3 @inertiajs/vue3
   ```

3. **Bladeテンプレートを作成**
   ```blade
   [app.blade.php]
   @extends('layouts.app')

   @section('content')
       @vite('resources/js/app.js')
       @inertia
   @endsection
   ```

4. **コンポーネントの戻り値を変更**
   - `return view()`を`return Inertia::render()`に変更します。
   - これにより、.vueファイルを直接参照することができます。