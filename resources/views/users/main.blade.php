<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>machilogメイン画面</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <header>
        
        <!-- Alpine.jsで `open` という変数を定義し、初期値を false にする -->
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <!-- ロゴ部分 -->
                    <div class="flex items-center">
                        <img src="{{ asset('images/machilog_logo.png') }}" alt="ロゴ" class="w-32 h-auto">
                    </div>

                    <!-- PC用メニュー（スマホでは hidden になる） -->
                    <div class="hidden sm:flex sm:items-center sm:space-x-8">
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900">新規登録</a>
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">ログイン</a>
                        <a href="{{ route('map') }}" class="text-gray-600 hover:text-gray-900">マップ</a>
                    </div>

                    <!-- ハンバーガーボタン（PCでは hidden になる） -->
                    <div class="flex items-center sm:hidden">
                        <button @click="open = ! open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <!-- メニューが開いていない時のアイコン (三本線) -->
                            <svg x-show="! open" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!-- メニューが開いている時のアイコン (×印) -->
                            <svg x-show="open" x-cloak class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- スマホ用ドロップダウンメニュー -->
            <div x-show="open" x-transition class="sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="{{ route('register') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">新規登録</a>
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">ログイン</a>
                    <a href="{{ route('map') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">マップ</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div>
            
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>