<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';
?>

<?php include 'includes/header.php'; ?>

    
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-10">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    Найди идеальный автомобиль для поездки
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Бронируйте автомобили от проверенных арендодателей в Воронеже и области
                </p>
            </div>
            
            <!-- Форма поиска -->
            <div class="bg-white rounded-2xl shadow-card p-6 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Место получения -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>Где получить авто?
                        </label>
                        <div class="relative">
                            <input type="text" 
                                   class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="Воронеж, центр города">
                            <i class="fas fa-search absolute right-3 top-3.5 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <!-- Даты -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="far fa-calendar text-blue-500 mr-2"></i>Забрать
                        </label>
                        <input type="date" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               value="2024-06-15">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="far fa-calendar-check text-blue-500 mr-2"></i>Вернуть
                        </label>
                        <input type="date" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               value="2024-06-18">
                    </div>
                </div>
                
                <div class="mt-6 flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <button class="text-blue-600 font-medium flex items-center">
                            <i class="fas fa-sliders-h mr-2"></i> Расширенный поиск
                        </button>
                    </div>
                    <button class="btn-primary text-white font-semibold px-8 py-3 rounded-lg w-full md:w-auto">
                        Найти автомобили
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            
            <!-- Быстрые категории -->
            <div class="flex flex-wrap justify-center gap-4 mt-10">
                <button class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200 hover:border-blue-500 hover:text-blue-600">
                    🚗 Эконом
                </button>
                <button class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200 hover:border-blue-500 hover:text-blue-600">
                    🚙 Комфорт
                </button>
                <button class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200 hover:border-blue-500 hover:text-blue-600">
                    🚘 Бизнес
                </button>
                <button class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200 hover:border-blue-500 hover:text-blue-600">
                    🛻 Внедорожники
                </button>
                <button class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200 hover:border-blue-500 hover:text-blue-600">
                    🚐 Минивэны
                </button>
            </div>
        </div>
    </section>

    <!-- Секция с популярными автомобилями -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                    Популярные автомобили в Воронеже
                </h2>
                <a href="#" class="text-blue-600 font-medium hover:text-blue-800">
                    Смотреть все <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            
            <!-- Сетка автомобилей -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Карточка автомобиля 1 -->
                <div class="bg-white rounded-xl shadow-card overflow-hidden car-card border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                             alt="Kia Rio" 
                             class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                            <i class="far fa-heart text-gray-600"></i>
                        </button>
                        <div class="absolute bottom-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-1 rounded">
                            Популярный
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Kia Rio 2022</h3>
                                <p class="text-gray-500 text-sm">Автомат, 1.6 л, бензин</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="font-bold">4.8</span>
                                <span class="text-gray-500 text-sm ml-1">(124)</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-4">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-user-friends text-gray-400 mr-2"></i>
                                <span>5 мест</span>
                            </div>
                            <div class="flex items-center mr-4">
                                <i class="fas fa-suitcase text-gray-400 mr-2"></i>
                                <span>2 багажника</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-snowflake text-gray-400 mr-2"></i>
                                <span>Кондиционер</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">1 890 ₽ <span class="text-gray-500 text-sm font-normal">/ день</span></p>
                                <p class="text-gray-500 text-sm">Итого: ~5 670 ₽ за 3 дня</p>
                            </div>
                            <button class="bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Карточка автомобиля 2 -->
                <div class="bg-white rounded-xl shadow-card overflow-hidden car-card border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                             alt="Toyota Camry" 
                             class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                            <i class="far fa-heart text-gray-600"></i>
                        </button>
                    </div>
                    
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Toyota Camry 2021</h3>
                                <p class="text-gray-500 text-sm">Автомат, 2.5 л, гибрид</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="font-bold">4.9</span>
                                <span class="text-gray-500 text-sm ml-1">(89)</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-4">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-user-friends text-gray-400 mr-2"></i>
                                <span>5 мест</span>
                            </div>
                            <div class="flex items-center mr-4">
                                <i class="fas fa-suitcase text-gray-400 mr-2"></i>
                                <span>3 багажника</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-snowflake text-gray-400 mr-2"></i>
                                <span>Климат-контроль</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">3 450 ₽ <span class="text-gray-500 text-sm font-normal">/ день</span></p>
                                <p class="text-gray-500 text-sm">Итого: ~10 350 ₽ за 3 дня</p>
                            </div>
                            <button class="bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Карточка автомобиля 3 -->
                <div class="bg-white rounded-xl shadow-card overflow-hidden car-card border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                             alt="Renault Duster" 
                             class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                            <i class="far fa-heart text-gray-600"></i>
                        </button>
                        <div class="absolute bottom-3 left-3 bg-green-600 text-white text-xs font-semibold px-2 py-1 rounded">
                            Выгодно
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Renault Duster 2023</h3>
                                <p class="text-gray-500 text-sm">Механика, 1.6 л, бензин</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="font-bold">4.6</span>
                                <span class="text-gray-500 text-sm ml-1">(67)</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-4">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-user-friends text-gray-400 mr-2"></i>
                                <span>5 мест</span>
                            </div>
                            <div class="flex items-center mr-4">
                                <i class="fas fa-suitcase text-gray-400 mr-2"></i>
                                <span>4 багажника</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-snowflake text-gray-400 mr-2"></i>
                                <span>Кондиционер</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">2 150 ₽ <span class="text-gray-500 text-sm font-normal">/ день</span></p>
                                <p class="text-gray-500 text-sm">Итого: ~6 450 ₽ за 3 дня</p>
                            </div>
                            <button class="bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>

                <?php
    $cars = getAllCars();
    if (empty($cars)):
    ?>
        <div class="text-center py-12 bg-white rounded-xl shadow">
            <p class="text-gray-500 text-lg">Автомобили не найдены. Проверьте таблицу `cars` в БД.</p>
        </div>
    <?php else: ?>

            <?php foreach ($cars as $car): ?>
                <div class="bg-white rounded-xl shadow-card overflow-hidden car-card border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                             alt="<?= htmlspecialchars($car['brand'] . ' ' . $car['model']) . ' ' . $car['year'] ?>" 
                             class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow">
                            <i class="far fa-heart text-gray-600"></i>
                        </button>
                        <div class="absolute bottom-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-1 rounded">
                            Популярный
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900"><?= htmlspecialchars($car['brand'] . ' ' . $car['model']) . ' ' . $car['year'] ?></h3>
                                <p class="text-gray-500 text-sm"><?= $car['transmission'] === 'manual' ? 'Механика' : 'Автомат' ?>, 1.6 л, бензин, <?= strtoupper($car['class']) ?></p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="font-bold">4.8</span>
                                <span class="text-gray-500 text-sm ml-1">(124)</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-4">
                            <div class="flex items-center mr-4">
                                <i class="fas fa-user-friends text-gray-400 mr-2"></i>
                                <span><?= $car['seats'] ?> мест</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-snowflake text-gray-400 mr-2"></i>
                                <span>Кондиционер</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-2xl font-bold text-gray-900"><?= formatPrice($car['price_per_day']) ?> <span class="text-gray-500 text-sm font-normal">/ день</span></p>
                                <p class="text-gray-500 text-sm">Итого: ~<?= formatPrice($car['price_per_day'] * 3) ?> за 3 дня</p>
                            </div>
                            <button class="bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700">
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Секция "Как это работает" -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Как арендовать автомобиль
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Простой процесс бронирования за 3 шага. Получите авто в удобном месте в Воронеже.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            1
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Выберите авто</h3>
                    <p class="text-gray-600">
                        Найдите подходящий автомобиль по параметрам: даты, тип, цена. Проверьте отзывы и доступность.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            2
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Подтвердите бронь</h3>
                    <p class="text-gray-600">
                        Заполните данные и оплатите онлайн. Получите подтверждение и контакты владельца.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            3
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Получите ключи</h3>
                    <p class="text-gray-600">
                        Встретьтесь с владельцем в удобном месте в Воронеже. Проверьте авто и отправляйтесь в путь!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Секция преимуществ -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                        Почему выбирают AutoFlow
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-green-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900">Гарантия безопасности</h3>
                                <p class="text-gray-600 mt-1">
                                    Все автомобили проверены, а владельцы верифицированы. Страхование включено в каждую поездку.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-bolt text-blue-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900">Мгновенное бронирование</h3>
                                <p class="text-gray-600 mt-1">
                                    Забронируйте авто за 3 минуты. Мгновенное подтверждение без звонков и ожидания.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-map-marked-alt text-purple-600"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900">По всему Воронежу</h3>
                                <p class="text-gray-600 mt-1">
                                    Авто доступны в разных районах города: центр, Левый берег, Юго-Западный, Северный.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-car text-white text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Станьте арендодателем</h3>
                            <p class="text-gray-600 mb-6">
                                Сдавайте свой автомобиль в аренду и зарабатывайте до 40 000 ₽ в месяц
                            </p>
                            <button class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg border border-blue-200 hover:bg-blue-50">
                                Подробнее
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Мобильная навигация (скрыта по умолчанию) -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-40">
        <div class="flex justify-around items-center h-16">
            <a href="#" class="flex flex-col items-center text-blue-600">
                <i class="fas fa-search text-lg"></i>
                <span class="text-xs mt-1">Поиск</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-600">
                <i class="far fa-heart text-lg"></i>
                <span class="text-xs mt-1">Избранное</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-600">
                <i class="far fa-calendar-alt text-lg"></i>
                <span class="text-xs mt-1">Брони</span>
            </a>
            <a href="#" class="flex flex-col items-center text-gray-600">
                <i class="far fa-user text-lg"></i>
                <span class="text-xs mt-1">Профиль</span>
            </a>
        </div>
    </div>

    <!-- Простой JavaScript для интерактивности -->
    <script>
        // Добавление/удаление из избранного
        document.querySelectorAll('.fa-heart').forEach(heart => {
            heart.addEventListener('click', function() {
                if (this.classList.contains('far')) {
                    this.classList.remove('far');
                    this.classList.add('fas');
                    this.style.color = '#EF4444'; // Красный цвет
                } else {
                    this.classList.remove('fas');
                    this.classList.add('far');
                    this.style.color = '';
                }
            });
        });
        
        // Обработка кнопок "Забронировать"
        document.querySelectorAll('button:contains("Забронировать")').forEach(button => {
            button.addEventListener('click', function() {
                alert('Функция бронирования будет реализована в полной версии приложения!');
            });
        });
        
        // Обработка основной кнопки поиска
        document.querySelector('.btn-primary').addEventListener('click', function() {
            alert('Поиск автомобилей выполняется...');
        });
        
        // Изменение даты "забрать" влияет на минимальную дату "вернуть"
        const pickupDate = document.querySelector('input[type="date"]:first-of-type');
        const returnDate = document.querySelector('input[type="date"]:last-of-type');
        
        pickupDate.addEventListener('change', function() {
            returnDate.min = this.value;
            if (returnDate.value < this.value) {
                returnDate.value = this.value;
            }
        });
    </script>
</main>

<?php include 'includes/footer.php'; ?>