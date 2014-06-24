<?php

return array(

	'extend' => 'Ut�ka',

	'fields' => 'Anpassade f�lt',
	'fields_desc' => 'Skapa ytterligare f�lt',

	'variables' => 'Webbplats variabler',
	'variables_desc' => 'Skapa ytterligare metadata',

	'create_field' => 'Skapa ett nytt f�lt',
	'editing_custom_field' => '�ndrar f�lt &ldquo;%s&rdquo;',
	'nofields_desc' => 'Det finns inga f�lt �nnu',

	'create_variable' => 'Skapa en ny variabel',
	'editing_variable' => '�ndrar variabel &ldquo;%s&rdquo;',
	'novars_desc' => 'Det finns inga variabler �nnu',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Vilken typ av inneh�ll som du vill l�gga till det h�r f�ltet.',

	'field' => 'F�lt',
	'field_explain' => 'Html ing�ngstyp',

	'key' => 'Unik nyckel',
	'key_explain' => 'Den unika nyckeln f�r ditt f�lt',
	'key_missing' => 'V�nligen ange en unik nyckel',
	'key_exists' => 'Nyckeln anv�nds redan',

	'label' => 'Etikett',
	'label_explain' => 'L�sbart namn p� f�lt',
	'label_missing' => 'V�nligen ange en etikett',

	'attribute_type' => 'Filtyper',
	'attribute_type_explain' => 'Kommaseparerad lista med de accepterade filtyperna. Tomt accepterar alla.',

	// images
	'attributes_size_width' => 'Bild maxbredd',
	'attributes_size_width_explain' => 'Bilder kommer att �ndras om de �r st�rre �n max storlek',

	'attributes_size_height' => 'Bild maxh�jd',
	'attributes_size_height_explain' => 'Bilder kommer att �ndras om de �r st�rre �n max storlek',

	// custom vars
	'name' => 'Namn',
	'name_explain' => 'Ett unikt namn',
	'name_missing' => 'V�nligen ange ett unikt namn',
	'name_exists' => 'Namnet anv�nds redan',

	'value' => 'V�rde',
	'value_explain' => 'De data du vill lagra (upp till 64kb)',
	'value_code_snipet' => 'Textsnutt att infoga i mallen:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Din variabel skapades',
	'variable_updated' => 'Din variabel uppdaterades',
	'variable_deleted' => 'Din variabel raderades',

	'field_created' => 'Ditt f�lt skapades',
	'field_updated' => 'Ditt f�lt uppdaterades',
	'field_deleted' => 'Ditt f�lt raderades'

);
