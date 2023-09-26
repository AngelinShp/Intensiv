
function submitForm() {
	// Выбираем первую форму среди всех форм на данной странице HTML; затем получаем все её элементы (поля) через свойство elements 
	var elements = document.forms[0].elements 
	// Получаем URL-адрес, указанный в атрибуте action 
	var url = document.forms[0].action 
	// Создаём пустой объект params, который будет содержать данные формы	
	var params = {}
	// Формируем полученные данные
	for(var i = 0; i < elements.length; i++ ) { 
		// Получаем имя элемента через атрибут name и его значение через свойство value, затем добавляем их в объект params
		params[elements[i].name] = elements[i].value 
	}
	// Создаём новый объект XMLHttpRequest для отправки HTTP-запросов
	var xhr = new XMLHttpRequest() 
	// Инициализируем запрос методом POST к указанному url, а с помощью false указываем на синхронный режим отправки 
	xhr.open("POST", url, false) 
	// Устанавливаем заголовки, указывая, что ожидаем ответ в формате JSON и данные отправляем в формате JSON 
	xhr.setRequestHeader("Accept", "application/json")
	xhr.setRequestHeader("Content-type", "application/json") 
	// Отправляем данные в JSON с использованием send(), преобразуя объект params (JS-объект) в JSON-строку (JSON-объект) с помощью JSON.stringify()
	xhr.send(JSON.stringify(params))
    // Устанавливаем обработчик события onload, который будет вызван, когда ответ на запрос будет получен (ожидаем, пока придёт ответ)
    xhr.onload = function() { 
		// Проверяем статус ответа: если он равен 200 (ОК), то выполняем блок кода в if 
		if(xhr.status === 200) { 
			// Преобразуем полученный ответ в формате JSON обратно в объект JS
			var result = JSON.parse(xhr.response)
			// Выводим значения из полученного объекта в элемент с id = result на странице
			document.getElementById('result').innerHTML = `Email: ${result.email}, Text: ${result.text}`
		} else {
			// Если пришёл ответ с ошибкой, выводим сообщение с кодом статуса и текстом ошибки в alert
			alert(`${xhr.status} ${xhr.statusText}`) 
		} 
	}
}

