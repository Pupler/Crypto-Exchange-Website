<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptocurrenciesOrdersRatesTables extends Migration
{
    /**
     * Запустити міграцію.
     *
     * @return void
     */
    public function up()
    {
        // Створення таблиці cryptocurrencies
        Schema::create('cryptocurrencies', function (Blueprint $table) {
            $table->id();  // Автоматичний інкрементний id
            $table->string('name');  // Назва криптовалюти
            $table->string('symbol', 10);  // Символ криптовалюти
            $table->string('image')->nullable();  // Зображення криптовалюти
            $table->timestamps();  // created_at та updated_at
        });

        // Створення таблиці rates
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cryptocurrency_id')->constrained('cryptocurrencies');  // Посилання на криптовалюту
            $table->decimal('price', 18, 8);  // Поточний курс
            $table->timestamps();
        });

        // Створення таблиці orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('send_currency_id')->constrained('cryptocurrencies');  // Посилання на валюту, яку відправляють
            $table->foreignId('receive_currency_id')->constrained('cryptocurrencies');  // Посилання на валюту, яку отримують
            $table->decimal('amount_send', 18, 8);  // Кількість валюти для відправлення
            $table->decimal('amount_receive', 18, 8);  // Кількість валюти для отримання
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('pending');  // Статус замовлення
            $table->timestamps();
        });
    }

    /**
     * Відкотити міграцію.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('rates');
        Schema::dropIfExists('cryptocurrencies');
    }
}
