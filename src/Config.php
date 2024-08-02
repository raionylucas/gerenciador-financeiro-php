<?php

namespace src;

class Config
{
    const BASE_DIR = '/gerenciador-financeiro/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost:3308';
    const DB_DATABASE = 'finances';
    const DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}
