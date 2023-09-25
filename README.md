![torbo-web-logo](https://github.com/vadym4che/turbo-web/turboweb.com.us.png)

# [Тестове завдання для PHP розробників](https://docs.google.com/document/d/1_JbDLOsV7JkQFNz4xVPz1Gjfic2-dE4AgcWkvim4JMo/edit)

## Завдання

Це тестове завдання для PHP розробників.

Напишіть програму на PHP 7.1 з такими умовами:

- Повинні існувати кілька видів собак: Шиба-іну, мопс, такса, плюшевий лабрадор, гумова такса з пищалкою.
- Собаки повинні вміти видавати звуки (гавкати, пищати) і полювати. При цьому варто пам'ятати, що мопсу полюватиме лінь, деякі іграшки не видають звуків і точно не зможуть полювати.
- Ми можемо написати команду виду "mops sound" та отримати у відповідь "woof! woof!", далі за аналогією. Реалізація консольного інтерфейсу не має значення.

# solution [Dog.php](Dog.php)

Напишіть тести за допомогою PHPUnit.

# solution [DogTest.php](DogTest.php)

Бажаємо успіху! Якщо у вас виникнуть питання, будь ласка, зв'яжіться з нами через Telegram: [NadiiaBidunHR](https://t.me/NadiiaBidunHR).

![solution](https://github.com/vadym4che/turbo-web/solution.jpg)

## Питання і Відповіді

1. **Як працюють індекси у БД?**

  Індекси у базах даних використовуються для прискорення пошуку та вибірки даних з таблиць. Вони створюються на одному або декількох полях таблиць і дозволяють базі даних ефективно знаходити рядки, що задовольняють певні умови.

  Наприклад, у MySQL можна створити індекс так:

  ```sql
  CREATE INDEX index_name ON table_name (column1, column2);
  ```

  Це дозволяє базі даних швидко знаходити рядки за значеннями у вказаних колонках, що значно підвищує продуктивність запитів.

2. **Які є JOIN в MySQL?**

  У MySQL є кілька типів JOIN-операцій для об'єднання даних з різних таблиць:

  - **INNER JOIN**: Повертає рядки, які мають відповідні значення у об'єднаних таблицях.

  ```sql
  SELECT orders.order_id, customers.customer_name
  FROM orders
  INNER JOIN customers
  ON orders.customer_id = customers.customer_id;
  ```

  - **LEFT JOIN** (або LEFT OUTER JOIN): Повертає всі рядки з першої таблиці та відповідні рядки з другої таблиці.

  ```sql
  SELECT customers.customer_name, orders.order_id
  FROM customers
  LEFT JOIN orders
  ON customers.customer_id = orders.customer_id;
  ```

  - **RIGHT JOIN** (або RIGHT OUTER JOIN): Повертає всі рядки з другої таблиці та відповідні рядки з першої таблиці.

  ```sql
  SELECT customers.customer_name, orders.order_id
  FROM customers
  RIGHT JOIN orders
  ON customers.customer_id = orders.customer_id;
  ```

  - **FULL JOIN** (або FULL OUTER JOIN): Повертає всі рядки з обох таблиць, де є співпадіння, і доповнює їх NULL-значеннями там, де немає співпадінь.

  ```sql
  SELECT customers.customer_name, orders.order_id
  FROM customers
  FULL JOIN orders
  ON customers.customer_id = orders.customer_id;
  ```

  Ці операції дозволяють комбінувати дані з різних таблиць в залежності від вашого завдання.

3. **Що таке dependency inversion?**

  Dependency Inversion - це один з принципів SOLID в об'єктно-орієнтованому програмуванні. Він стверджує, що класи вищого рівня не повинні залежати від класів нижчого рівня. Замість цього обидва рівні повинні залежати від абстракцій.

  Наприклад, ви створюєте вищорівневий клас `Car`, який взаємодіє з низькорівневим класом `Engine`. Замість того, щоб `Car` напряму залежав від конкретного `Engine`, ви створюєте абстракцію, наприклад, інтерфейс `EngineInterface`, і робите `Engine` реалізацією цього інтерфейсу. Тепер `Car` залежить від `EngineInterface`, а не від конкретного `Engine`.

  ```php
  interface EngineInterface {
      public function start();
  }

  class Engine implements EngineInterface {
      public function start() {
          // Логіка запуску двигуна
      }
  }

  class Car {
      protected $engine;

      public function __construct(EngineInterface $engine) {
          $this->engine = $engine;
      }

      public function startCar() {
          $this->engine->start();
      }
  }
  ```

4. **У чому різниця між GET та POST запитом?**

Різниця між GET і POST полягає в тому, як дані передаються на сервер:

  - **GET**: Відомості передаються через URL-запит. GET-запити підходять для отримання даних, і дані видимі у URL. Наприклад, коли ви вводите URL у веб-браузері, ви відправляєте GET-запит.

  Приклад URL з GET-запитом:

  ```arduino
  https://example.com/search?query=php&page=1
  ```

  - **POST**: Відомості передаються у тілі запиту. POST-запити підходять для відправлення та оновлення даних на сервері. Дані не видимі у URL, і вони не обмежені обсягом.

  Приклад POST-запиту (використовуючи HTML-форму):

  ```html
  <form method="POST" action="process.php">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="Submit">
  </form>
  ```

5. **У чому різниця дзвінка self і static?**

  У PHP `self` і `static` використовуються для доступу до методів і властивостей класу, але вони мають важливу різницю:

  - **`self`**: Вказує на поточний клас, в якому був визначений метод. Використовується для статичних методів та властивостей, і він завжди посилається на клас, де визначено цей метод.

  Приклад:

  ```php
  class MyClass {
    public static function myMethod() {
        echo 'Called from MyClass';
    }

    public static function callMyMethod() {
        self::myMethod(); // Виклик myMethod() в поточному класі (MyClass)
    }
  }

  MyClass::callMyMethod(); // Результат: Called from MyClass
  ```

  - **`static`**: Вказує на поточний клас, в якому викликається метод. Використовується для статичних методів і властивостей, і він дозволяє перевизначення методу в підкласах.

  Приклад:

  ```php
  class MyClass {
    public static function myMethod() {
        echo 'Called from MyClass';
    }
  }

  class MyChildClass extends MyClass {
      public static function myMethod() {
          echo 'Called from MyChildClass';
      }
  }

  MyChildClass::myMethod(); // Результат: Called from MyChildClass
  ```

  Отже, `self` завжди посилається на поточний клас, де визначено метод, тоді як `static` дозволяє перевизначення методів у підкласах.

6. **Яка різниця між MVP та MVC?**

  MVP (Модель-Вид-Презентер) і MVC (Модель-Вид-Контролер) - це архітектурні шаблони для розробки програмного забезпечення. Основна різниця полягає в тому, як вони розділяють відповідальності між компонентами:

  - **MVP (Модель-Вид-Презентер)**:
      - **Модель (Model)**: Відповідає за дані і бізнес-логіку. Це часто незалежна частина програми.
      - **Вид (View)**: Відображає дані і взаємодіє з користувачем. Вишукана логіка відсутня.
      - **Презентер (Presenter)**: Відповідає за комунікацію між Моделлю і Видом. Містить бізнес-логіку і оброблює події від користувача.

  - **MVC (Модель-Вид-Контролер)**:
    - **Модель (Model)**: Відповідає за дані і бізнес-логіку, але може бути більш важливою частиною програми.
    - **Вид (View)**: Відображає дані і взаємодіє з користувачем, але може містити деяку логіку для відображення.
    - **Контролер (Controller)**: Обробляє запити від користувача і взаємодіє як з Моделлю, так і з Видом. Містить бізнес-логіку.

  Різниця полягає в розподілі логіки: у MVP Вид має менше логіки, а вся бізнес-логіка знаходиться в Презентері, тоді як у MVC логіка розподіляється між Контролером і Видом.

7. **Яка різниця між == та === в PHP?**

  У PHP `==` і `===` використовуються для порівняння значень, але вони мають важливу різницю:

  - **`==`** (рівність): Порівнює значення двох виразів без врахування типу даних і повертає `true`, якщо значення однакові.

  Приклад:

  ```php
  $x = 5;
  $y = '5';
  if ($x == $y) {
      echo 'Equal';
  } else {
      echo 'Not equal';
  }
  // Результат: Equal
  ```

  - **`===`** (ідентичність): Порівнює значення і тип даних двох виразів і повертає `true`, лише якщо значення і тип ідентичні.

  Приклад:

  ```php
  $x = 5;
  $y = '5';
  if ($x === $y) {
      echo 'Identical';
  } else {
      echo 'Not identical';
  }
  // Результат: Not identical
  ```

  Отже, == порівнює значення з приведенням типів, а === порівнює значення та типи без зміни типу даних.

8. **Що таке final class та final method?**

  У PHP ключове слово `final` використовується для обмеження можливостей наслідування класів і перевизначення методів:

  - **`final class`**: Клас, оголошений як `final`, не може бути успадкований. Це означає, що ви не можете створювати підкласи для такого класу.

  Приклад:

  ```php
  final class FinalClass {
    // Код класу
  }
  // Наступний код викличе помилку:
  // class ChildClass extends FinalClass {}
  ```

  - **`final method`**: Метод, оголошений як `final`, не може бути перевизначений у підкласі. Це забороняє змінювати поведінку методу у спадковому класі.

  Приклад:

  ```php
  class ParentClass {
    final public function myMethod() {
        // Код методу
    }
  }

  class ChildClass extends ParentClass {
      // Наступний код призведе до помилки:
      // public function myMethod() {}
  }
  ```

  `final` дозволяє забезпечити недоторканність деяких класів та методів, щоб зберегти їхню поведінку без можливості змін.

9. **Якими фреймворками ви працювали?**

  У моєму досвіді роботи я працював з різними фреймворками, включаючи Flask, Django, Angular, React, Vue, Node Express, та Nuxt. Моя готовність та здатність працювати з різними фреймворками свідчать про мою гнучкість і здатність швидко навчатися новим технологіям. Я також зацікавлений у розробці на PHP і вважаю себе незалежним розробником від конкретного фреймворку.

10. **Розкажіть про ваші навички, які дають вам перевагу. Як вони відповідають нашим вимогам?**

  Моя глибока зацікавленість у розробці та різноманітний досвід роботи з різними фреймворками та технологіями дозволяють мені бути поліглотом у світі програмування. Я швидко навчаюся та готовий брати на себе виклики. Працюючи над проектами, я дотримуюся високих стандартів якості і ретельно перевіряю свій код. Я також вважаю розробку програмного забезпечення своїм покликанням, і ця пристрасть до роботи дозволяє мені завжди надавати найкращі результати. Мої навички та підхід до роботи відповідають вашим вимогам, і я завжди готовий прикладати зусилля для досягнення успіху у проектах.
