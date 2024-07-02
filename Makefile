install: # команда полезна при первом клонировании репозитория (или после удаления зависимостей)
	composer install
	
brain-games:
	./bin/brain-games
	
validate: # проверяет файл composer.json на ошибки
	composer validate
