document.addEventListener('DOMContentLoaded', function () {
    var isGecko = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
    var iframe = (isGecko) ? document.getElementById("frameId") : frames["frameId"];
    var iWin = (isGecko) ? iframe.contentWindow : iframe.window;
    var iDoc = (isGecko) ? iframe.contentDocument : iframe.document;
    /* Создаём код пустой HTML-страницы */
    iHTML = "<html><head></head><body style='background-color: #f0f0f0;'><?php echo $attribute;?></body></html>";
    iDoc.open(); // Открываем фрейм
    iDoc.write(iHTML); // Добавляем написанный код в фрейм
    iDoc.close(); // Закрываем фрейм
    iDoc.designMode = "on"; // Включаем режим редактирования фрейма
    function setBold() {
        iWin.focus();
        iWin.document.execCommand("bold", null, "");
    }

    function setItal() {
        iWin.focus();
        iWin.document.execCommand("italic", null, "");
    }

    function setUnder() {
        iWin.focus();
        iWin.document.execCommand("underline", null, "");
    }

    function save() {
        /* Сохранение HTML-кода в поле hidden, чтобы потом можно было передать полученный HTML-код в скрипт-обработчик */
        document.getElementById("content").value = iDoc.body.innerHTML;
        return true;
    }
});