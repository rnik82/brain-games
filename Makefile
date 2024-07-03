install: # команда полезна при первом клонировании репозитория (или после удаления зависимостей)
	composer install
	
brain-games:
	./bin/brain-games
	
validate: # проверяет файл composer.json на ошибки
	composer validate
	
lint: # проверка кода на соответствие стандартам
	composer exec --verbose phpcs -- --standard=PSR12 src bin
