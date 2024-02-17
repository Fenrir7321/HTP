<?php

namespace App\Services;

use Illuminate\Http\Request;

/**
 * Интерфейс менеджера аутентификации администратора.
 */
interface AdminAuthManagerInterface
{
    /**
     * Проверяет, является ли пользователь администратором.
     *
     * @param  Request  $request
     * @return bool
     */
    public function isAdmin(Request $request): bool;
}