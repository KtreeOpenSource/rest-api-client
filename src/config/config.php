<?php

return array(

    /**
     * Rest client environment for selecting services
     * Available: 'production', 'dev'
     */
    'environment' => env('REST_CLIENT_ENV', 'production'),

    /**
     * Debug mode for showing logs
     */
    'debug_mode' => env('APP_DEBUG', false),

    /**
     * Access Token cache time
     * Set 0 to disable cache of access tokens
     */
    'oauth_tokens_cache_minutes' => 10,

    /**
     *  Guzzle Client Config
     */
    'guzzle_client_config' => [
        'timeout' => 29.0,      // Request timeout: 29 secs
    ],

    /**
     * Shared config for services
     */
    'shared_service_config' => [

        'headers' => [
            'User-Agent' => 'someline-testing/1.0',
        ],

        'api_url' => 'api/v1/',

        'oauth2_credentials' => [
            'client_id' => '7',
            'client_secret' => 'xZRsQLkoZqAn9BqcxUWdiMwX7S5tLseYWES56Amx',
        ],

        'oauth2_access_token_url' => 'oauth/token',

        'oauth2_grant_types' => [
            'client_credentials' => 'client_credentials',
            'authorization_code' => 'authorization_code',
            'refresh_token' => 'refresh_token',
            'password' => 'password',
        ],

    ],

    /**
     * Default Service
     */
    'default_service_name' => 'spendmex',

    /**
     * Services
     */
    'services' => [

        // environment: dev
        'dev' => [

            'local' => [

                'base_uri' => env('REST_CLIENT_PRODUCTION_SPENDMEX_URI'),

                'headers' => [
                    'Accept' => 'application/x.someline.v1+json',
                ],

            ],

            'spendmex' => [

                'base_uri' => env('REST_CLIENT_PRODUCTION_SPENDMEX_URI'),

                'headers' => [
                    'Accept' => 'application/x.someline.v1+json',
                ],

            ],

        ],

        // environment: production
        'production' => [

              'spendmex' => [
              'base_uri' => env('REST_CLIENT_PRODUCTION_SPENDMEX_URI'),
              'headers' => [
              'Accept' => 'application/x.someline.v1+json',
              ],

              ],
              'spendmex-auth' => [
              'base_uri' => env('REST_CLIENT_PRODUCTION_SPENDMEX_AUTH_URI'),
              'headers' => [
              'Accept' => 'application/x.someline.v1+json',
              ],

              ],

      ],

    ],

);
