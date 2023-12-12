// Функция для фильтрации книг по названию
function filterBooks() {
    // Получаем значение из поля для поиска и приводим его к верхнему регистру
    let searchValue = document.getElementById("search-input").value.toUpperCase();
    // Получаем все карточки книг по классу
    let books = document.getElementsByClassName("card");
    // Проходимся по всем карточкам книг
    for (let i = 0; i < books.length; i++) {
      // Получаем элемент с названием книги по классу
      let bookTitle = books[i].getElementsByClassName("card-title")[0];
      // Получаем текст из элемента с названием книги и приводим его к верхнему регистру
      let bookTitleText = bookTitle.textContent.toUpperCase();
      // Проверяем, содержит ли название книги поисковый запрос
      if (bookTitleText.includes(searchValue)) {
        // Если да, то показываем карточку книги
        books[i].style.display = "";
      } else {
        // Если нет, то скрываем карточку книги
        books[i].style.display = "none";
      }
    }
  }
  
  // Добавляем обработчик события input на поле для поиска
  document.getElementById("search-input").addEventListener("input", filterBooks);