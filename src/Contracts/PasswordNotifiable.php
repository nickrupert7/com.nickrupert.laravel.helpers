<?php

namespace NickRupert\LaravelHelpers\Contracts;

interface PasswordNotifiable
{
	public function sendPasswordResetNotification(string $token);

	public function updatePassword(string $password, string $password_confirm);
}