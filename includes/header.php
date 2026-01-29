<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rently — Аренда автомобилей</title>
    <!-- Tailwind CSS via CDN -->
        <title>AutoFlow — Аренда автомобилей в Воронеже</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Иконки Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Собственный CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-50 text-gray-800">
<header class="bg-white shadow-sm">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Логотип -->
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-car text-white"></i>
                    </div>
                    <span class="text-xl font-bold text-blue-600">Rently</span>
                </div>
                
                <!-- Основное меню -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Найти авто</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Как это работает</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Для владельцев</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Помощь</a>
                </div>

                <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                    <div class="relative w-full">
                        <form action="/cars/search.php" method="GET" class="flex">
                            <div class="relative flex-1">
                                <input type="text" 
                                       name="q" 
                                       class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="Найти машину... Например: Kia Rio 2022"
                                       value="<?= htmlspecialchars($_GET['q'] ?? '') ?>">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                                    <i class="fas fa-search text-gray-400"></i>
                                </div>
                            </div>
                            <button type="submit" 
                                    class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:from-blue-700 hover:to-purple-700 font-medium">
                                Найти
                            </button>
                        </form>
                        
                        <!-- Быстрые подсказки под строкой поиска -->
                        <div class="absolute top-full left-0 right-0 mt-1 bg-white rounded-lg shadow-lg border hidden group-hover:block z-50" id="searchSuggestions">
                            <div class="p-3 border-b">
                                <p class="text-xs text-gray-500 font-medium">Популярные запросы:</p>
                            </div>
                            <div class="p-2">
                                <a href="/cars/?q=kia rio" class="flex items-center px-3 py-2 hover:bg-gray-50 rounded">
                                    <i class="fas fa-car text-blue-500 mr-3"></i>
                                    <span>Kia Rio</span>
                                    <span class="ml-auto text-sm text-gray-500">от 1 890 ₽/день</span>
                                </a>
                                <a href="/cars/?q=toyota camry" class="flex items-center px-3 py-2 hover:bg-gray-50 rounded">
                                    <i class="fas fa-car text-green-500 mr-3"></i>
                                    <span>Toyota Camry</span>
                                    <span class="ml-auto text-sm text-gray-500">от 3 450 ₽/день</span>
                                </a>
                                <a href="/cars/?q=renault duster" class="flex items-center px-3 py-2 hover:bg-gray-50 rounded">
                                    <i class="fas fa-car text-red-500 mr-3"></i>
                                    <span>Renault Duster</span>
                                    <span class="ml-auto text-sm text-gray-500">от 2 150 ₽/день</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Кнопки входа/регистрации -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-blue-600 hidden md:block">
                        <i class="fas fa-heart text-lg"></i>
                    </button>
                    <button class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-bell text-lg"></i>
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700">
                        Войти
                    </button>
                    <button class="md:hidden text-gray-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>