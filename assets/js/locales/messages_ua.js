/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: RU (Russian; русский язык)
 */
(function ($) {
	$.extend($.validator.messages, {
		required: "Це поле є обов`язковим.",
		remote: "Будь ласка, введіть правильне значення.",
		email: "Будь ласка, введіть коректну адресу електронної пошти.",
		url: "Будь ласка, введіть коректну URL.",
		date: "Будь ласка, введіть коректну дату.",
		dateISO: "Будь ласка, введіть коректну дату в форматі ISO.",
		number: "Будь ласка, введіть число.",
		digits: "Будь ласка, введіть лише цифри.",
		creditcard: "Будь ласка, введіть правильний номер кредитної картки.",
		equalTo: "Це поле повинно збігатися з попереднім.",
		accept: "Будь ласка, виберіть файл з правильним розширенням.",
		maxlength: $.validator.format("Будь ласка, введіть не більш {0} символів."),
		minlength: $.validator.format("Будь ласка, введіть не менш {0} символів."),
		rangelength: $.validator.format("Будь ласка, введіть значення довжиною від {0} до {1} символів."),
		range: $.validator.format("Будь ласка, введіть число від {0} до {1}."),
		max: $.validator.format("Будь ласка, введіть число, менше або рівне {0}."),
		min: $.validator.format("Будь ласка, введіть число, більше або рівне {0}.")
	});
}(jQuery));