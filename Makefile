install: # команда полезна при первом клонировании репозитория (или после удаления зависимостей)
	composer install
	
brain-games:
	./bin/brain-games
	
validate: # проверяет файл composer.json на ошибки
	composer validate
	
lint: # проверка кода на соответствие стандартам
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime

.PHONY: brain-even brain-calc brain-gcd brain-progression brain-prime
