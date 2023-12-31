<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PatternLinkEnum extends Enum
{
    const X_URL = '(https?):\/\/twitter\.com\/(.+)|(https?):\/\/www\.twitter\.com\/(.+)';
    const GITHUB_URL = '(https?):\/\/github\.com\/(.+)|(https?):\/\/www\.github\.com\/(.+)';
    const PROFILE_MAKER_URL = '(https?):\/\/hashnode\.com\/(.+)|(https?):\/\/www\.hashnode\.com\/(.+)';
    const YOUTUBE_URL = '(https?):\/\/youtube\.com\/channel\/(.+)|(https?):\/\/www\.youtube\.com\/channel\/(.+)|(https?):\/\/youtube\.com\/c\/(.+)|(https?):\/\/www\.youtube\.com\/c\/(.+)|(https?):\/\/youtube\.com\/@([a-zA-Z0-9._-]+)|(https?):\/\/www\.youtube\.com\/@([a-zA-Z0-9._-]+)';
    const DAILY_URL = '(https?):\/\/app\.daily\.dev\/(.+)';
    const LINKEDIN_URL = '(https?):\/\/linkedin\.com\/in\/(.+)|(https?):\/\/www\.linkedin\.com\/in/(.+)|(https?):\/\/linkedin\.com\/company\/(.+)|(https?):\/\/www\.linkedin\.com\/company/(.+)';
    const FACEBOOK_URL = '(?:https?:\/\/)?(?:www\.)?(mbasic.facebook|m\.facebook|facebook|fb)\.(com|me)\/(?:(?:\w\.)*#!\/)?(?:pages\/)?(?:[\w\-\.]*\/)*([\w\-\.]*)';
    const TWITCH_URL = '((https?:\/\/)?(www\.)?twitch\.tv\/.*)';
    const DISCORD_URL    = '(https:\/\/)?(www\.)?(((discord(app)?)?\.com\/invite)|((discord(app)?)?\.gg))\/(?<invite>.+)';
    const STEAM_URL     = '(?:https?:\/\/)?steamcommunity\.com\/(?:profiles|id)\/[a-zA-Z0-9]+';

    const WORD          = '^(\/(\w)*)';
    const FACEBOOK      = '^' . self::FACEBOOK_URL . '|' . self::WORD;
    const X             = '^' . self::X_URL . '|' . self::WORD;
    const GITHUB        = '^' . self::GITHUB_URL . '|' . self::WORD;
    const PROFILE_MAKER = '^' . self::PROFILE_MAKER_URL . '|' . self::WORD;
    const YOUTUBE       = '^' . self::YOUTUBE_URL . '|' . self::WORD;
    const DAILY         = '^' . self::DAILY_URL . '|' . self::WORD;
    const LINKEDIN      = '^' . self::LINKEDIN_URL . '|' . self::WORD;
    const TWITCH        = '^' . self::TWITCH_URL . '|' . self::WORD;
    const DISCORD       = '^' . self::DISCORD_URL;
    const STEAM         = '^' . self::STEAM_URL;


    const INSTAGRAM = '123';
    const DRIBBBLE = '';
    const GOOGLE = '';
    const TELEGRAM = '';
    const REDDIT = '';
    const GOODREADS = '';
    const WHATSAPP = '';
    const WORDPRESS = '';

}
