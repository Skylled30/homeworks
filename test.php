<?php
function translater($phrase, $lang)
{
	$dict = [
	  'en' => [
	    'привет' => 'Hello!',
	    'открыть' => 'Open',
	    'сохранить' => 'Save',
	    'закрыть_окно' => 'Close the window?',
	  ],
	  'ru' => [
	    'hello' => 'Привет!',
	    'open' => 'Открыть',
	    'save' => 'Сохранить',
	    'close_the_window' => 'Закрыть окно?',
	  ],
	];
	$phrase = mb_strtolower($phrase);
	$lang = mb_strtolower($lang);
	foreach ($dict as $key_lang => $value_phrases) {
		if($key_lang === $lang){
			foreach ($value_phrases as $key => $value) {
				if($key === $phrase){
					return $phrase . '=>' . $value;
				}
			}
		}

	}
	return 'I cannot this translation';
}

include 'index.php';
