function validateForm() {
  // Получаем элементы формы по их id
  let inputMail = document.getElementById("inputMail");
  let inputName = document.getElementById("inputName");
  let inputPhone = document.getElementById("inputPhone");
  let inputAddress = document.getElementById("inputAddress");

  // Регулярные выражения для проверки формата электронной почты и номера телефона
  let regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let regPhone = /^\d+$/;

  // Проверяем, что все поля заполнены
  if (inputMail.value == "" || inputName.value == "" || inputPhone.value == "" || inputAddress.value == "") {
    alert("Пожалуйста, заполните все поля формы!");
    return false;
  }

  // Проверяем, что электронная почта соответствует нужному формату
  if (!regEmail.test(inputMail.value)) {
    alert("Пожалуйста, введите корректный адрес электронной почты!");
    inputMail.focus();
    return false;
  }

  // Проверяем, что номер телефона соответствует нужному формату
  if (!regPhone.test(inputPhone.value)) {
    alert("Пожалуйста, введите корректный номер телефона !");
    inputPhone.focus();
    return false;
  }
// Отображаем данные из формы в консоль разработчика
console.log("Электронная почта: " + inputMail.value);
console.log("Ваше имя: " + inputName.value);
console.log("Номер телефона: " + inputPhone.value);
console.log("Ваш адрес: " + inputAddress.value);
  // Если все проверки пройдены, возвращаем true
  return true;
}

// Получаем элемент кнопки по классу
let formBtn = document.querySelector(".form-btn");

// Добавляем обработчик события клика на кнопку
formBtn.addEventListener("click", function(event) {
  // Отменяем действие по умолчанию (отправку формы)
  event.preventDefault();
  // Вызываем функцию валидации формы
  let result = validateForm();
  // Если валидация успешна, отправляем форму на сервер
  if (result) {
    // Здесь можно добавить код для отправки формы на сервер
    alert("Форма успешно отправлена!");
  }
});