-- Adminer 4.8.1 MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `iot`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `parent_id` bigint unsigned NOT NULL DEFAULT '0',
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_comment` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`id`, `user_id`, `parent_id`, `captcha`, `text_comment`, `created_at`, `updated_at`) VALUES
(1,	1,	0,	'0000',	'первое сообщение',	'2023-11-24 17:39:42',	'2023-11-24 17:39:42'),
(2,	2,	1,	'68678',	'первый комментарий',	'2023-11-24 20:34:46',	'2023-11-24 20:34:46');

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint unsigned NOT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `files` (`id`, `comment_id`, `file_url`, `created_at`, `updated_at`) VALUES
(1,	1,	'/storage/uAjmAWh4R4P3YidNGnXO24u9Rq9mSQF1swSRopoy.png',	'2023-11-24 17:39:42',	'2023-11-24 17:39:42');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `homepage_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `homepage_url`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'user',	'email@i.ua',	NULL,	NULL,	'$2y$12$2.pfo/1sj5TS.Cwf8RPjUOrdBtMKV7GogexV71XITs6ZDVuOIvtlW',	NULL,	'2023-11-24 17:39:42',	'2023-11-24 17:39:42'),
(2,	'Root',	'user@ua.fm',	NULL,	NULL,	'$2y$12$0ft3DgJfsnWCHVelLIJcF.DFvxLfRWrHuK1recst7c4Q/vVIUUqHC',	NULL,	'2023-11-24 20:34:46',	'2023-11-24 20:34:46');

-- 2023-11-24 20:44:36
