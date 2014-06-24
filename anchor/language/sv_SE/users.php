<?php

return array(

	'users' => 'Användare',

	'create_user' => 'Skapa en ny användare',
	'add_user' => 'Lägg till en ny användare',
	'editing_user' => 'Ändrar %s&rsquo;s profil',
	'remembered' => 'Jag kan mitt lösenord',
	'forgotten_password' => 'Glömt ditt lösenord?',

	// roles
	'administrator' => 'Administratör',
	'administrator_explain' => '',

	'editor' => 'Författare',
	'editor_explain' => '',

	'user' => 'Användare',
	'user_explain' => '',

	// form fields
	'real_name' => 'Namn',
	'real_name_explain' => '',

	'bio' => 'Biografi',
	'bio_explain' => '',

	'status' => 'Status',
	'status_explain' => '',

	'role' => 'Roll',
	'role_explain' => '',

	'username' => 'Användarnamn',
	'username_explain' => '',
	'username_missing' => 'Vänligen ange ett användarnamn, måste innehålla minst %s tecken',

	'password' => 'Lösenord',
	'password_explain' => '',
	'password_too_short' => 'Lösenord måste innehålla minst %s tecken',

	'new_password' => 'Nytt lösenord',

	'email' => 'E-post',
	'email_explain' => '',
	'email_missing' => 'Vänligen ange en fungerande e-post adress',
	'email_not_found' => 'Profilen finns inte.',

	// messages
	'updated' => 'Användarprofilen uppdaterades.',
	'created' => 'Användarprofilen skapades.',
	'deleted' => 'Användarprofilen raderades.',
	'delete_error' => 'Du kan inte radera din egen profil',
	'login_error' => 'Användarnamn eller lösenord är felaktigt.',
	'logout_notice' => 'Du är nu utloggad.',
	'recovery_sent' => 'Vi har skickat ett e-post meddelande till dig för att bekräfta ditt lösenordsbyte.',
	'recovery_expired' => 'Lösenordsåterställningen har gått ut, vänligen försök igen.',
	'password_reset' => 'Ditt nya lösenord har ställts in. Gå och logga in nu!',

	// password recovery email
	'recovery_subject' => 'Återställning av lösenord',
	'recovery_message' => 'Du har begärt att återställa ditt lösenord.' .
		'Om du vill fortsätta, följ länken nedan' . PHP_EOL . '%s',

);