    <!-- Футер -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-car"></i>
                        </div>
                        <span class="text-xl font-bold">Rently</span>
                    </div>
                    <p class="text-gray-400">
                        Платформа для бронирования автомобилей в Воронежском регионе. Безопасно, удобно, выгодно.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Для клиентов</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Найти авто</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Как это работает</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Частые вопросы</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Отзывы</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Помощь</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Для владельцев</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Сдать авто в аренду</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Требования к авто</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Страхование</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Партнёрская программа</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Поддержка</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Контакты</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-3 text-blue-400"></i>
                            г. Воронеж, ул. Плехановская, 10
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-3 text-blue-400"></i>
                            +7 (473) 123-45-67
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-3 text-blue-400"></i>
                            info@rently.ru
                        </li>
                    </ul>
                    
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>© <?= date('Y') ?> Rently. Все права защищены. <a href="#" class="text-blue-400 hover:text-blue-300">Политика конфиденциальности</a></p>
            </div>
        </div>
    </footer>

<script src="assets/js/main.js"></script>
</body>
</html>