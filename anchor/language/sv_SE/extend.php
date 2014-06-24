<?php

return array(

	'extend' => 'Utöka',

	'fields' => 'Anpassade fält',
	'fields_desc' => 'Skapa ytterligare fält',

	'variables' => 'Webbplats variabler',
	'variables_desc' => 'Skapa ytterligare metadata',

	'create_field' => 'Skapa ett nytt fält',
	'editing_custom_field' => 'Ändrar fält &ldquo;%s&rdquo;',
	'nofields_desc' => 'Det finns inga fält ännu',

	'create_variable' => 'Skapa en ny variabel',
	'editing_variable' => 'Ändrar variabel &ldquo;%s&rdquo;',
	'novars_desc' => 'Det finns inga variabler ännu',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Vilken typ av innehåll som du vill lägga till det här fältet.',

	'field' => 'Fält',
	'field_explain' => 'Html ingångstyp',

	'key' => 'Unik nyckel',
	'key_explain' => 'Den unika nyckeln för ditt fält',
	'key_missing' => 'Vänligen ange en unik nyckel',
	'key_exists' => 'Nyckeln används redan',

	'label' => 'Etikett',
	'label_explain' => 'Läsbart namn på fält',
	'label_missing' => 'Vänligen ange en etikett',

	'attribute_type' => 'Filtyper',
	'attribute_type_explain' => 'Kommaseparerad lista med de accepterade filtyperna. Tomt accepterar alla.',

	// images
	'attributes_size_width' => 'Bild maxbredd',
	'attributes_size_width_explain' => 'Bilder kommer att ändras om de är större än max storlek',

	'attributes_size_height' => 'Bild maxhöjd',
	'attributes_size_height_explain' => 'Bilder kommer att ändras om de är större än max storlek',

	// custom vars
	'name' => 'Namn',
	'name_explain' => 'Ett unikt namn',
	'name_missing' => 'Vänligen ange ett unikt namn',
	'name_exists' => 'Namnet används redan',

	'value' => 'Värde',
	'value_explain' => 'De data du vill lagra (upp till 64kb)',
	'value_code_snipet' => 'Textsnutt att infoga i mallen:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Din variabel skapades',
	'variable_updated' => 'Din variabel uppdaterades',
	'variable_deleted' => 'Din variabel raderades',

	'field_created' => 'Ditt fält skapades',
	'field_updated' => 'Ditt fält uppdaterades',
	'field_deleted' => 'Ditt fält raderades'

);
